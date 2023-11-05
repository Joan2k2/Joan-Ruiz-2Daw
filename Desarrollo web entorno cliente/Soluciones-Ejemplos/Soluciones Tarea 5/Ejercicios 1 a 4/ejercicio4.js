let gridThree = document.getElementsByClassName('elementor-grid-3');
let content = gridThree[0].innerHTML;
let gridOne = document.getElementsByClassName('elementor-grid-1');
let container = document.getElementsByClassName('container elementor-grid');
let photoContainer = document.getElementsByClassName('photo-container');


const removePhotos = (index) => {
    gridThree[0].className = 'elementor-grid-1';
    container[1].remove();
    Array.from(photoContainer).map((element, index) => {
        (index > 0) && element.remove();
    });
    photos[0].remove();
    createPhoto(index);
}

const createPhoto = (index) => {
    let div = document.createElement('div');
    div.setAttribute('class', 'photo');
    div.style.backgroundImage = `url(images/${index + 1}.jpg)`
    photoContainer[0].appendChild(div);
    div.addEventListener('click', removePhoto);
}

const removePhoto = () => {
    gridOne[0].className = 'elementor-grid-3';
    container[0].remove();
    createPhotos();
}

const createPhotos = () => {
    gridThree[0].innerHTML = content;
    Array.from(photos).map((element, index) => {
        element.addEventListener('click', () => removePhotos(index));
    });
}