let num;
let resultado;
function fibo(num){
    num=prompt("dime un numero para calcular el fibonachi");
    resultado=1;
   for(let i=num; i>0; i--){
       resultado=resultado*i
       console.log(i);
   }
   alert("el fibonatchi es " + resultado)

}

fibo(num);
