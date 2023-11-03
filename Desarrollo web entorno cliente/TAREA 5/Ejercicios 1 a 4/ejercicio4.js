let imgs= document.getElementsByTagName("img");

//si pongo un imagen.hidden en el ejercicio de abajo funciona
imgs = Array.from(imgs).map((imagen, index) => {
    imagen.addEventListener('click', () => {
        console.log(index);
        borrarContainer(index);

    });
});


function borrarContainer(num){
    let photoContainers = document.getElementsByClassName("photo-container");
    photoContainers = Array.from(photoContainers);
    let a=document.getElementsByClassName("elementor-grid-3");
    a[0].className = "elementor-grid-1";
    console.log(a);
    //a.classList.remove("elementor-grid-3");
    //a.classList.add("elementor-grid-1");
    console.log(photoContainers);
    for (let index = 0; index < photoContainers.length; index++) {
        if (num != index) {
            console.log("Estoy borrando " + index);
            console.log(photoContainers[index]);
            photoContainers[index].remove();
        }
    }
    
}
