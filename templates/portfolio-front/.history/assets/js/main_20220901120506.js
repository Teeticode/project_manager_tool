const navMenu = document.getElementById("nav-menu"),
      navToggle = document.getElementById("nav-toggle"),
      navClose = document.getElementById("nav-close");
/*=============== SHOW MENU ===============*/
/**validate if constant exists */

if(navToggle){
    navToggle.addEventListener('click',()=>{
        navMenu.classList.add("show-menu")
    })
}
/*============== MENU HIDDEN ===============*/
/**validate if constant exists */
if(navClose){
    navClose.addEventListener('click', ()=>{
        navMenu.classList.remove("show-menu")
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLinks = document.querySelectorAll(".nav-link")

function linkAction(){
    const navMenu = document.getElementById("nav-menu")
    // when we click on each nav link, we remove the menu class
    navMenu.classList.remove("show-menu")
}
navLinks.forEach(n=> n.addEventListener('click', linkAction))
/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById("header")
    //when the scroll is greater than 80 viewport height, add the class scroll header to the tag header
    if(this.scrollY >= 80) header.classList.add("scroll-header"); else header.classList.remove("scroll-header")
}
window.addEventListener("scroll", scrollHeader)
/*=============== TESTIMONIAL SWIPER ===============*/
var swiper = new Swiper(".testimonial-wrapper", {
    loop:'true',
    pagination:{
        el:".swiper-pagination",
        clickable:true
    }
})

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/

/*=============== PORTFOLIO ITEM FILTER ===============*/

/*=============== THEME/DISPLAY CUSTOMIZATION ===============*/
const theme = document.getElementById("theme-button")
const themeModel = document.querySelector(".customize-theme")
const fontSizes = document.querySelectorAll('.choose-size span')
const colorPalette = document.querySelectorAll('.choose-color span')
var root = document.querySelector(':root');

const openThemeModel = ()=>{
    themeModel.style.display = 'grid'
}
//close model
const closeThemeModel =(e)=>{
    if(e.target.classList.contains('customize-theme')){
        themeModel.style.display = 'None';
    }
}
theme.addEventListener('click', openThemeModel)
themeModel.addEventListener('click', closeThemeModel)
/*===== FONTS =====*/
const removeSizeSelector = ()=>{
    fontSizes.forEach(size => {
       size.classList.remove('active'); 
    })
}
fontSizes.forEach(size=>{
    size.addEventListener('click', ()=>{
        removeSizeSelector();
        let fontSize;
        size.classList.toggle('active');
        if(size.classList.contains('font-size-1')){
            fontSize = '12px';
        }else if(size.classList.contains('font-size-2')){
            fontSize='14px';
        }else if(size.classList.contains('font-size-3')){
            fontSize = '16px';
        }else if(size.classList.contains('font-size-4')){
            fontSize = '18px';
        }
        //change font size of the root html element
        document.querySelector('html').style.fontSize = fontSize;
    })
})
/*===== PRIMARY COLORS =====*/
colorPalette.forEach(color=>{
    color.addEventListener('click',()=>{
        let primaryHue;

        if(color.classList.contains('color-1')){
            primaryHue = 252;
        }else if(color.classList.contains('color-2')){
            primaryHue = 52;
        }else if(color.classList.contains('color-3')){
            primaryHue = 352;  
        }else if(color.classList.contains('color-4')){
            primaryHue = 152;  
        }else if(color.classList.contains('color-5')){
            primaryHue = 202;
        }
        root.style.setProperty('--primary-color-hue', primaryHue);

    })
})


/*===== THEME BACKGROUNDS =====*/