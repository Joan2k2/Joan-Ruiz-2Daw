document.getElementsByClassName("container")[0].style.visibility = "hidden";

document.getElementsByTagName("img")[0].addEventListener('dblclick', function(){
    if(document.getElementsByClassName("container")[0].style.visibility==="hidden"){
        document.getElementsByClassName("container")[0].style.visibility = "visible";
    }else{

        document.getElementsByClassName("container")[0].style.visibility="hidden"
    }
    
})