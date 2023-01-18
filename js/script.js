// instantiate the scrollama
const scroller = scrollama();

// setup the instance, pass callback functions
scroller
  .setup({
    step: ".step",
  })
  .onStepEnter((response) => {
    document.getElementsByClassName('header').style.backgroundColor="#EEE2CD";
  })
  .onStepExit((response) => {
    document.getElementsByClassName('header').style.backgroundColor="EEE2CD0";
  });


  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    centeredSlides: true,
    spaceBetween: 30,
    freeMode: true,
    grabCursor: true,
    autoplay: {
      delay: 2000,
    }
  });

