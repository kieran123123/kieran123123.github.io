function checkMobile() {
    var x = document.getElementById("menu")
    if ($(window).width() < 900) {
        swapStyleSheet("stylesheets/homeMobile.css");
    }
}

function swapStyleSheet(sheet) {
    document.getElementById('pageStyle').setAttribute('href', sheet);
}