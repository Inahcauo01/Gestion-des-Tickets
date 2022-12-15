const barcanvas=document.getElementById("barcanvas");
const barchart=new Chart(barcanvas,{
    type:"bar",
    data:{
        labels:["beijing","Tokoyo","maroc"],
        dataset:[{
            data:[240,120,100]
        }]
    }
})
console.log("salut");