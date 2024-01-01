// Nav Toggle
let navOpen = document.querySelector('.nav-toggle');
let navbarWrapper = document.querySelector('.navbar-wrapper');

navOpen.addEventListener('click', function(){
    navOpen.classList.toggle('bx-x');
    navbarWrapper.classList.toggle('active');
});

// pindah menu-page
function halamanMenu() {
    window.location.href = 'menu-page.html';
}