
document.getElementsByTagName("form")[0].addEventListener("submit", (event) => {
    event.preventDefault();

    let nombre = document.getElementById("name").value;
    let apellido1 = document.getElementById("first-surname").value;
    let apellido2 = document.getElementById("second-surname").value;

    if(noContieneNumeros(nombre)===true){
        if(noContieneNumeros(apellido1)===true){
            if(noContieneNumeros(apellido2)===true){
                let dni = document.getElementById("dni").value;
                let numDni = Array.from(dni).map(char => parseInt(char));
        
                if (numDni.length !== 8) {
        
                    alert("solo puedes poner 8 numeros en el dni");
                } else {
        
                    for (let i = 0; i < numDni.length; i++) {
                        console.log(numDni[i]);
                        if (Number.isInteger(numDni[i])) {
        
        
                        } else {
        
                            alert("tienes que poner solo numeros en el dni");
                            return;
                        }
        
                    }
                    let letrasDNI = "TRWAGMYFPDXBNJZSQVHLCKE";
                    let numBuscar = dni % 23;
                    let letraExtraida = letrasDNI.charAt(numBuscar);
                    alert("la letra del dni es " + letraExtraida);
        
                }
            }else{
                alert("Solo pueden haber letras en el 2 apellido")
            }
        }else{
            alert("Solo pueden haber letras en el 1 apellido")
        }
    }else{
        alert("Solo pueden haber letras en el nombre")
    }

        
    

});
function noContieneNumeros(texto) {
    
    if (/^\D+$/.test(texto)) {
        return true; 
    } else {
        return false; 
    }
}
