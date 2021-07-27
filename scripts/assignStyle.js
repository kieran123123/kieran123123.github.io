//Inserts new stylesheet.
function swapStyleSheet(sheet) {
    document.getElementById('pageStyle').setAttribute('href', sheet);
}

//Checks screen size.
function checkMobile(page) {
    if ($(window).width() < 900) {
        swapStyleSheet("stylesheets/" + page + "/" + page + "Mobile.css");
    } else {
        swapStyleSheet("stylesheets/" + page + "/" + page + "Default.css");
    }
}