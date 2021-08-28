const animationTwo = (elementId) => {
    let animationEffect = document.getElementById(elementId);
    let scrollPosition = animationEffect.getBoundingClientRect().top;
    let screenSize = window.innerHeight;
  
    if (scrollPosition < screenSize - 100) {
      animationEffect.style.animation = "animation2 1s none";
      animationEffect.style.opacity = 1;
    } else {
      animationEffect.style.transition = "all .3s ease";
      animationEffect.style.opacity = 0;
      animationEffect.style.animation = "";
    }
  };
  
  const animationThree = (elementId) => {
    let animationEffect = document.getElementById(elementId);
    let scrollPosition = animationEffect.getBoundingClientRect().top;
    let screenSize = window.innerHeight;
  
    if (scrollPosition < screenSize - 100) {
      animationEffect.style.animation = "animation3 1s .6s none";
      animationEffect.style.animationFillMode = "both";
      animationEffect.style.opacity = 1;
    } else {
      animationEffect.style.transition = "all .3s ease";
      animationEffect.style.opacity = 0;
      animationEffect.style.animation = "";
    }
  };
  window.addEventListener("scroll", () => animationTwo("projects-text"));
  window.addEventListener("scroll", () => animationThree("projects-list"));
  