 //.............for security reason.................
 (function () {

            var mobileMenu = document.getElementById("mobileMenu");
            var mainNavContainer = document.getElementById("mainNavContainer").classList;
            var mobileClose = document.getElementById("mobileClose");
            var openSubNav = document.getElementById("openSubNav");
            var subNav = document.getElementsByClassName("subNav")[0];
            var bodyTag = document.getElementsByTagName("body")[0].classList;
     //..............escape key................

     function escapeKey (e){
         if (mainNavContainer.contains === "mobileOpen" || e.keyCode === 27) {
             mainNavContainer.remove("mobileOpen");
             mainNavContainer.remove("tabletOpen");
             document.getElementById("mainNavContainer").style.display = "none";
             subNav.style.display = "none";
             bodyTag.remove("bodyWidth");
             mobileMenu.style.display = "block";
         }
     }
     document.addEventListener("keydown", escapeKey);


     //................even hanndler.............

     //..........browser width for media query......


     var winWidth;
     var winHeight;
     var docHeight;

     //     eventhandler(window, "resize", windowResize);

     function windowResize(e){
         winWidth = window.innerWidth;
         winHeight = window.innerHeight;
         docHeight = document.body.clientHeight || document.documentElement.clientHeight;
         mainNavContainer.remove("tabletOpen");
         bodyTag.remove("bodyWidth");
         if (winWidth <= 1280) {
             mobileMenu.style.display = "block";
             document.getElementById("mainNavContainer").style.display = "none";
         } else {
             mobileMenu.style.display = "none";
             document.getElementById("mainNavContainer").style.display = "block";
         }
     }
     window.addEventListener("resize", windowResize);

    function windowLoad (e){
         winWidth = window.innerWidth;
         winHeight = window.innerHeight;
         docHeight = document.body.clientHeight || document.documentElement.clientHeight;
     }
     window.addEventListener("load", windowLoad);


     //........stickyNav.......
     var stickyHeader = document.getElementById("stickyHeader");
     var stickyOffset = stickyHeader.offsetTop;
     var imgToggle = document.getElementById("imgToggle");

     //....check if document height has more than 100 px than the viewport height...
     //     eventhandler(window, "scroll", scrollDetection);

     function scrollDetection(e){
         if (docHeight >= winHeight + 300 && stickyOffset < window.pageYOffset) {
             imgToggle.src = "images/logoFaded.png";
             stickyHeader.classList.add("stickyNav");
             mobileMenu.style.color = "#95989A";
             if (winWidth >= 1280) {
                 stickyHeader.classList.add("dstickyNav");
                 mobileMenu.style.display = "none";
             } else if (winWidth >= 768 && winWidth <= 1280) {
                 mainNavContainer.remove("tabletOpen");
                 document.getElementById("mainNavContainer").style.display = "none";
                 bodyTag.remove("bodyWidth");
                 mobileMenu.style.display = "block";
                 
             }
         } else {
             stickyHeader.classList.remove("stickyNav");
             stickyHeader.classList.remove("dstickyNav");
             imgToggle.src = "images/logo.png";
             mobileMenu.style.color = "#4A606E";
         }
     }

    var timer;
    function stickyTimer(){
        window.addEventListener("scroll", function(){
            clearTimeout(timer);
            scrollDetection();
         timer = setTimeout(function(){
            stickyHeader.classList.remove("stickyNav");
            stickyHeader.classList.remove("dstickyNav");
         }, 10000);
         
        });
    }
    stickyTimer();
     //..............end checking width............
     //     eventhandler(mobileMenu, "click", menuTrigger);

     function menuTrigger(e){
         if (winWidth >= 1280) {
             mobileMenu.style.display = "none";
         } else if (winWidth <= 1280 && winWidth >= 768) {
             mainNavContainer.remove("mobileOpen");
             mainNavContainer.add("tabletOpen");
             document.getElementById("mainNavContainer").style.display = "block";
             bodyTag.add("bodyWidth");
             mobileMenu.style.display = "none";
         } else {
             mainNavContainer.remove("tabletOpen");
             mainNavContainer.add("mobileOpen");
             document.getElementById("mainNavContainer").style.display = "block";
         }
     }
     mobileMenu.addEventListener("click", menuTrigger);


     

     function mobileX(e){
         mainNavContainer.remove("mobileOpen");
         document.getElementById("mainNavContainer").style.display = "none";
         //             mnc;
         subNav.style.display = "none";
         openSubNav.classList.remove("rotateClass");
         document.getElementById("openSubNav").style.color = "#95989A";
         bodyTag.remove("bodyWidth");
         mobileMenu.style.display = "block";
     }
     mobileClose.addEventListener("click", mobileX);
     //..............submenu................

     function toggleSubNav (e) {
         if (!this.classList.contains('rotateClass')) {
             this.classList.add('rotateClass');
             subNav.style.display = "block";
             document.getElementById("openSubNav").style.color = "#e4e4e4";
         } else {
             subNav.style.display = "none";
             openSubNav.classList.remove("rotateClass");
             document.getElementById("openSubNav").style.color = "#95989A";
         }
     }

     openSubNav.addEventListener('click', toggleSubNav);

     //...............end mobile nav ................

     //..................copy right year and greeting...................
     var currentDate = new Date();
     var currentHours = currentDate.getHours();
     var currentYear = currentDate.getFullYear();
     var greeting = document.getElementById("greeting");

function greetingHome(){
     if (greeting) {
         document.getElementById("greeting").innerHTML = checkHours();
     }
     if (currentYear == 2017) {
         document.getElementById("currentYear").innerHTML = currentYear;
     } else {
         document.getElementById("currentYear").innerHTML = 2017 + "-" + currentYear;
     }
    }
    greetingHome();
     function checkHours() {
         if (currentHours >= 17 && currentHours <= 24) {
             return "Good Evening!";
         } else if (currentHours >= 12 && currentHours <= 17) {
             return "Good Afternoon!";
         } else {
             return "Good Morning!";
         }
     }
 

 })();
