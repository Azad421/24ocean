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

let loadMoreBtn = document.querySelector('.menu .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.menu .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}

let loadMoreBtns = document.querySelector('.menu .load-more .btn');
let currentItem_two = 3;

loadMoreBtns.onclick = () =>{
   let boxes = [...document.querySelectorAll('.menu .box-container .box')];
   for (var i = currentItem_two; i < currentItem_two + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem_two += 3;
    if(currentItem_two >= boxes.length){
        loadMoreBtns.style.display = 'none';
    }
}


let previewContainer = document.querySelector('.food-preview-container');
let previewBox = previewContainer.querySelectorAll('.food-preview');

document.querySelectorAll('.menu .box-container .box').forEach(menu  =>{
   menu.onclick = () =>{
      previewContainer.style.display = 'flex';
      let name = menu.getAttribute('data-name');
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

