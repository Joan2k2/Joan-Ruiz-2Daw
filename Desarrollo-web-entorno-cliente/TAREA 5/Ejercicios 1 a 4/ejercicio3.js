setTimeout(() => {
    divsArray.map((div, index) => {
        document.getElementsByTagName("img")[index].style.opacity = 0.5;
        document.getElementsByTagName("img")[index].style.width = "105%";
        document.getElementsByTagName("img")[index].style.height = "105%";
    });
}, 3700); 

setTimeout(() => {
    divsArray.map((div, index) => {
        document.getElementsByTagName("img")[index].style.opacity = "100%";
        document.getElementsByTagName("img")[index].style.width = "100%";
        document.getElementsByTagName("img")[index].style.height = "300px";
    });
}, 4000); 


setTimeout(() => {
    divsArray.map((div, index) => {
        document.getElementsByTagName("img")[index].style.opacity = 0.5;
        document.getElementsByTagName("img")[index].style.width = "105%";
        document.getElementsByTagName("img")[index].style.height = "105%";
    });
}, 4400);


setTimeout(() => {
    divsArray.map((div, index) => {
        document.getElementsByTagName("img")[index].style.opacity = "100%";
        document.getElementsByTagName("img")[index].style.width = "100%";
        document.getElementsByTagName("img")[index].style.height = "300px";
    });
}, 4800); 