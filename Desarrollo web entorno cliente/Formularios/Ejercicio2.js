
document.getElementsByTagName("form")[1].addEventListener("submit", (event) => {
    event.preventDefault();

    let nombre = document.getElementById("name2").value;
    let apellido1 = document.getElementById("first-surname2").value;
    let apellido2 = document.getElementById("second-surname2").value;
    let correo = document.getElementById("email").value;


    if (noContieneNumeros(nombre) === true) {
        if (noContieneNumeros(apellido1) === true) {
            if (noContieneNumeros(apellido2) === true) {
                if (validarCorreo(correo) === true) {
                    alert("todo ok");
                    
                }else{
                    document.getElementById("email").value=" ";
                }
            } else {
                alert("Solo pueden haber letras en el 2 apellido");
                document.getElementById("second-surname2").value=" ";

            }
        } else {
            alert("Solo pueden haber letras en el 1 apellido");
            document.getElementById("first-surname2").value=" ";
        }
    } else {
        alert("Solo pueden haber letras en el nombre");
        document.getElementById("name2").value=" ";
    }




});
function noContieneNumeros(texto) {

    if (/^\D+$/.test(texto)) {
        return true;
    } else {
        return false;
    }
}
function validarCorreo(texto) {

    return esCorreoElectronico = correoElectronico => /\S+@\S+/.test(correoElectronico);
}