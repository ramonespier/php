let iAtual = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carrossel-item');
    if (slides.length === 0) return;
    if (index >= slides.length) iAtual = 0;
    if (index < 0) iAtual = slides.length - 1;

    const deslocamento = -iAtual * 100;
    document.querySelector('.dentro-carrossel').style.transform = `translateX(${deslocamento}%)`;
}

function moveSlide(step) {
    iAtual += step;
    showSlide(iAtual);
}

document.addEventListener('keydown', function(event) {
if (event.key === "ArrowRight") {
    moveSlide(1);
}
})

document.addEventListener('keydown', function(event) {
if (event.key === "ArrowLeft") {
    moveSlide(-1);
}
})

showSlide(iAtual);