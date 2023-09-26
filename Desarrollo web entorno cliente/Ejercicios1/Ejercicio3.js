let nota;

do{

    nota = prompt("dime la nota que has sacado");
    if(isNaN (nota) || nota>10 || nota<0){
        alert("Tiene que ser un numero de hasta un maximo de 10")
    
    }else{
        
        if(nota<5){
            alert("insuficiente")
        }else if(nota>=5 && nota<6){
            alert("suficiente")
        }else if(nota>=6 && nota<7){
            alert("bien")
        }else if(nota>=7 && nota<8){
            alert("notable")
        }else if(nota>=8 && nota<9){
            alert("notable alto")
        }else if(nota>= 9){
            alert("sobresaliente")
        }     
    }

} while(isNaN(nota) || (nota > 10) || (nota < 0));