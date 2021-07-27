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
        <title>About</title>
        <meta name="description" content="we are committed to every promise we make"/>
        <meta name="keywords" content="experience to deliver projects, long-term business relationships">
    </head>
    <body onload="checkMobile('about')">

        <div class="bg" id="bgImg"></div>

        <ul class="ul1" style="font-size: 100%;" id="menu">
            <li class="li1" onclick="location.href = 'index.php'"><a>Home</a></li>
            <li class="li1" style="text-decoration: underline;"><a>About</a></li>
            <li class="li1" onclick="location.href = 'contact.php'"><a>Contact</a></li>
        </ul>
        
        <img src="images/logo.jpg" class="logo" id="logo" onclick="location.href = 'index.php'">

        <div class="pageContent" id="pageContent" style="margin-bottom: 150vw;">
            <p class="para1"><span style="color: #FFC000;">The Problem</span></p>
            <p class="para2">According to the United Nations, the Artisan gold mining (ASGM) sector produces 16% of the world’s gold
            and involves an estimated 10 to 15 million miners, including 4-5 million women and 1 million children.</p>
            <p class="para2">ASGM is the largest employment area in the gold mining sector accounting for 90% of employment. A
            further 50-60 million people are dependent upon the ASGM miners. The income of these miners is
            generally very low, and they suffer significantly from mercury and arsenical poisoning and criminal
            activity. </p>
            <p class="para2">This ASGM sector produces about 560 tonnes of gold a year worth some $27 billion yet there is no
            organised market and much of the gold ends up in criminal or black-market hands. The countries in
            which the ASGM sector is present, often get little tax revenue and a significant burden of crime,
            accidents and ecological damage. The artisan miners get a very poor price for their gold – if it is not
            stolen – and mine in often dangerous and unhealthy conditions.</p>
            <p class="para1"><span style="color: #FFC000;">The AGG Solution</span></p>
            <p class="para2">Artisan Gold Group (AGG) buys unrefined gold at a discount on the World gold price from artisan miners
            at its operational headquarters in emerging countries. The gold is melted into ingots and may be refined
            in country before being exported and sold internationally.</p>
            <p class="para2">AGG operates ethically and pays tax in the countries where it operates. It also intends to re-invest in the
            artisan miners by providing them with tools, equipment and methods of mining with the goal of
            responsibly improving the sustainability of ASGM. AGG will also contribute socially by providing health
            and educational services to provide a reliable and supportive ecosystem to support the artisan miners.</p>
            <p class="para1"><span style="color: #FFC000;">Highlights</span></p>
            <p class="para2">- AGG’s research and local contacts show that Artisan miners will queue to sell gold to AGG in-country
            if AGG proves to be a, reliable and a prompt payer;</p>
            <p class="para2">- ASGM miners will sell gold at a discount under spot or greater;</p>
            <p class="para2">- AGG already has an agreed customer for sales of up to 500kg gold per month;</p>
            <p class="para2">- In country refining will allow, AGG and the country to manage its gold exports;</p>
            <p class="para2">- There is no organised business model similar to AGG’s.</p>
        </div>

        <ul style="margin-top: 50vw;" class="ul2" id="footer">
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
                <li class="li3" onclick="location.href = 'index.php'"><a>Home</a></li>
                <li class="li3" style="text-decoration: underline;"><a>About</a></li>
                <li class="li3" onclick="location.href = 'contact.php'"><a>Contact</a></li>
            </ul>
        </div>
    <!-- K.S -->
</html>