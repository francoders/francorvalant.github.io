// MENU ICON TOGGLE
  window.onscroll = () => {
    let scroll = document.documentElement.scrollTop;
    if (scroll > 400) {
      document.getElementById("show-nav").style.transform = "scale(1)";
    } else {
      document.getElementById("show-nav").style.transform = "scale(0)";
      document.getElementById("span").classList.remove("menu-visible");
      document.querySelector(".menu-icon").classList.remove("spin-menu");
    }
  };
  
  // ANIMATION MENU
  document.querySelector(".show-menu").addEventListener("click", () => {
    document.getElementById("span").classList.toggle("menu-visible");
    document.querySelector(".menu-icon").classList.toggle("spin-menu");
  });
  
  window.onload = () => {
  // SHOW MENU
  document.getElementById("show-nav").style.transform = "scale(0)";

  //LOADER ANIMATION
  document.getElementById("loading").style.opacity = "0";
  document.getElementById("loading").style.visibility = "hidden";
  document.body.style.overflowY = "auto";
  window.scrollTo(0, 0);
};
