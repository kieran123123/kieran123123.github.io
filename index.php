<!DOCTYPE html>
<html>
    <head>
        <script src="scripts/home.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.jpg">
        <link id="pageStyle" rel="stylesheet" type="text/css" href="stylesheets/homeDefault.css">
        <title>Home</title>
        <meta name="description" content="medport london is an innovative pharmaceutical and healthcare
        services company serving emerging markets"/>
        <meta name="keywords" content=" medport, professional services company, market access, advice,
        strategies, pharmaceutical, healthcare, emerging markets, secure, traceable, transparent supply-chains,
        group, strategic partnerships, regulatory approval, distribute products">
    </head>
    <body onload="checkMobile()">
        <div class="bg">
            <p class="title">Home</p>
        </div>

        <ul class="ul1" style="font-size: 100%;" id="menu">
            <li class="li1"><a>Home</a></li>
            <li class="li1"><a>Markets</a></li>
            <li class="li1"><a>Services</a></li>
            <li class="li1"><a>Technology</a></li>
            <li class="li1"><a>About</a></li>
            <li class="li1"><a>Contact</a></li>
        </ul>

        <img src="images/logo.jpg" class="logo" onclick="location.href = 'home.html'">

        <div class="pageContent">
            <p class="para1">MEDPORT LONDON is an innovative <br> pharmaceutical and healthcare services company <br> serving emerging markets</p>
            <p class="para2">MEDPORT is a professional services company which provides market access advice and strategies to the <br> pharmaceutical and healthcare sectors in emerging markets through secure, traceable and transparent <br> supply-chains.</p>
            <p class="para3">We have an established group of companies and strategic partnerships in some of the fastest growing <br> emerging markets, ensuring that we have the infrastructure and resources to enable our clients to obtain <br> regulatory approval and to securely distribute their products.</p>
        </div>

        <ul class="ul2">
            <li class="li2"><a>©MEDPORT LONDON <?php echo date("Y");?></a></li>
            <li class="li2"><a>Privacy</a></li>
            <li class="li2"><a>Cookies</a></li>
            <li class="li2"><a>Terms</a></li>
        </ul>
    <!-- K.S -->
</html>