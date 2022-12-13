
function menuToggle() {
    const toggleMenu = document.querySelector('.userMenu');
    toggleMenu.classList.toggle('active')
}

<<<<<<< HEAD
          
}
=======

function iconToggle(){
    var SetTheme = document.body;
    SetTheme.classList.toggle("dark-theme");

    var theme;

    if(SetTheme.classList.contains("dark-theme")){
         console.log("Dark Theme");
         theme = "DARK";
    }else{
        console.log("Light Theme");
        theme = "LIGHT";
    }
    localStorage.setItem("PageTheme", JSON.stringify(theme));
// document.addEventListener("click",(event)=>{
//         event.preventDefault();
}

let GetTheme = JSON.parse(localStorage.getItem("PageTheme"));
console.log(GetTheme);

if(GetTheme === "DARK"){
    document.body.classList = "dark-theme";


}
>>>>>>> Ara
