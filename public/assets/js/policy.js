let navbar = document.querySelector('.navbar');
let navhead = document.querySelector('.header .navbar');


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
