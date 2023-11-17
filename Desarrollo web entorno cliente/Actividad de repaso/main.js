let pr = document.getElementById("keyboard-cont").innerHTML;

borrarTeclado();
let passw = "";
//localStorage.clear();

document.getElementsByTagName("h1")[0].addEventListener("click",()=>{
  let dataObtained = JSON.parse(localStorage.getItem('words')) || [];

  if(dataObtained.length>0){

    dataObtained.forEach((element,index) => {
      console.log(element.palabra);
      
    });
  }

});


document.addEventListener("keypress", (event) => {


  passw += event.key;
  console.log(passw);
  if (passw.length > 11) {
    passw = passw.slice(1);
  }
  if (passw === "abracadabra") {
    passw = "";
    teclado();
  } else if (passw == "patadecabra") {
    passw = "";
    borrarTeclado();
  }

});

//console.log(passw);

function teclado() {
  let palabra="" ;
  var keyboardCont = document.getElementById("keyboard-cont");
  keyboardCont.innerHTML = pr;

  let tecla = document.getElementsByClassName("keyboard-button");
  tecla = Array.from(tecla);
  for (let i = 0; i < tecla.length; i++) {
    let p = tecla[i].innerHTML;

    if (p == "Del") {
      tecla[i].addEventListener("click", () => {
        palabra = palabra.slice(0, -1);
        //console.log(palabra);
      });
    } else if (p == "Enter") {
      tecla[i].addEventListener("click", () => {
        event.preventDefault();
        let dataSaved = JSON.parse(localStorage.getItem('words')) || [];
       
          
        console.log(palabra);
        dataSaved.push({ palabra});
        palabra="";
        localStorage.setItem('words', JSON.stringify(dataSaved));
      });
    } else {
      tecla[i].addEventListener("click", () => {
        palabra+=p;
        //console.log(palabra);
      });
    }
  }

  document.body.appendChild(keyboardCont);
}

function borrarTeclado() {
  let a = document.getElementsByTagName("form")[0];
  a.remove();
}
