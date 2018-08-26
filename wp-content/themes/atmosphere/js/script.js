"use strict";

;(function () {
  if (document.querySelector("#year-start")) {
    document.querySelector("#year-start").textContent = document.querySelector("#year-start").textContent || "2012";
    document.querySelector("#year-current").textContent = new Date().getFullYear();
  }
})();
"use strict";

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

(function () {
  var player = document.querySelector("[data-player]"),
      playersArr = [].concat(_toConsumableArray(player.querySelectorAll("[data-playlist-name]"))),
      playlistList = player.querySelector("[data-playlist-list]");

  var playlistListItemsStr = "";

  playersArr[0].classList.add("active");
  playersArr.forEach(function (item, i) {
    var activeClass = "";

    if (i == 0) {
      activeClass = "active";
    }
    var playlistName = item.getAttribute("data-playlist-name"),
        template = "<li class=\"player__playlist-item " + activeClass + "\" data-name=\"" + playlistName + "\"><a href=\"" + playlistName + "\">" + (i + 1) + ". <span>" + playlistName + "</span></a></li>";

    playlistListItemsStr += template;
  });

  playlistList.innerHTML = playlistListItemsStr;
})();

(function () {
  window.addEventListener("click", function (e) {
    if (e.target.closest("[data-name]") && !e.target.closest("[data-name]").classList.contains("active")) {
      e.preventDefault();
      var link = e.target.closest("[data-name]"),
          linkParent = link.parentElement,
          dataNameValue = link.getAttribute("data-name");

      linkParent.querySelector(".active").classList.remove("active");
      link.classList.add("active");

      console.log(linkParent);

      var player = document.querySelector("[data-player]"),
          playersArr = [].concat(_toConsumableArray(player.querySelectorAll("[data-playlist-name]")));
      playersArr.forEach(function (item) {
        item.classList.remove("active");
        if (dataNameValue == item.getAttribute("data-playlist-name")) {
          item.classList.add("active");
        };
      });
    } else {
      e.preventDefault();
    }
  });
})();

// const faq = document.querySelector(`[data-faq]`);

// if (!faq) return false;

// faq.addEventListener(`click`, (e) => {
//   const target = e.target.closest(`[data-faq-btn]`);

//   if (!target) return false;

//   const parent = target.closest(`[data-faq-item]`),
//         description = parent.querySelector(`[data-faq-description]`),
//         descriptionHeight = description.scrollHeight;

//   if (!description) return false;

//   if (parent.hasAttribute(`data-active`)) {
//     parent.removeAttribute(`data-active`);
//     description.style.height = `0`;
//   } else {
//     parent.setAttribute(`data-active`, true);
//     description.style.height = `${descriptionHeight}px`;
//   }
// });