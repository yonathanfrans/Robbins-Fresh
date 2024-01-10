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

function halamanPayment() {
    window.location.href = "payment.html";
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

// Menampilkan isi pesan berhasil pada payment form
const paymentBtn = document.getElementById('paymentSubmit');
const paymentForm = document.getElementById('payment');
const successMsg = document.getElementById('Success');


if (paymentBtn && successMsg) {
    paymentBtn.addEventListener('click', function(event) {
        event.preventDefault();
        
        const inputs = paymentForm.querySelectorAll('input');

        let allInputsFilled = true;
        inputs.forEach(input => {
            if (input.value === '') {
                allInputsFilled = false;
            }
        });

        if (allInputsFilled) {
            successMsg.style.display = 'flex';
            paymentForm.style.display = 'none';
            
        } else {
            alert('Harap isi semua form terlebih dahulu.');
        }
    });
};

// slideshow payment
let slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  let numbertext = document.getElementsByClassName("numbertext")[0];

  if (slides && dots && numbertext) {
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
    
      slides[slideIndex-1].style.display = "flex";
      dots[slideIndex-1].className += " active";
      numbertext.textContent = "Items " + slideIndex + " of " + slides.length;
    }
  }


// menampilkan shopping cart
const shopCart = document.querySelector('.shop-cart');
const aside = document.querySelector('aside');
const closeCart = document.querySelector('.title-cart i');

if (shopCart && aside) {
    shopCart.addEventListener('click', function(event) {
        event.preventDefault();
        aside.classList.toggle('show-aside');
    });
};

// menutup shopping cart
if (shopCart && aside && closeCart) {
    document.addEventListener('click', function(event) {
        const isClickInsideAside = aside.contains(event.target);
        const isClickOnCart = shopCart.contains(event.target);
        const isClickOnCloseIcon = closeCart.contains(event.target);
    
        if (!isClickInsideAside && !isClickOnCart && !isClickOnCloseIcon) {
            aside.classList.remove('show-aside');
        }
    });
}

function hideCart() {
    const aside = document.querySelector('aside');
    aside.classList.remove('show-aside');
}

// membuat fungsi quantity
const minusButton = document.querySelector('.minus');
const plusButton = document.querySelector('.plus');
const quantityValue = document.querySelector('.quantity-value');

if (minusButton && quantityValue) {
    minusButton.addEventListener('click', function() {
        let currentValue = parseInt(quantityValue.textContent);
        if (currentValue > 1) {
            currentValue--;
            quantityValue.textContent = currentValue;
        }
    });
};

if (plusButton && quantityValue) {
    plusButton.addEventListener('click', function() {
        let currentValue = parseInt(quantityValue.textContent);
        currentValue++;
        quantityValue.textContent = currentValue;
    });
};