

console.log("test1")

const btn = document.querySelector('.p-button-menu');
const menu = document.querySelector('.l-nav');
const overlay = document.querySelector('.p-menu__bg');
const open = document.querySelector('body')

btn.addEventListener('click', () => {
    console.log("test2")
overlay.classList.toggle('overlay');
menu.classList.toggle('open-menu');
open.classList.toggle('open-menu');

}); 

console.log("test3")


const close = document.querySelector('.c-btn_menu-close');
close.addEventListener('click',() => {
    menu.classList.remove('open-menu');
    overlay.classList.remove('overlay');
    open.classList.toggle('open-menu');

});





// var windowWidth = $(window).width();
// var windowSm = 768;
// if (windowWidth <= windowSm) {
// //横幅768px以下（スマホ）に適用させるJavaScriptを記述
// menu.classList.remove('open-menu');
//     overlay.classList.remove('overlay');
//     open.classList.remove('open-menu');

// } else {
// //横幅768px以上（PC、タブレット）に適用させるJavaScriptを記述
// menu.classList.remove('open-menu');
// overlay.classList.remove('overlay');
//     open.classList.remove('open-menu');
// }