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
        <title>Privacy</title>
        <meta name="description" content="We are committed to protecting your personal information. This page aims to help you to understand what information we might collect about you and how we use it" />
        <meta name="keywords" content="personal information, confidential information, ip address, cookies, protect personal information, privacy policy">


    </head>
    <body onload="checkMobile('privacy')">

        <div class="bg" id="bgImg"></div>

        <ul class="ul1" style="font-size: 100%;" id="menu">
            <li class="li1" onclick="location.href = 'index.php'"><a>Home</a></li>
            <li class="li1" onclick="location.href = 'about.php'"><a>About</a></li>
            <li class="li1" onclick="location.href = 'contact.php'"><a>Contact</a></li>
        </ul>

        <img src="images/logo.jpg" class="logo" id="logo" onclick="location.href = 'index.php'">

        <div class="pageContent" id="pageContent">
            <p class="para1">Privacy</p>
            <p class="para2">We are committed to <b>protecting</b> your personal information. This page aims to help you to understand what information we 
            might collect about you and how we use it.</p>
            <p class="para1">Information We Collect</p>
            <p class="para2">When you interact with us we sometimes receive or collect <b>personal</b> information about you. <br><br>
            For example, if you write to us or sign up to receive our services you might tell us who you are and how we can contact you. <br><br>
            When you use our online services, we may use your IP address and/or <b>cookies</b> to provide certain functionality to you and to better understand 
            how our services are being used.<br><br> 
            The information we collect may vary depending on upon which service you use. However, the way we <b>protect</b> your personal information is always within the 
            terms of our <b>Privacy Policy.</b> </p>
            <p class="para2">We may use your information for <u>a number of</u> purposes including the following: </p>
            <ul class="lu4">
                <li class="li4">To contact you.</li><br>
                <li class="li4">To provide you with services requested.</li><br>
                <li class="li4">To customize the way our content is presented to you.</li>
            </ul>
            <p class="para2">We will keep your information <b>confidential</b> and generally we will only use your information within our organization. However, we 
            sometimes use third parties to provide services on our behalf. <br><br>
            To find out more about how we use your information please contact us on our contact page.</p>
        </div>

        <ul class="ul2" id="footer">
            <li style="cursor: context-menu; display: block; color: #FFC000; padding: .7vw 5.1vw; text-decoration: none; font-size: 1vw; display: inline-block;"><a>&copy;AGG Ltd <?php echo date("Y");?></a></li>
            <li class="li2" onclick="location.href = 'privacy.php'" style="text-decoration: underline;"><a>Privacy</a></li>
            <li class="li2" onclick="location.href = 'cookies.php'"><a>Cookies</a></li>
            <li class="li2" onclick="location.href = 'terms.php'"><a>Terms</a></li>
        </ul>

        <img src="images/menu.png" class="menu" onclick="triggerMenu();">
        <div id="drop" class="dropdown">
            <img src="images/logo.jpg" class="logo_menu">
            <img src="images/exitMenu.jpg" class="exitMenu" onclick="exitMenu();">
            <ul class="ul3" style="font-size: 100%;">
                <li class="li3" onclick="location.href = 'index.php'"><a>Home</a></li>
                <li class="li3" onclick="location.href = 'about.php'"><a>About</a></li>
                <li class="li3" onclick="location.href = 'contact.php'"><a>Contact</a></li>
            </ul>
        </div>
    <!-- K.S -->
</html>