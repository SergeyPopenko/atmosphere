"use strict";

(function(){
  const player = document.querySelector(`[data-player]`),
        playersArr = [...player.querySelectorAll(`[data-playlist-name]`)],
        playlistList = player.querySelector(`[data-playlist-list]`);


  let playlistListItemsStr = "";

  playersArr[0].classList.add(`active`);
  playersArr.forEach((item, i) => {
    let activeClass = "";

    if(i==0) {
      activeClass = "active";
    }
    let playlistName = item.getAttribute(`data-playlist-name`),
        template = `<li class="player__playlist-item ${activeClass}" data-name="${playlistName}"><a href="${playlistName}">${i+1}. <span>${playlistName}</span></a></li>`;

        playlistListItemsStr += template;
  });

  playlistList.innerHTML = playlistListItemsStr;
})();


(function(){
   window.addEventListener(`click`, function(e){
    if(e.target.closest(`[data-name]`) && !e.target.closest(`[data-name]`).classList.contains(`active`)){
      e.preventDefault();
      const link = e.target.closest(`[data-name]`),
            linkParent = link.parentElement,
            dataNameValue = link.getAttribute(`data-name`);

      linkParent.querySelector(`.active`).classList.remove(`active`);
      link.classList.add(`active`);


      console.log(linkParent);

      const player = document.querySelector(`[data-player]`),
        playersArr = [...player.querySelectorAll(`[data-playlist-name]`)];
        playersArr.forEach((item) => {
          item.classList.remove(`active`);
          if(dataNameValue == item.getAttribute(`data-playlist-name`)) {
            item.classList.add(`active`);
          };
        })
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
