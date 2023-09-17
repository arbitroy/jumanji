const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const submitBtn = document.querySelector(".submit");
let current = 1;

nextBtnFirst.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-25%";




});
submitBtn.addEventListener("click", function() {
    document.getElementById("msForm").reset();

});

prevBtnSec.addEventListener("click", function(event) {
    event.preventDefault();
    slidePage.style.marginLeft = "0%";

});

function validateFirstPage() {
    var fname = document["msForm"].firstName.value;
    if (fname == "") {
        alert("First Name must be filled");
        return false;
    }

}