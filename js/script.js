$(window).scroll(function() {    
  var scroll = $(window).scrollTop();    
  if (scroll <= 50) { // change this 500 by your own need
      $(".header").addClass("lightHeader").removeClass("darkHeader");
  } else {
      $(".header").addClass("darkHeader").removeClass("lightHeader");
  }
});

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 4,
    centeredSlides: true,
    spaceBetween: 30,
    freeMode: true,
    grabCursor: true,
    autoplay: {
    delay: 2000,
    }
  });

let dropdownStatut = false;

function dropdown(){
  console.log("Hello World");
  let d = document.getElementById("dropdown-menu");
  dropdownStatut = !dropdownStatut;
  if (dropdownStatut){
    d.style.display="flex";
  }
  else{
    d.style.display="none";
  }
}

