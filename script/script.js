// if (window.location.href.indexOf("Login.html") == -1) {
//     window.location.href = "Login.html";
// }

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".room-slider", {
    spaceBetween: 20,
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".gallery-slider", {
    spaceBetween: 10,
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
        991: {
            slidesPerView: 4,
        },
    },
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 10,
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

let accordions = document.querySelectorAll('.faqs .row .content .box');

accordions.forEach(acco =>{
    acco.onclick = () =>{
        accordions.forEach(subAcco => {subAcco.classList.remove('active')});
        acco.classList.add('active');
    }
})
var icon=document.getElementById("slider");
 icon.onclick=function(){
    document.body.classList.toggle("dark_theme");
 }
 function submitForm() {
    var form =document.getElementById("form");
    var email = document.getElementById("email").value;
    var password1=document.getElementById("password").value;
    

    // Validate email
    if (password1 === ""){
      alert("email and password are empty");
      //setErrorFor(password1, "Email cannot be blank");
    } 
    
    
};

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector("small");
	formControl.className = 'form-group error';
	small.innerText = message;
}
 
//email validation

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
};


 /*loginnnn*/


 function switchForm(className, e) {
	/*e.preventDefault();*/
	const allForm = document.querySelectorAll('form');
	const form = document.querySelector(`form.${className}`);

	allForm.forEach(item=> {
		item.classList.remove('active');
	})
	form.classList.add('active');
}


const registerPassword = document.querySelector('form.register #password');
const registerConfirmPassword = document.querySelector('form.register #confirm-pass');

registerPassword.addEventListener('input', function () {
	registerConfirmPassword.pattern = `${this.value}`;
})