let navbar = document.querySelector('.navbar');
let navhead = document.querySelector('.header .navbar');
let cartItem = document.querySelector(".cart-items-container");
let searchForm = document.querySelector(".search-form");

document.querySelector('#menu-btn').onclick = () =>{

    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}


document.querySelector('#cart-btn').onclick = () =>{

    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}


document.querySelector('#search-btn').onclick = () =>{

    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}


window.onscroll = () =>{

    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    grabCursor:true,
    autoplay:true,
    setInterval:7,
    loop:true,
    centeredSlides:true,
    navigation: {
        
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});
 


function scrollFunction(){

    if(document.body.scrollTop > 70 || document.documentElement.scrollTop >70){

        document.getElementById("headerID").style.padding = "20px 8px";
        document.querySelector('.logo img').style.height = "6rem";
        
    
    } else{

        document.getElementById("headerID").style.padding = "3rem 5%";
        document.querySelector('.logo img').style.height = "8rem";
        
    }
}

window.onscroll = function(){
    scrollFunction()
};

/*
//code snippet from https://codepen.io/eksch/pen/xwdOeK
$(window).scroll(function() {$(document).ready(function() {
    $('a[href*=#]').bind('click', function(e) {
            e.preventDefault(); // prevent hard jump, the default behavior

            var target = $(this).attr("href"); // Set the target as variable

            // perform animated scrolling by getting top-position of target-element and set it as scroll target
            $('html, body').stop().animate({
                    scrollTop: $(target).offset().top
            }, 600, function() {
                    location.hash = target; //attach the hash (#jumptarget) to the pageurl
            });

            return false;
    });
});
    var scrollDistance = $(window).scrollTop();

    // Show/hide menu on scroll
    //if (scrollDistance >= 850) {
    //		$('nav').fadeIn("fast");
    //} else {
    //		$('nav').fadeOut("fast");
    //}

    // Assign active class to nav links while scolling
    $('section').each(function(i) {
            if ($(this).position().top <= scrollDistance) {
                    $('.navigation a.active').removeClass('active');
                    $('.navigation a').eq(i).addClass('active');
            }
    });
}).scroll();

*/
//dynamic slide show

/*
var swiper = new Swiper(".food-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    spaceBetween: 20,
    pagination: {
       el: ".swiper-pagination",
       clickable: true,
    },
    breakpoints: {
       0: {
         slidesPerView: 1,
       },
       700: {
         slidesPerView: 2,
       },
       1000: {
         slidesPerView: 3,
       },
    },
});
 
let previewContainer = document.querySelector('.food-preview-container');
let previewBox = previewContainer.querySelectorAll('.food-preview');
 
document.querySelectorAll('.food .slide').forEach(food =>{
    food.onclick = () =>{
       previewContainer.style.display = 'flex';
       let name = food.getAttribute('data-name');
       previewBox.forEach(preveiw =>{
          let target = preveiw.getAttribute('data-target');
          if(name == target){
             preveiw.classList.add('active');
          }
       });
    };
});
 
previewContainer.querySelector('#close-preview').onclick = () =>{
    previewContainer.style.display = 'none';
    previewBox.forEach(close =>{
       close.classList.remove('active');
    });
};
 
var swiper = new Swiper(".menu-slider", {
    grabCursor:true,
    loop:true,
    autoHeight:true,
    centeredSlides:true,
    spaceBetween: 20,
    pagination: {
       el: ".swiper-pagination",
       clickable: true,
    },
});
 
var swiper = new Swiper(".blogs-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    autoHeight:true,
    spaceBetween: 20,
    pagination: {
       el: ".swiper-pagination",
       clickable: true,
    },
    breakpoints: {
       0: {
         slidesPerView: 1,
       },
       700: {
         slidesPerView: 2,
       },
       1000: {
         slidesPerView: 3,
       },
    },
});*/