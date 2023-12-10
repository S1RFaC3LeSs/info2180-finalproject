window.onload = function () {
    function getData(type){
        fetch ("Contactinfo.php?type="+ type)
        .then (response => response.text())
        .then (data =>{
            document.getElementById("tab").innerHTML = data;
        })
        .catch (error => {
            console.log(error);
        });
    }


document.querySelector(".All").addEventListener("click",function(){
    getData("All");
});
document.querySelector(".Sales_lead").addEventListener("click",function(){
    getData("Sales_lead");
});
document.querySelector(".Support").addEventListener("click",function(){
    getData("Support");
});
};
