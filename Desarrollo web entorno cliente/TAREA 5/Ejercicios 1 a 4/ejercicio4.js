let imgs= document.getElementsByTagName("img");

//si pongo un imagen.hidden en el ejercicio de abajo funciona
imgs = Array.from(imgs).map((imagen, index) => {
    imagen.addEventListener('click', () => {
        //console.log(imagen);
        ocultarFotos();
        
        console.log(`Se hizo clic en la imagen ${index + 1}`);
        imagen.hidden=false;
        imagen.addEventListener('click', () => {
            //console.log(imagen);
            mostrarFotos();
            
            console.log(`Se hizo clic en la imagen ${index + 1}`);
            
        });
    });
});


function ocultarFotos() {
    let imgs= document.getElementsByTagName("img");
    imgs = Array.from(imgs).map((img,index) => {
        console.log(img);
        img.hidden = true;
        
    });
}

function mostrarFotos() {
    let imgs= document.getElementsByTagName("img");
    imgs = Array.from(imgs).map(img => {
        img.hidden = false;
        return img;
    });
}