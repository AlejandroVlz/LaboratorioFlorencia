
let menuu = document.getElementById('menu');
let showMenu = document.getElementById('mostrarMenu');

let menu = true;


showMenu.addEventListener("click", () =>{
    menu = !menu 
    console.log(menu)
    if(menu==false){
        menuu.style.display= "none";
    }else{
        menuu.style.display= "block";

    }
})


