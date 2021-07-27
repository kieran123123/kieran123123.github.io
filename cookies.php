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
        <title>About Cookies</title>
        <meta name="description" content="Most websites you visit use cookies in order to improve your user experience" />
        <meta name="keywords" content="cookie, session cookie, persistent cookie, advertising messages, marketing messages, first party cookies, third party cookies, browser preferences, browser settings, cookie prevention, stop cookies">

    </head>
    <body onload="checkMobile('cookies')">

        <div class="bg" id="bgImg"></div>

        <ul class="ul1" style="font-size: 100%;" id="menu">
            <li class="li1" onclick="location.href = 'index.php'"><a>Home</a></li>
            <li class="li1" onclick="location.href = 'about.php'"><a>About</a></li>
            <li class="li1" onclick="location.href = 'contact.php'"><a>Contact</a></li>
        </ul>

        <img src="images/logo.jpg" class="logo" id="logo" onclick="location.href = 'index.php'">

        <div class="pageContent" id="pageContent">
            <p class="para1">About Cookies</p>
            <p class="para2">Most websites you visit use cookies in order to improve your user experience by enabling that website to ‘remember’ you, either for the duration 
            of your visit, using a ‘<b>session cookie</b>’, or for repeat visits, using a ‘<b>persistent cookie</b>’.<br><br>
            Cookies perform a variety of tasks, such as allowing you to navigate between pages efficiently, storing your preferences, and generally improving your experience 
            of a website. Cookies make the interaction between yourself and the website faster and easier. If cookies are not enabled on a website, then the website will think 
            that you are a new visitor every time you move to a new page on the site.<br><br>
            Some websites will also use cookies to enable them to target their <b>advertising</b> or <b>marketing messages</b> based for example, on your location or browsing habits.<br><br>
            Cookies may be set by the website you are visiting, ‘<b>first party cookies</b>’, or they may be set by other websites who run content on the page you are viewing, ‘<b>third 
            party cookies</b>’.<br><br>
            </p>
            <p class="para1">What does a Cookie Contain</p>
            <p class="para2">A cookie is a <b>simple text file</b> that is stored on your computer or mobile device by a website’s server and only that server will be able to retrieve or 
            read the contents of that cookie. Each cookie is unique to your web browser. It will contain some <b>anonymous</b> information such as a unique identifier and the site name 
            and some digits and numbers. It allows a website to remember things like your <b>preferences</b>.</p>
            <p class="para1">Cookie Prevention</p>
            <p class="para2"><u>A number of</u> people find the concept of a website storing information on their computer or mobile device intrusive, particularly when this information is 
            stored and potentially used by a third party without their knowledge. <br><br>
            Although this is generally quite harmless you may not, for example, wish to view advertising that has been targeted to your <u>particular interests</u>. Therefore, if you prefer, 
            it is possible to block some or all cookies, or even to delete the cookies that have already been set. However, you need to be aware that you may lose some functionality 
            of that website.<br><br>
            So if you would like to prevent your device from receiving cookies, you should modify your web browser so that it notifies you when cookies are sent to it or you can refuse 
            cookies altogether. You can also delete any cookies that have already been set. <br><br>
            If you wish to restrict or block web browser cookies which have already been set on your device then you can accomplish this via your web <b>browser settings</b>; the Help function 
            within your browser should tell you how.
            </p>
        </div>
        
        <ul class="ul2" id="footer">
            <li style="cursor: context-menu; display: block; color: #FFC000; padding: .7vw 5.1vw; text-decoration: none; font-size: 1vw; display: inline-block;"><a>&copy;AGG Ltd <?php echo date("Y");?></a></li>
            <li class="li2" onclick="location.href = 'privacy.php'"><a>Privacy</a></li>
            <li class="li2" onclick="location.href = 'cookies.php'" style="text-decoration: underline;"><a>Cookies</a></li>
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