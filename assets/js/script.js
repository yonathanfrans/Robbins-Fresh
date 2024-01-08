// Nav Toggle
let navOpen = document.querySelector('.nav-toggle');
let navbarWrapper = document.querySelector('.navbar-wrapper');

if (navOpen && navbarWrapper) {
    navOpen.addEventListener('click', function(){
        navOpen.classList.toggle('bx-x');
        navbarWrapper.classList.toggle('active');
    });
}

// pindah menu-page
function halamanMenu() {
    window.location.href = 'menu-page.html';
}

// menampilkan / hide password pada form login dan register
document.addEventListener('DOMContentLoaded', function() {
    var showPasswordLogin = document.getElementById('showPasswordLogin');
    var showPasswordRegister = document.getElementById('showPasswordRegister');

    if (showPasswordLogin) {
        showPasswordLogin.addEventListener('click', function() {
            var InputPassword = document.getElementById('PasswordLogin');
            var InputType = InputPassword.getAttribute('type');
            
            if (InputType === 'password') {
                InputPassword.setAttribute('type', 'text');
            } else {
                InputPassword.setAttribute('type', 'password');
            }
        });
    }

    if (showPasswordRegister) {
        showPasswordRegister.addEventListener('click', function() {
            var InputPassword = document.getElementById('PasswordRegister');
            var InputType = InputPassword.getAttribute('type');
            
            if (InputType === 'password') {
                InputPassword.setAttribute('type', 'text');
            } else {
                InputPassword.setAttribute('type', 'password');
            }
        });
    }
});


// Menampilkan / hide form login dan register
const registerLink = document.getElementById('registerLink');
const loginLink = document.getElementById('loginLink');
const signupForm = document.getElementById('signup');
const signinForm = document.getElementById('signin');
const loginForm = document.querySelector('.form-login');

if (registerLink && loginLink && signupForm && signinForm && loginForm) {
    registerLink.addEventListener('click', function(event) {
      event.preventDefault(); 
      signupForm.style.display = 'flex'; 
      signinForm.style.display = 'none'; 
      loginForm.style.height = '500px';
    });
    
    loginLink.addEventListener('click', function(event) {
      event.preventDefault(); 
      signinForm.style.display = 'flex'; 
      signupForm.style.display = 'none'; 
      loginForm.style.height = '450px';
    });
}

