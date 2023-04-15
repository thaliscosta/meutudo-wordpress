AOS.init();

const header = document.querySelector('header').offsetTop;
window.addEventListener('scroll', function () {
    if (window.pageYOffset > header) {
        document.querySelector('header').classList.add('white-header');
    } else {
        document.querySelector('header').classList.remove('white-header');
    }
});