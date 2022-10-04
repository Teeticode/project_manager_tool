const menu = document.getElementById("menu-btn-teeti");
const close = document.getElementById("close-btn");
const aside = document.querySelector("aside");
menu.addEventListener("click", ()=>{
    aside.style.display = "block";
});
close.addEventListener("click", ()=>{
    aside.style.display = "None";
})

const filter_btns = document.querySelectorAll('.filter-btn'),
tabs = document.querySelectorAll('.tab-item');

for (let i = 0; i < filter_btns.length; i++) {
    filter_btns[i].addEventListener('click', ()=>{
        for (let j = 0; j < filter_btns.length; j++) {
            filter_btns[j].classList.remove('active');            
        }
        filter_btns[i].classList.add('active')
        let selected_tab = filter_btns[i].getAttribute('data-tab');
        for (let t = 0; t < tabs.length; t++) {
            document.querySelector('.tab-filter-item-container').style.height = tabs[t].scrollHeight + 'px';
            if(tabs[t].classList.contains(selected_tab)){
                tabs[i].classList.add('selected_tab')
            }else{
                tabs[i].classList.remove('selected_tab')
            }
        }
    })
}

// profile section
function openfileprev(){
    var fileinput = document.getElementById('prof-pic');
    fileinput.click()
}
const nextbtn = document.querySelector('.btn-next'),
prevbtn = document.querySelector('.btn-prev'),
subbtn = document.querySelector('.btn-submit'),
steps = document.querySelectorAll(".step"),
formsteps = document.querySelectorAll('.form-step');
var active = 1;
nextbtn.addEventListener("click", ()=>{
    active++;
    if (active > steps.length){
        active = steps.length
    }
    updateProgress();
});

prevbtn.addEventListener("click", ()=>{
    active--;
    if(active < 1){
        active = 1;
    }
    updateProgress();
})
const updateProgress =()=>{
    console.log("steps length: "+steps.length)
    console.log(active)
    steps.forEach((step, i)=>{
    if(i == active - 1){
        step.classList.add('active');
        formsteps[i].classList.add('active')
    }else{
        step.classList.remove('active');
        formsteps[i].classList.remove('active')
    }
    });
    
    //enable or disavle prev next buttons
    
    if(active === 1){
        prevbtn.disabled = true;
        subbtn.style.display = "None"
    }else if (active === steps.length){

        nextbtn.disabled = true;
        subbtn.style.display = "block"
    }
    else{
        prevbtn.disabled = false;
        nextbtn.disabled = false;
        subbtn.style.display = "None"
    }
}