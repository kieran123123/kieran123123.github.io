function checkMobile() {
    if ($(window).width() < 900) {
        swapStyleSheet("stylesheets/servicesMobile.css");
    }
}

function swapStyleSheet(sheet) {
    document.getElementById('pageStyle').setAttribute('href', sheet);
}

function triggerMenu() {
    document.getElementById("drop").style.transition = ".4s ease";
    document.getElementById("drop").style.top = "0%";
}

function exitMenu() {
    document.getElementById("drop").style.transition = ".4s ease";
    document.getElementById("drop").style.top = "-1000%";
}