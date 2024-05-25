const ownerBtn = document.getElementById("ownerBtn");
const renterBtn = document.getElementById("renterBtn");
const createAcc = document.getElementById("createAcc");
ownerBtn.addEventListener("click", switchToOwner);
renterBtn.addEventListener("click", switchToRenter);
createAcc.addEventListener("click", createAccount);

function  switchToOwner(){
    ownerBtn.classList.add('active');
    renterBtn.classList.remove('active');
}
function  switchToRenter(){
    renterBtn.classList.add('active');
    ownerBtn.classList.remove('active');
}
/*
function createAccount{
    const pass = document.getElementById("password").textContent;
    const confPass = document.getElementById("conPassword").textContent;

    if(pass != confPass){
        document.getElementById("error").innerHTML = "Password Not Match"
    }

    
}
*/