document.getElementsByClassName("nutrition")[0].style.visibility = "hidden";

document.getElementsByTagName("img")[0].addEventListener('click', function(){
    if(document.getElementsByClassName("nutrition")[0].style.visibility==="hidden"){
        document.getElementsByClassName("nutrition")[0].style.visibility = "visible";
    }else{

        document.getElementsByClassName("nutrition")[0].style.visibility="hidden"
    }
    
})



