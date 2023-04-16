AOS.init();

document.querySelector('[js-toggle-menu]').addEventListener('click', function(e) {
    e.preventDefault();
    this.classList.toggle('active');
    document.querySelector('nav').classList.toggle('active');
});

const header = document.querySelector('header').offsetTop;
window.addEventListener('scroll', function () {
    if (window.pageYOffset > header) {
        document.querySelector('header').classList.add('white-header');
    } else {
        document.querySelector('header').classList.remove('white-header');
    }
});


const swiperLoans = new Swiper(".swiper-loans", {
  pagination: {
    el: ".swiper-pagination",
},
});