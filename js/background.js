const body = document.querySelector('body');
const IMG_NUMBER = 4;

function printImage(number) {
    const image = new Image();
    image.src = `./img/bg_0${number + 1}.jpg`;
    image.classList.add('bgImage');
    body.style.backgroundImage = `url("img/bg_0${number + 1}.jpg")`;
}

function genNumber() {
    const number = Math.floor(Math.random() * IMG_NUMBER);
    return number;
}

function init() {
    const randomNumber = genNumber();
    printImage(randomNumber);
}

init();