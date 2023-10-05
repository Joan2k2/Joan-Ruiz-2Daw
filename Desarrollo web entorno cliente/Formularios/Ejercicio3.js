document.getElementsByTagName("form")[2].addEventListener("submit", (event) => {
    event.preventDefault();

    let nickname = document.getElementById("nickname").value;
    let film = document.getElementById("film").value;
    let year = document.getElementById("year").value;
    let director = document.getElementById("director").value;
    let cantPelis;
    var select = document.getElementById("category");
    var selectedIndex = select.selectedIndex;
    var contenido = document.getElementsByTagName("option")[selectedIndex].value;

    if (nickname != "" && film != "" && year != "" && director != "" && contenido != "") {
        if (noContieneNumeros(year) ) {
            if (Array.from(year).length != 4) {
                alert("Pon un año valido");
                document.getElementById("year").value = "";
            } else {
                document.getElementsByTagName("p")[2].innerHTML="Nardoh";
                

            }
        } else {
            alert("Solo pueden haber numeros en el año");
            document.getElementById("year").value = "";
        }

    } else {
        alert("No dejes ningún campo vacío");

    }




});

function recibirOpinion(){

   return document.getElementById("message").value;

}
function verificarHumanidad(){
    if (document.getElementById("human").checked === true) {
        return true;

    }else{
        return false;
    }

}
function obtenerCalificacion() {
    //pillar contenido select
    var select = document.getElementById("category");
    var selectedIndex = select.selectedIndex;
    var contenido = document.getElementsByTagName("option")[selectedIndex].value;
    var contenidoEnTexto;

    switch (contenido) {
        case "":
            alert("Seleciona un contenido")

            break;

        case 4:
            return contenidoEnTexto = "Aburrida"
            break;
        case 5:
            return contenidoEnTexto = "Ni fu ni fa"
            break;
        case 6:
            return contenidoEnTexto = "Pasable"
            break;
        case 7:
            return contenidoEnTexto = "No está mal"
            break;
        case 8:
            return contenidoEnTexto = "Buena"
            break;
        case 9:
            return contenidoEnTexto = "La recomiendo"
            break;
        case 10:
            return contenidoEnTexto = "Mi peli preferida"
            break;

    }


}
function calcularPelis() {
    if (document.getElementById("frequency-low").checked === true) {
        cantPelis = "";
        return cantPelis = "Ves entre una pelicula o ninguna";
        console.log("Moises la shupa");
    } else if (document.getElementById("frequency-normal").checked === true) {
        cantPelis = "";
        return cantPelis = "Ves entre dos o tres peliculas ";
        console.log("Moises la shupa2");
    } else {
        cantPelis = "";
        return cantPelis = "Ves entre cuatro o más peliculas";
        console.log("Moises la shupa3");
    }

}
function noContieneNumeros(texto) {

    if (/^\d+$/.test(texto)) {
        return true;
    } else {
        return false;
    }


}