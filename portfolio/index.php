<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joe Mo - Home</title>
    <link href="https://fonts.googleapis.com/css?family=Monda:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/normalize.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1 id="myLogo"><a href="index.php"><img src="images/logo.png" alt="Joe Mo Logo"></a></h1>
        <div id="mobileMenu"><span class="icon-menu"></span></div>
        <nav id="mainNavContainer">
            <div class="fadedLogo"><a href="#"><img src="images/logofaded.png" alt="Joe Mo Logo"></a></div>
            <div><span id="mobileClose" class="icon-cancel"></span></div>
            <ul class="mainNav">
                <li>
                    <a class="active" href="#">Home</a>
                </li>
                <li>
                    <a href="#">Portfolio</a><span id="openSubNav">&#187;</span>
                    <ul class="subNav">
                        <li>
                            <a href="#">Fashion Family</a>
                        </li>
                        <li>
                            <a href="#">Shield</a>
                        </li>
                        <li>
                            <a href="#">Goblin Exile</a>
                        </li>
                        <li>
                            <a href="#">Bike Shop</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <div class="mailContainer"><a class="icon-mail" href="mailto:mojoezone@gmail.com">mojoezone@gmail.com</a></div>
        </nav>

    </header>

    <main>
        <div class="introContainer">
            <h3 id="greeting"></h3>
            <h2>My Name is Joe Mo</h2>
            <h2>I am a Frontend Web Developer</h2>
            <a class="moreButton" href="about.php">More</a>
        </div>

    </main>

    <div class="toTop"><a href="#" class="icon-up-open"></a></div>
    <footer>
        <nav>
            <ul class="footerNav">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                    <ul class="subNav">
                        <li>
                            <a href="#">Fashion Family</a>
                        </li>
                        <li>
                            <a href="#">Shield</a>
                        </li>
                        <li>
                            <a href="#">Goblin Exile</a>
                        </li>
                        <li>
                            <a href="#">Bike Shop</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul class="socialNav">
                <li>
                    <a href="#"><span class="icon-linkedin-squared"></span></a>
                </li>
                <li>
                    <a href="#"><span class="icon-github-squared"></span></a>
                </li>
                <li>
                    <a href="#"><span class="icon-codeopen" ></span></a>
                </li>
            </ul>
        </nav>

        <p class="copyRight">&copy;<span id="currentYear"></span> mojoezone.com All Right Reserved.</p>
    </footer>
    <script>
        //.............for security reason.................
        (function() {
            //.........mobile nav ............
            //.........vars..........
            var mobileMenu = document.getElementById("mobileMenu");
            var mainNavContainer = document.getElementById("mainNavContainer").classList;
            var mobileClose = document.getElementById("mobileClose");
            var openSubNav = document.getElementById("openSubNav");
            var subNav = document.getElementsByClassName("subNav")[0];

            //..............escape key................
            document.addEventListener("keydown", function(e) {
                if (mainNavContainer.contains == "mobileOpen" || e.keyCode == 27) {
                    mainNavContainer.remove("mobileOpen");
                    document.getElementById("mainNavContainer").style.display = "none";
                    subNav.style.display = "none";
                }
            });

            //................even hanndler.............

            //..........browser width for media query......
            
            var winWidth;
            var winHeight;
            window.addEventListener("resize", function(){
                winWidth = window.innerWidth;
                winHeight = window.innerHeight;
            }); 
             
            
            mobileMenu.addEventListener("click", function() {
                if(winWidth <= 768){
                mainNavContainer.add("mobileOpen");
                document.getElementById("mainNavContainer").style.display = "block";
                }
            });

            mobileClose.addEventListener("click", function() {
                mainNavContainer.remove("mobileOpen");
                document.getElementById("mainNavContainer").style.display = "none";
            });

            openSubNav.addEventListener("click", function() {
                if (subNav.style.display == "block") {
                    subNav.style.display = "none";
                    openSubNav.classList.remove("rotateClass");
                } else {
                    subNav.style.display = "block";
                    openSubNav.classList.add("rotateClass");
                }
            });
            //...............end mobile nav ................

            //..................copy right year and greeting...................
            var currentDate = new Date();
            var currentHours = currentDate.getHours();
            var currentYear = currentDate.getFullYear();

            document.getElementById("greeting").innerHTML = checkHours();

            if (currentYear == 2017) {
                document.getElementById("currentYear").innerHTML = currentYear;
            } else {
                document.getElementById("currentYear").innerHTML = 2017 + "-" + currentYear;
            }

            function checkHours() {
                if (currentHours >= 17 || currentHours <= 24) {
                    return "Good Evening!";
                } else if (currentHours >= 12 || currentHours <= 17) {
                    return "Good Afternoon!";
                } else {
                    return "Good Morning";
                }
            }


        })();

    </script>
</body>

</html>
