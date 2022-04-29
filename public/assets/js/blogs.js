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

let loadMoreBtn = document.querySelector('.blogs .load-more .btn');
let currentItem = 2;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.blogs .box-container .box')];
   for (var i = currentItem; i < currentItem + 2; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 2;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}


