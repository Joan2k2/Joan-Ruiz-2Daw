animarNombre("rick sanchez")
function animarNombre(nombre) {
    let contenedor = document.getElementsByTagName("h1")[0];
    let i = 0;
    let posiletra = 0;
    let letra = "";

    const intervalo = setInterval(function () {
        if (i < 9 && posiletra < nombre.length) {
            // Muestra letras aleatorias para los primeros 5 ciclos
            let letraAleatoria = generarLetraAleatoria();
            contenedor.textContent = letra + letraAleatoria;
        } else if (posiletra < nombre.length) {
            // Muestra la letra real después de los primeros 5 ciclos
            i = 0;
            letra += nombre[posiletra];
            contenedor.textContent = letra;
            posiletra++;
        } else {
            // Si ya se mostraron todas las letras del nombre, detén la animación
            clearInterval(intervalo);
        }

        i++;

    }, 100); // Ajusta el intervalo según tus preferencias
}
  
  function generarLetraAleatoria() {
      const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      const longitud = caracteres.length;
      return caracteres.charAt(Math.floor(Math.random() * longitud));
  }
  