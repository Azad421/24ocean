let previewContainertwo = document.querySelector('.food-preview-container');
let previewBoxtwo = previewContainertwo.querySelectorAll('.food-preview');

document.querySelectorAll('.menu .box-container .box').forEach(menus  =>{
   menus.onclick = () =>{
      previewContainertwo.style.display = 'flex';
      let name = menus.getAttribute('data-name');
      previewBoxtwo.forEach(preveiw =>{
         let target = preveiw.getAttribute('data-target');
         if(name == target){
            preveiw.classList.add('active');
         }
      });
   };
});

previewContainertwo.querySelector('#close-preview').onclick = () =>{
   previewContainertwo.style.display = 'none';
   previewBoxtwo.forEach(close =>{
      close.classList.remove('active');
   });
};

