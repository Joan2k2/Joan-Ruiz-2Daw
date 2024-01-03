document.getElementsByTagName("button")[4].addEventListener("click",()=>{
    event.preventDefault();
    guardarDatos2();

});
let colore;
document.getElementsByTagName("button")[5].addEventListener("click",()=>{
    event.preventDefault();
    mostrarUsuarios2();
    document.getElementById('paragraph').style.color = colore;

});
document.getElementsByTagName("button")[6].addEventListener("click",()=>{
    event.preventDefault();
    borrarUsuario();

});
document.getElementsByTagName("button")[7].addEventListener("click",()=>{
    event.preventDefault();
    borrarTodo();

});


function guardarDatos2() {
    let nombre = document.getElementsByTagName("input")[6].value;
    let apellido1 = document.getElementsByTagName("input")[7].value;
    let apellido2 = document.getElementsByTagName("input")[8].value;
    let dni = document.getElementsByTagName("input")[9].value;
    colore= obtenerColor(document.getElementById("color").value);

    

    if (noContieneNumeros(nombre) && noContieneNumeros(apellido1) && noContieneNumeros(apellido2)) {
        if (dni.length === 9) {
            // Recuperar los datos actuales del Local Storage (si existen)
            const datosGuardados = JSON.parse(localStorage.getItem('usuarios')) || [];

            // Agregar el nuevo usuario a la lista
            datosGuardados.push({nombre,apellido1,apellido2,dni,colore});

            // Almacenar la lista actualizada en el Local Storage
            localStorage.setItem('usuarios', JSON.stringify(datosGuardados));
            alert('Datos guardados correctamente.');

        }else{
            alert('introduce bien el dni.');
        }

    } else {
        alert('Por favor, ingrese el nombre y apellidos sin numeros');
    }
    
}
function mostrarUsuarios2(){
    let dni = document.getElementsByName("dni")[1].value;
    const datosGuardados = JSON.parse(localStorage.getItem('usuarios')) || [];

    // Buscar el usuario por DNI
    const usuario = datosGuardados.find((u) => u.dni === dni);

    if (usuario) {
        alert(`Nombre: ${usuario.nombre}`+`Apellido1: ${usuario.apellido1}`+`Apellido2: ${usuario.apellido2}`+`dni: ${usuario.dni}`+`color: ${usuario.colore}`);
    } else {
         alert('Usuario no encontrado.');
    }

}
function obtenerColor(valor) {
  

    switch (valor) {
        case "1":
            return contenidoEnTexto = "lightgrey"
            break;
        case "2":
            return contenidoEnTexto = "green"
            break;
        case "3":
            return contenidoEnTexto = "beige"
            break;
        case "4":
            return contenidoEnTexto = "yellow"
            break;
        case "5":
            return contenidoEnTexto = "salmon"
            break;
        case "6":
            return contenidoEnTexto = "red"
            break;
    }
}