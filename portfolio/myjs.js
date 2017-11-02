 //.............for security reason.................
 (function () {
     //.........mobile nav ............
     //.........vars..........
     var mobileMenu = document.getElementById("mobileMenu");
     var mainNavContainer = document.getElementById("mainNavContainer").classList;
     var mobileClose = document.getElementById("mobileClose");
     var openSubNav = document.getElementById("openSubNav");
     var subNav = document.getElementsByClassName("subNav")[0];

     //..............escape key................
     document.addEventListener("keydown", function (e) {
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
     var docHeight;
     window.addEventListener("resize", function () {
         winWidth = window.innerWidth;
         winHeight = window.innerHeight;
         docHeight = document.body.clientHeight;
     });
     //......resize only check when resizing the browser and load will check as page load..
     window.addEventListener("load", function () {
         winWidth = window.innerWidth;
         winHeight = window.innerHeight;
         docHeight = document.body.clientHeight;
     });

     //........stickyNav.......
     var stickyHeader = document.getElementById("stickyHeader");
     var stickyOffset = stickyHeader.offsetTop;
     var imgToggle = document.getElementById("imgToggle");

     //....check if document height has more than 100 px than the viewport height...
     window.addEventListener("scroll", function (e) {
         if (docHeight >= winHeight + 100 && stickyOffset < window.pageYOffset) {
             stickyHeader.classList.add("stickyNav");
             imgToggle.src = "images/logoFaded.png";
             mobileMenu.style.color = "#95989A";
         } else {
             stickyHeader.classList.remove("stickyNav");
             imgToggle.src = "images/logo.png";
             mobileMenu.style.color = "#4A606E";
         }

     })
     //..............end checking width............
     mobileMenu.addEventListener("click", function () {
         if (winWidth <= 768) {
             mainNavContainer.add("mobileOpen");
             document.getElementById("mainNavContainer").style.display = "block";
         }
     });

     mobileClose.addEventListener("click", function () {
         mainNavContainer.remove("mobileOpen");
         document.getElementById("mainNavContainer").style.display = "none";
         subNav.style.display = "none";
         openSubNav.classList.remove("rotateClass");
         document.getElementById("openSubNav").style.color = "#95989A";
     });

     openSubNav.addEventListener("click", function () {
         if (subNav.style.display == "block") {
             subNav.style.display = "none";
             openSubNav.classList.remove("rotateClass");
             document.getElementById("openSubNav").style.color = "#95989A";
         } else {
             subNav.style.display = "block";
             openSubNav.classList.add("rotateClass");
             document.getElementById("openSubNav").style.color = "#e4e4e4";
         }
     });
     //...............end mobile nav ................

     //..................copy right year and greeting...................
     var currentDate = new Date();
     var currentHours = currentDate.getHours();
     var currentYear = currentDate.getFullYear();
     var greeting = document.getElementById("greeting");
     
     if(greeting){
     document.getElementById("greeting").innerHTML = checkHours();
     }
     if (currentYear == 2017) {
         document.getElementById("currentYear").innerHTML = currentYear;
     } else {
         document.getElementById("currentYear").innerHTML = 2017 + "-" + currentYear;
     }

     function checkHours() {
         if (currentHours >= 17 && currentHours <= 24) {
             return "Good Evening!";
         } else if (currentHours >= 12 && currentHours <= 17) {
             return "Good Afternoon!";
         } else {
             return "Good Morning!";
         }
     }
     //....................end year and greeting.....
     
     
     //...................animation resume in about page............   

 })();
