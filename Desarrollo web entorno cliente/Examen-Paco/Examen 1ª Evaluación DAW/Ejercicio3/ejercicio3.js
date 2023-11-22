let wordIndex = 0;

setInterval(() => {
    if (wordIndex === 0) {
        animateName("Exam");
        wordIndex = 1;
    } else if (wordIndex === 1) {
        animateName("First");
        wordIndex = 2;
    } else {
        animateName("Evaluation");
        wordIndex = 0;
    }

}, 5000);

function animateName(name1) {
    let container = document.getElementsByTagName("h2")[0];
    let i = 0;
    let letterPos = name1.length - 1; // Start from the last character
    let letter = "";

    const interval = setInterval(function () {
        if (i < 5 && letterPos >= 0) {
            // Display random letters for the first 5 cycles
            let randomLetter = generateRandomLetter();
            container.textContent = randomLetter + letter;
        } else if (letterPos >= 0) {
            // Display the actual letter after the first 5 cycles
            i = 0;
            letter = name1[letterPos] + letter;
            container.textContent = letter;
            letterPos--;
        } else {
            // If all letters of name1 have been shown, stop the animation
            clearInterval(interval);
        }

        i++;

    }, 100); // Adjust the interval according to your preferences
}

function generateRandomLetter() {
    const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    const length = characters.length;
    return characters.charAt(Math.floor(Math.random() * length));
}
