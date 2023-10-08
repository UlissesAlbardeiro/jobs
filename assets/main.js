//Menu transition

let ul = document.querySelector('nav .ul');
function openMenu(){
    ul.classList.add('open')
}
function closeMenu(){
    ul.classList.remove('open');
}

//Footer date

let data = new Date();
let ano = data.getFullYear();
document.getElementById('ano').innerText=ano;

