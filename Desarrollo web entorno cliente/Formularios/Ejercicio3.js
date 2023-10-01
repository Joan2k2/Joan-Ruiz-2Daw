document.getElementsByTagName("form")[2].addEventListener("submit", (event) => {
    event.preventDefault();

    let nickname = document.getElementById("nickname").value;
    let film = document.getElementById("film").value;
    let year = document.getElementById("year").value;
    let director = document.getElementById("director").value;

    //pillar contenido select
    var select = document.getElementById("category");
    var selectedIndex = select.selectedIndex;
    var contenido = document.getElementsByTagName("option")[selectedIndex].value;

    var cantPelisSemana=document.getElementById("frequency-low")
    
    if (noContieneNumeros(year) === true) {
        if (Array.from(year).length!=4) {
            alert("Pon un año valido");
            document.getElementById("year").value=" ";
        } else {
            
            
        }
    } else {
        alert("Solo pueden haber numeros en el año");
        document.getElementById("year").value=" ";
    }




});
function noContieneNumeros(texto) {

    if (/^\D+$/.test(texto)) {
        return true;
    } else {
        return false;
    }
}