let imagenes = ["./src/postres/Flan con huevo.jpg",
    "./src/postres/Flan con nata.jpg",
    "./src/postres/Tarta de manzana.jpg",
    "./src/postres/Tarta de queso.jpg",
    "./src/postres/Tarta de zanahoria.jpg",
    "./src/postres/Tiramisu.jpg"];

let nombresPostres=["Flan con huevo","Flan con nata","Tarta de manzana","Tarta de queso","Tarta de zanahoria","Tiramisu"]    
    let posicion=0;

document.getElementsByTagName("img")[1].src=imagenes[posicion];

document.getElementById("anterior").addEventListener("click",()=>{


if(posicion===0){
    posicion=imagenes.length-1;
    document.getElementsByTagName("img")[1].src=imagenes[posicion];
}else{
    posicion--;
    document.getElementsByTagName("img")[1].src=imagenes[posicion];
}

});

document.getElementById("siguiente").addEventListener("click",()=>{

    if(posicion===imagenes.length-1){
        posicion=0;
        document.getElementsByTagName("img")[1].src=imagenes[posicion];
    }else{
        posicion++;
        document.getElementsByTagName("img")[1].src=imagenes[posicion];
    }
    
    });
document.getElementsByTagName("img")[1].addEventListener("mousedown",()=>{

document.getElementsByTagName("h2")[0].innerHTML=nombresPostres[posicion];


});
document.getElementsByTagName("img")[1].addEventListener("mouseup",()=>{

    document.getElementsByTagName("h2")[0].innerHTML="Tartas";
    
    
    });


