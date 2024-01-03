bajarOpacidad();

const interval = setInterval(() => {
  anadirOpcadidad();
  clearInterval(interval);
}, 600);

const iner = setInterval(() => {
  bajarOpacidad();
  const intervale = setInterval(() => {
    anadirOpcadidad();
    clearInterval(intervale);
  }, 600);
  clearInterval(iner);
}, 2000);

function bajarOpacidad() {
  let counter = 0;

  const interval = setInterval(() => {
    divs[counter].style.opacity = "60%";
    if (counter === 5) {
      clearInterval(interval);
    }
    counter++;
  }, 100);
}

function anadirOpcadidad() {
  let counter = 5;
  const interval = setInterval(() => {
    divs[counter].style.opacity = "100%";
    if (counter === 0) {
      clearInterval(interval);
    }
    counter--;
  }, 100);

  console.log("object");
}
