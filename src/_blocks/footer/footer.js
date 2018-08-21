;(function() {
  if (document.querySelector("#year-start")) {
    document.querySelector("#year-start").textContent = document.querySelector("#year-start").textContent || "2012";
    document.querySelector("#year-current").textContent = new Date().getFullYear();
  }
})();
