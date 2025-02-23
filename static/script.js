(function () {
    function initButton() {
        var backToTopContainer = document.querySelector('#scroll-to-top');
        var intersectionObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                entry.target.classList.toggle('hidden', entry.isIntersecting);
            });
        });
        intersectionObserver.observe(backToTopContainer);

        var backToTopButton = backToTopContainer.querySelector('button');
        backToTopButton.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    initButton();
}());

//slider images
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider-handle');
    const overlayImage = document.querySelector('.comparison-image.overlay');
    const sliderLine = document.querySelector('.slider-line');

    function updateSlider(value) {
        overlayImage.style.clipPath = `polygon(0 0, ${value}% 0, ${value}% 100%, 0 100%)`;
        sliderLine.style.left = `${value}%`;
    }

    slider.addEventListener('input', function (e) {
        updateSlider(e.target.value);
    });

    // Initialize slider position
    updateSlider(50);
});

