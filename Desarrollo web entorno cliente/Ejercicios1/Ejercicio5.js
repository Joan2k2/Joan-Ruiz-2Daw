let lado1=prompt("dime lo que mide un lado vertical");
let lado2=prompt("dime lo que mide un lado horizontal");

function averiguar(lado1,lado2){
    if(lado1!==lado2){
    
    
        alert("el area es: " + lado1*lado2 + " El perimetro es: "+ lado1*2+lado2*2 + " es un rectangulo");
    
    }else{
        alert("el area es: " + lado1*lado2 + " El perimetro es: "+ lado1*2+lado2*2 + " es un cuadrado");
    }
}

averiguar(lado1,lado2);
