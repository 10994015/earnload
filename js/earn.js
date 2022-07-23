const mainBtn = document.getElementById('mainBtn');
const taskModule = document.getElementById('taskModule');
const gifbox = document.getElementById('gifbox');
const cardMoudel = document.getElementById('cardMoudel');
const orderModule = document.getElementById('orderModule');
const urlModule = document.getElementById('urlModule');
const storeModule = document.getElementById('storeModule');
const otherModule = document.getElementById('otherModule');
const taskchkbox = document.getElementById('taskchkbox');
const task = document.getElementsByClassName('task');
const taskBtn = document.getElementById('taskBtn');
const orderClose = document.getElementsByClassName('orderClose');
const cardBtn = document.getElementById("cardBtn");
const cardContent = document.getElementById('cardContent');
const orderBtn = document.getElementById('orderBtn');
const orderTaskBtn = document.getElementsByClassName('orderTaskBtn');

const userTure = document.getElementById('userTure');
const imgArr = [
    {src:"./images/card/001.png"},
    {src:"./images/card/002.png"},
    {src:"./images/card/003.png"},
    {src:"./images/card/004.png"},
    {src:"./images/card/005.png"},
    {src:"./images/card/006.png"},
    {src:"./images/card/007.png"},
    {src:"./images/card/008.png"},
];
let randomNum = Math.floor(Math.random()*8);
mainBtn.addEventListener('click',()=>{
    if(userTure.value==0){
        alert("請先登入!");
        return;
    }
    if(moneyNum.value<=0){
        storeModule.style.display = "flex";
        return;
    }
    if(!taskchkbox.checked){
        taskModule.style.display = "flex";
        return;
    }
    cardMoudel.style.display = "flex";
})

for(let i=0;i<task.length;i++){
    task[i].addEventListener('click',taskAnimFn);
}

function taskBtnFn(){
    taskModule.style.display = "none";
    gifbox.style.display = "flex";
    cardContent.src = imgArr[randomNum].src;
    taskchkbox.checked = true;
    setTimeout(() => {
        gifbox.style.display = "none";
        cardMoudel.style.display = "flex";
    }, 1500);
}
for(let i=0;i<orderClose.length;i++){
    orderClose[i].addEventListener('click',closeModuleFn);
}
cardBtn.addEventListener('click',()=>{
    cardMoudel.style.display = "none";
    orderModule.style.display = "flex";
})
orderBtn.addEventListener('click',()=>{
    orderBtn.style.display = "none";
    urlModule.style.display = "flex";
})
function taskAnimFn(){
    this.classList.add('anim');
    removeBorder();
    this.classList.add('border');
    taskBtn.style.display = "block";
    taskBtn.addEventListener('click',taskBtnFn);
    taskBtn.classList.remove('disable');
    setTimeout(() => {
        this.classList.remove('anim');
    }, 1000);
}
function removeBorder(){
    for(let i=0;i<task.length;i++){
        task[i].classList.remove('border');
    }
}
function closeModuleFn(){
    taskModule.style.display = "none";
    cardMoudel.style.display = "none";
    orderModule.style.display = "none";
    urlModule.style.display = "none";
    storeModule.style.display = "none";
    otherModule.style.display = "none";
}


for(let i=0;i<orderTaskBtn.length;i++){
    orderTaskBtn[i].addEventListener('click',otherModuleFn)
}
function otherModuleFn(){
    if(userTure.value==0){
        alert("請先登入!");
        return;
    }
    otherModule.style.display = "flex";
}