do{

    nota = prompt("dime la nota que has sacado");
    if(isNaN (nota) || nota>10 || nota<0){
        alert("Tiene que ser un numero de hasta un maximo de 10")
    
    }else{
        
        switch(true){
            case (nota < 5):
                alert("insuficiente");
                break;
        
            case (nota>=5 && nota<6):
                alert("suficeinte");
                break;
        
            case (nota>=6 && nota<7):
                alert("bien");
                break;
        
            case (nota>=7 && nota<8):
                alert("notable");
                break;
        
            case (nota>=8 && nota<9):
                alert("notable alto+");
                break;
        
            case (nota < 9 && nota >=10):
                alert("sobresaliente");
                break;

        }
    }

} while(isNaN(nota) || (nota > 10) || (nota < 0));