const menu = document.getElementById('menu');
const nav = document.getElementById('nav');



menu.addEventListener('click',()=>{
    if(menu.classList[2]==="fa-times"){
        nav.style.top = "-100%";
        menu.classList.remove('fa-times');
    }else{
        nav.style.top = "0";
        menu.classList.add('fa-times');
    }
    
})