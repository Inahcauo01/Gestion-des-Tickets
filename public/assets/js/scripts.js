let headerMenu=document.querySelector(".header-menu");
let navPages=document.querySelector("#nav-page");
let navCompt=document.querySelector("#nav-compt");
headerMenu.onclick=()=>{
    console.log("ok");
    navCompt.classList.toggle("active");
    navPages.classList.toggle("active");
    headerMenu.classList.toggle("active");
}
const calendar1 = new dhx.Calendar("calendar1", {
    css: "dhx_widget--bordered"
});

const calendar2 = new dhx.Calendar("calendar2", {
    css: "dhx_widget--bordered"
});

calendar1.link(calendar2);


