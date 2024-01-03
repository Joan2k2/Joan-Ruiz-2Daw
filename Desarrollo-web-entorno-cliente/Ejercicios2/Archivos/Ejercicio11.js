document.addEventListener("keypress",(event)=>{

    if (event.key === "a") {
        document.getElementsByTagName("h1")[0].style.backgroundColor="yellow";
      }else if(event.key === "b"){
          document.getElementsByTagName("h1")[0].style.backgroundColor="green";
      }else if(event.key === "c"){
          document.getElementsByTagName("h1")[0].style.backgroundColor="orange";
      }else{
          document.getElementsByTagName("h1")[0].style.backgroundColor="#05A8AA";
      }


})