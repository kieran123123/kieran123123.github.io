<!DOCTYPE html>
<html>
    <head>
        <script src="scripts/printerMode.js"></script>
        <script src="scripts/assignStyle.js"></script>
        <script src="scripts/dropdown.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.jpg">
        <link id="pageStyle" rel="stylesheet" type="text/css" href="">
        <title>Home</title>
        <meta name="description" content="medport london is an innovative pharmaceutical and healthcare services company serving emerging markets"/>
        <meta name="keywords" content=" medport, professional services company, market access, advice, strategies, pharmaceutical, healthcare, emerging markets, secure, traceable, transparent supply-chains, group, strategic partnerships, regulatory approval, distribute products">
    </head>
    <body onload="checkMobile('index')">

        <div class="bg" id="bgImg"></div>

        <div class="parallax"></div>

        <ul class="ul1" style="font-size: 100%;" id="menu">
            <li class="li1" style="text-decoration: underline;"><a>Home</a></li>
            <li class="li1" onclick="location.href = 'about.php'"><a>About</a></li>
            <li class="li1" onclick="location.href = 'contact.php'"><a>Contact</a></li>
        </ul>

        <img src="images/logo.jpg" class="logo" id="logo" onclick="location.href = 'index.php'">

        <div class="pageContent" id="pageContent">
            <p class="para1" style="margin-top: 7vw;">Artisan Gold Group (AGG) is a commercial venture working to help artisan gold miners around the world.
            These miners are often exploited and suffer exposure to dangerous processes and chemicals.</p>
            <p class="para1">AGG buys unrefined gold from artisan miners at its in-country operational HQs. The gold is melted into
            ingots and may be refined in country before being exported and sold internationally at a profit.</p>
            <p class="para1">AGG reinvests profits back to support the miners and help them to improve their lifestyles and methods
            with the goal of making artisan gold mining a sustainable and ecologically sound alternative to largescale industrial gold mining.</p>
        </div>

        <ul class="ul2" id="footer">
            <li style="cursor: context-menu; display: block; color: #FFC000; padding: .7vw 5.1vw; text-decoration: none; font-size: 1vw; display: inline-block;"><a>&copy;AGG Ltd <?php echo date("Y");?></a></li>
            <li class="li2" onclick="location.href = 'privacy.php'"><a>Privacy</a></li>
            <li class="li2" onclick="location.href = 'cookies.php'"><a>Cookies</a></li>
            <li class="li2" onclick="location.href = 'terms.php'"><a>Terms</a></li>
        </ul>

        <img src="images/menu.png" class="menu" onclick="triggerMenu();">
        <div id="drop" class="dropdown">
            <img src="images/logo.jpg" class="logo_menu">
            <img src="images/exitMenu.jpg" class="exitMenu" onclick="exitMenu();">
            <ul class="ul3" style="font-size: 100%;">
                <li class="li3" style="text-decoration: underline;"><a>Home</a></li>
                <li class="li3" onclick="location.href = 'about.php'"><a>About</a></li>
                <li class="li3" onclick="location.href = 'contact.php'"><a>Contact</a></li>
            </ul>
        </div>
    <!-- K.S -->
</html>