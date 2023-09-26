//ejerccio 1-2
do{
    let edad = prompt("¿Cuantos años tienes?");
    let fecha=2023;
    if(isNaN (edad)){
        alert("Tiene que ser un numero ")
    
    }else{
        alert("Nacieste el " + (fecha-edad))
    }

}while(isNaN (edad));