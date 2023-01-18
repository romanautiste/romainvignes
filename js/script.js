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