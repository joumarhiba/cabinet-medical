let logoImg = document.querySelector(".logo > img");
let navEls = document.querySelectorAll(".navELs");
let burger = document.querySelector("#menu");
let mnav = document.querySelector("#mnav");


mnav.classList.remove("toggle");
if (screen.width <= 650) {
  logoImg.src = "./assets/logo/rrMobile.png";
}
if (screen.width <= 500) {
  navEls.forEach(el => {
    el.classList.add("ghbar");
  });
  burger.classList.remove("ghbar");
  
}
window.addEventListener("resize",()=>{
  mnav.classList.remove("toggle");
  burger.classList.remove("opened");
  burger.style.setProperty("position", "absolute", "important");
  if (screen.width <= 650) {
    logoImg.src = "./assets/logo/rrMobile.png";
  }else {
    logoImg.src = "./assets/logo/rr.png";
    
  }
  if (screen.width <= 500) {
    navEls.forEach(el => {
      el.classList.add("ghbar");
    });
    burger.classList.remove("ghbar");

  }else {
    navEls.forEach(el => {
      el.classList.remove("ghbar");
    });
    burger.classList.add("ghbar");
    mnav.classList.remove("toggle");
    burger.style.setProperty("position", "absolute", "important");
  }
});

burger.addEventListener("click",()=>{
  mnav.classList.toggle("toggle");
  if(mnav.classList.contains("toggle")){
    burger.style.setProperty("position", "fixed", "important");
  }else{
    burger.style.setProperty("position", "absolute", "important");
  }
});