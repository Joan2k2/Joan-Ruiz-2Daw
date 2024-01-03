let modal = document.getElementsByClassName('modal')[0];


document.getElementsByClassName('trigger')[0].addEventListener('click', function () {
    modal.classList.toggle('show-modal');
});

document.getElementsByClassName('close-button')[0].addEventListener('click', function () {
    modal.classList.toggle('show-modal');
});

window.addEventListener('click', function (event) {
    if (event.target === modal) {
        modal.classList.toggle('show-modal');
    }
});