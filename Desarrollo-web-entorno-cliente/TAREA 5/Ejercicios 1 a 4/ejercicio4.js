let imgs = document.getElementsByTagName("img");

//si pongo un imagen.hidden en el ejercicio de abajo funciona
imgs = Array.from(imgs).map((imagen, index) => {
    imagen.addEventListener('click', () => {
        if(imgs.length>1){
            console.log(index);
            borrarContainer(index);
            imgs = document.getElementsByTagName("img");
        }else{
            console.log("--------------------------------");
            console.log(divsArray);
            let c = document.getElementsByClassName("photo-container")[0];
            c.remove();
            crearContainers();
            

            crearImagenes();
            imgs = document.getElementsByTagName("img");
           
        }
        
    });
});


function borrarContainer(num) {
    let photoContainers = document.getElementsByClassName("photo-container");
    photoContainers = Array.from(photoContainers);
    let a = document.getElementsByClassName("elementor-grid-3");
    a[0].className = "elementor-grid-1";
    console.log(a);
    console.log(photoContainers);
    for (let index = 0; index < photoContainers.length; index++) {
        if (num != index) {
            console.log("Estoy borrando " + index);
            console.log(photoContainers[index]);
            photoContainers[index].remove();
        }
    }

}
function crearContainers() {
    let elementor=document.getElementsByClassName("elementor-grid-1")[0];
    let container = document.getElementsByClassName("container elementor-grid")[0];
    let container2 = document.getElementsByClassName("container elementor-grid")[1];

    for (let index = 0; index < 3; index++) {
        let divInterno = document.createElement("div");
        divInterno.className = 'photo-container';

        // Crea el elemento .photo dentro del contenedor
        let photo = document.createElement("div");
        photo.className = 'photo';
        divInterno.appendChild(photo);

        container.appendChild(divInterno);
    }

    for (let index = 0; index < 3; index++) {
        let divInterno = document.createElement("div");
        divInterno.className = 'photo-container';

        // Crea el elemento .photo dentro del contenedor
        let photo = document.createElement("div");
        photo.className = 'photo';
        divInterno.appendChild(photo);

        container2.appendChild(divInterno);
    }

    // Añade los contenedores de nuevo al documento
    elementor.appendChild(container);
    elementor.appendChild(container2);
    elementor.className = "elementor-grid-3";
}
