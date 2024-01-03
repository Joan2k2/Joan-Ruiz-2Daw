createImages();

let imgClickFruits;
let imgClickFlowers;
let a = document.getElementsByClassName("photo")[0];
let b = document.getElementsByClassName("photo")[1];
let c = document.getElementsByClassName("photo")[2];
let d = document.getElementsByClassName("photo")[3];
let e = document.getElementsByClassName("photo")[4];
let f = document.getElementsByClassName("photo")[5];

setInterval(() => {
    if (imgClickFruits != null && imgClickFruits != undefined) {
        // If a fruits image is clicked, don't change the images
        return;
    }

    let flower1 = Math.floor(Math.random() * 3) + 1;
    let flower2 = Math.floor(Math.random() * 3) + 1;
    let flower3 = Math.floor(Math.random() * 3) + 1;
    let fruit1 = Math.floor(Math.random() * 3) + 1;
    let fruit2 = Math.floor(Math.random() * 3) + 1;
    let fruit3 = Math.floor(Math.random() * 3) + 1;

    let randomNumbers = [1, 2, 3];
    shuffleArray(randomNumbers);

    if (imgClickFlowers != null && imgClickFlowers != undefined) {
        // If a flowers image is clicked, don't change those images
        let pi = randomNumbers[0];
        let pe = randomNumbers[1];
        let po = randomNumbers[2];

        d.style.backgroundImage = "url('./images/flores/" + pi + ".jpg')";
        e.style.backgroundImage = "url('./images/flores/" + pe + ".jpg')";
        f.style.backgroundImage = "url('./images/flores/" + po + ".jpg')";
    } else {
        // If no image is clicked, update all images
        fruit1 = randomNumbers[0];
        fruit2 = randomNumbers[1];
        fruit3 = randomNumbers[2];

        a.style.backgroundImage = "url('./images/frutas/" + fruit1 + ".jpg')";
        b.style.backgroundImage = "url('./images/frutas/" + fruit2 + ".jpg')";
        c.style.backgroundImage = "url('./images/frutas/" + fruit3 + ".jpg')";

        d.style.backgroundImage = "url('./images/flores/" + flower1 + ".jpg')";
        e.style.backgroundImage = "url('./images/flores/" + flower2 + ".jpg')";
        f.style.backgroundImage = "url('./images/flores/" + flower3 + ".jpg')";
    }
}, 100);

function createImages() {
    for (let index = 0; index < 6; index++) {
        let image = document.getElementsByClassName("photo")[index];
        image.addEventListener("click", () => {
            if (index <= 2) {
                imgClickFruits = index;
            } else {
                imgClickFlowers = index;
            }
        });
    }
}

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}
