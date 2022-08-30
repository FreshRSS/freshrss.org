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
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    initButton();
}());

