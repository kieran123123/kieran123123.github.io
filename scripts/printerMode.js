function printerMode() {
    var printerMode = true;
    document.getElementById("bgImg").style.display = "none";
    document.getElementById("pageContent").style.marginTop = "15%";
    document.getElementById("printBtn").style.opacity = ".3";
    document.getElementById("logo").style.opacity = ".3";
    document.getElementById("drop").style.display = "none";
    document.getElementById("footer").style.display = "none";
    document.getElementById("menu").style.opacity = ".3";
    window.print();
}

function checkPrint() {
    var x = document.getElementById("printBtn");
    var z = document.getElementById("cancel");
    if (x.style.display === "none") {
      x.style.display = "block";
      z.style.display = "none";
      document.getElementById("bgImg").style.display = "block";
        document.getElementById("pageContent").style.marginTop = "1%";
        document.getElementById("printBtn").style.opacity = "1";
        document.getElementById("logo").style.opacity = "1";
        document.getElementById("drop").style.display = "block";
        document.getElementById("footer").style.display = "block";
        document.getElementById("menu").style.opacity = "1";
    } else {
      x.style.display = "none";
      z.style.display = "block";
    }
}