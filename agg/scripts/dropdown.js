//Makes mobile menu drop down.
function triggerMenu() {
    document.getElementById("drop").style.transition = ".4s ease";
    document.getElementById("drop").style.top = "0%";
}

//closes the mobile menu.
function exitMenu() {
    document.getElementById("drop").style.transition = ".4s ease";
    document.getElementById("drop").style.top = "-1000%";
}