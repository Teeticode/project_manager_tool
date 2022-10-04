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

//get all sections that have an id
const sections = document.querySelectorAll("section[id]");

//add an event listener listening for scroll 
window.addEventListener("scroll", navHighlighter);
function navHighlighter(){
    //get current scroll position
    let scrollY = window.pageYOffset;
    //Now we loop through sections to get height, top and id values for each
    sections.forEach(current=>{
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50,
        sectionId = current.getAttribute("id");
        
        /**
         * if our current scroll position enter the space where current section on screen is, add .active class to corresponding navigation link, else remove it
         * - To know which link needs an active class, we use sectionId variable we are getting while loopong through section as a selector
         */
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight ){
            document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    }) 
}

/*=============== PORTFOLIO ITEM FILTER ===============*/
const filterContainer = document.querySelector(".portfolio-filter-inner"),
      filterBtns = filterContainer.children,
      totalFilterBtn = filterBtns.length,
      portfolioitems = document.querySelectorAll(".portfolio-item"),
      totalPortfolioItems = portfolioitems.length,
      btnHeaders = document.querySelector(".btn-headers"),
      forms = document.querySelectorAll(".form"),
      totalforms = forms.length,
      btns=btnHeaders.children,
      authbtn = document.querySelectorAll(".btn-login"),
      loginmodal = document.querySelector(".login-modal .card .form")
      totalbtns = authbtn.length;
      console.log(forms)
      for(let i=0; i<totalbtns; i++){
        btns[i].addEventListener('click', function(){
            btnHeaders.querySelector(".form").classList.remove("")
            const filterBtnValue = this.getAttribute("data-filter")
            for(let k =0; i<totalforms; k++ ){
                if(filterBtnValue === forms[k].getAttribute("data-category")){
                    forms[k].classList.remove("hide");
                    forms[k].classList.add("show");
                    
                }else{
                    
                    forms[k].classList.add("hide");
                    forms[k].classList.remove("show");
                }
            }
        })
      }
      

      for(let i = 0; i<totalFilterBtn; i++){
        filterBtns[i].addEventListener('click', function(){
            filterContainer.querySelector('.active').classList.remove('active')
            this.classList.add('active')
            const filterValue = this.getAttribute("data-filter");
            for(let k=0; i<totalPortfolioItems; k++){
                if(filterValue === portfolioitems[k].getAttribute("data-category")){
                    portfolioitems[k].classList.remove("hide");
                    portfolioitems[k].classList.add("show");
                }else{
                    portfolioitems[k].classList.add("hide");
                    portfolioitems[k].classList.remove("show");
                }
                if(filterValue==="all"){
                    portfolioitems[k].classList.remove("hide");
                    portfolioitems[k].classList.add("show");
                }
            }

        })
      }

/*=============== THEME/DISPLAY CUSTOMIZATION ===============*/
const theme = document.getElementById("theme-button")
const themeModel = document.querySelector(".customize-theme")
const fontSizes = document.querySelectorAll('.choose-size span')
const colorPalette = document.querySelectorAll('.choose-color span')
var root = document.querySelector(':root');
const Bg1 = document.querySelector('.bg-1');
const Bg2 = document.querySelector('.bg-2');
const Bg3 = document.querySelector('.bg-3');


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
const removeColorSelector = ()=>{
    colorPalette.forEach(color => {
       color.classList.remove('active'); 
    })
}
colorPalette.forEach(color=>{
    color.addEventListener('click',()=>{
        removeColorSelector();
        let primaryHue;
        color.classList.toggle('active')
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

let lightColorLightness;
let whiteColorLightness;
let darkColorLightness;
//change background
const changeBg = ()=>{
    root.style.setProperty('--light-color-lightness', lightColorLightness);
    root.style.setProperty('--white-color-lightness', whiteColorLightness);
    root.style.setProperty('--dark-color-lightness', darkColorLightness);
}

Bg1.addEventListener('click',()=>{
    
    //add active class
    Bg1.classList.add('active');
    Bg2.classList.remove('active');
    Bg3.classList.remove('active');
    window.location.reload();
})
Bg2.addEventListener('click',()=>{
    darkColorLightness = '95%';
    whiteColorLightness = '20%';
    lightColorLightness = '15%';

    //add active class
    Bg2.classList.add('active');
    Bg1.classList.remove('active');
    Bg3.classList.remove('active');
    changeBg();
})
Bg3.addEventListener('click',()=>{
    darkColorLightness = '95%';
    whiteColorLightness = '10%';
    lightColorLightness = '0%';

    //add active class
    Bg3.classList.add('active');
    Bg1.classList.remove('active');
    Bg2.classList.remove('active');
    changeBg();
})