
document.getElementsByTagName("form")[0].addEventListener("submit",(event)=>{
    event.preventDefault();
    let dni=document.getElementById("dni").value;
    let numDni=Array.from(dni);
    
    if(numDni.length>8 || numDni.length<7){
    
        alert("no puedes poner menos de 8 numeros o más de 8 numeros");
    }else{

        for (let i = 0; i < numDni.length; i++) {
            if(Number.isInteger(numDni[i])){
                console.log("ok");

            }else{

                alert("tienes que poner solo numeros");
                break;
            }
            
        }
    }

})
