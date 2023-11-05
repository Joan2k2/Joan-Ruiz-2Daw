document.getElementsByTagName("button")[0].addEventListener("click",()=>{
    event.preventDefault();
    guardarDatos();

});
document.getElementsByTagName("button")[1].addEventListener("click",()=>{
    event.preventDefault();
    mostrarUsuarios();

});
document.getElementsByTagName("button")[2].addEventListener("click",()=>{
    event.preventDefault();
    borrarUsuario();

});
document.getElementsByTagName("button")[3].addEventListener("click",()=>{
    event.preventDefault();
    borrarTodo();

});

function guardarDatos() {
    let nombre = document.getElementsByTagName("input")[0].value;
    let apellido1 = document.getElementsByTagName("input")[1].value;
    let apellido2 = document.getElementsByTagName("input")[2].value;
    let dni = document.getElementsByTagName("input")[3].value;

    if (noContieneNumeros(nombre) && noContieneNumeros(apellido1) && noContieneNumeros(apellido2)) {
        if (dni.length === 9) {
            // Recuperar los datos actuales del Local Storage (si existen)
            const datosGuardados = JSON.parse(localStorage.getItem('usuarios')) || [];

            // Agregar el nuevo usuario a la lista
            datosGuardados.push({nombre,apellido1,apellido2,dni });

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

function noContieneNumeros(texto) {

    if (/^\D+$/.test(texto)) {
        return true;
    } else {
        return false;
    }
}

function mostrarUsuarios(){
    let dni = document.getElementsByName("dni")[0].value;
    const datosGuardados = JSON.parse(localStorage.getItem('usuarios')) || [];

    // Buscar el usuario por DNI
    const usuario = datosGuardados.find((u) => u.dni === dni);

    if (usuario) {
        alert(`Nombre: ${usuario.nombre}`+`Apellido1: ${usuario.apellido1}`+`Apellido2: ${usuario.apellido2}`+`dni: ${usuario.dni}`);
    } else {
         alert('Usuario no encontrado.');
    }

}
function borrarUsuario(){
    let dni = document.getElementsByName("delete_item")[0].value;
    const datosGuardados = JSON.parse(localStorage.getItem('usuarios')) || [];

    // Filtrar la lista para eliminar el usuario con el DNI indicado
    const nuevaLista = datosGuardados.filter((u) => u.dni !== dni);

    // Actualizar la lista en el Local Storage
    localStorage.setItem('usuarios', JSON.stringify(nuevaLista));
    alert('Registro borrado correctamente.');

}

function borrarTodo(){
    localStorage.removeItem('usuarios');
    alert('Todos los registros han sido borrados.');
}
