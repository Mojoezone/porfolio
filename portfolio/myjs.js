 //.............for security reason.................
 (function () {
     //.........mobile nav ............
     //.........vars..........
     var mobileMenu = document.getElementById("mobileMenu");
     var mainNavContainer = document.getElementById("mainNavContainer").classList;
     var mobileClose = document.getElementById("mobileClose");
     var openSubNav = document.getElementById("openSubNav");
     var subNav = document.getElementsByClassName("subNav")[0];
     var bodyTag = document.getElementsByTagName("body")[0].classList;
     //     var mnc = document.getElementById("mainNavContainer").style.display("block");
     //     mnc = false;

     function eventhandler(trigger, event, expression) {
         //    this.event = 'click';
         return trigger.addEventListener(event, expression, false);
     }

     //..............escape key................
     eventhandler(document, "keydown", escapeKey);
     function escapeKey(event) {
         if (mainNavContainer.contains == "mobileOpen" || e.keyCode == 27) {
             mainNavContainer.remove("mobileOpen");
             mainNavContainer.remove("tabletOpen");
             document.getElementById("mainNavContainer").style.display = "none";
             subNav.style.display = "none";
             bodyTag.remove("bodyWidth");
             mobileMenu.style.display = "block";
         }
         event.preventDefault();
     }
     //     document.addEventListener("keydown", function (e) {
     //         if (mainNavContainer.contains == "mobileOpen" || e.keyCode == 27) {
     //             mainNavContainer.remove("mobileOpen");
     //             mainNavContainer.remove("tabletOpen");
     //             document.getElementById("mainNavContainer").style.display = "none";
     //             subNav.style.display = "none";
     //             bodyTag.remove("bodyWidth");
     //             mobileMenu.style.display = "block";
     //         }
     //     });

     //................even hanndler.............

     //..........browser width for media query......


     var winWidth;
     var winHeight;
     var docHeight;

     eventhandler(window, "resize", windowResize);

     function windowResize(event) {
         winWidth = window.innerWidth;
         winHeight = window.innerHeight;
         docHeight = document.body.clientHeight;
         mainNavContainer.remove("tabletOpen");
         bodyTag.remove("bodyWidth");
         if (winWidth <= 1280) {
             mobileMenu.style.display = "block";
             document.getElementById("mainNavContainer").style.display = "none";
         } else {
             mobileMenu.style.display = "none";
             document.getElementById("mainNavContainer").style.display = "block";
         }
         event.preventDefault();
     }
     //     window.addEventListener("resize", function () {
     //         winWidth = window.innerWidth;
     //         winHeight = window.innerHeight;
     //         docHeight = document.body.clientHeight;
     //         mainNavContainer.remove("tabletOpen");
     //         bodyTag.remove("bodyWidth");
     //         if (winWidth <= 1280) {
     //             mobileMenu.style.display = "block";
     //             document.getElementById("mainNavContainer").style.display = "none";
     //         } else {
     //             mobileMenu.style.display = "none";
     //             document.getElementById("mainNavContainer").style.display = "block";
     //         }
     //     });
     //......resize only check when resizing the browser and load will check as page load..
     eventhandler(window, "load", windowLoad);

     function windowLoad(event) {
         winWidth = window.innerWidth;
         winHeight = window.innerHeight;
         docHeight = document.body.clientHeight;
         event.preventDefault();
     }
     //     window.addEventListener("load", function () {
     //         winWidth = window.innerWidth;
     //         winHeight = window.innerHeight;
     //         docHeight = document.body.clientHeight;
     //     });

     //........stickyNav.......
     var stickyHeader = document.getElementById("stickyHeader");
     var stickyOffset = stickyHeader.offsetTop;
     var imgToggle = document.getElementById("imgToggle");

     //....check if document height has more than 100 px than the viewport height...
     eventhandler(window, "scroll", scrollDetection);

     function scrollDetection(event) {
         if (docHeight >= winHeight + 100 && stickyOffset < window.pageYOffset) {
             imgToggle.src = "images/logoFaded.png";
             if (winWidth >= 1280) {
                 stickyHeader.classList.add("dstickyNav");

                 mobileMenu.style.display = "none";
             } else {
                 stickyHeader.classList.add("stickyNav");

                 mobileMenu.style.color = "#95989A";
                 mainNavContainer.remove("tabletOpen");
                 document.getElementById("mainNavContainer").style.display = "none";
                 bodyTag.remove("bodyWidth");
                 mobileMenu.style.display = "block";
             }
         } else {
             stickyHeader.classList.remove("stickyNav", "dstickyNav");
             imgToggle.src = "images/logo.png";
             mobileMenu.style.color = "#4A606E";
         }
         event.preventDefault();
     }
     //     window.addEventListener("scroll", function (e) {
     //         if (docHeight >= winHeight + 100 && stickyOffset < window.pageYOffset) {
     //             imgToggle.src = "images/logoFaded.png";
     //             if (winWidth >= 1280) {
     //                 stickyHeader.classList.add("dstickyNav");
     //
     //                 mobileMenu.style.display = "none";
     //             } else {
     //                 stickyHeader.classList.add("stickyNav");
     //
     //                 mobileMenu.style.color = "#95989A";
     //                 mainNavContainer.remove("tabletOpen");
     //                 document.getElementById("mainNavContainer").style.display = "none";
     //                 bodyTag.remove("bodyWidth");
     //                 mobileMenu.style.display = "block";
     //             }
     //         } else {
     //             stickyHeader.classList.remove("stickyNav", "dstickyNav");
     //             imgToggle.src = "images/logo.png";
     //             mobileMenu.style.color = "#4A606E";
     //         }
     //
     //     })
     //..............end checking width............
     eventhandler(mobileMenu, "click", menuTrigger);

     function menuTrigger(event) {
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
         event.preventDefault();
     }
     //     mobileMenu.addEventListener("click", function () {
     //         if (winWidth >= 1280) {
     //             mobileMenu.style.display = "none";
     //         } else if (winWidth <= 1280 && winWidth >= 768) {
     //             mainNavContainer.remove("mobileOpen");
     //             mainNavContainer.add("tabletOpen");
     //             document.getElementById("mainNavContainer").style.display = "block";
     //             bodyTag.add("bodyWidth");
     //             mobileMenu.style.display = "none";
     //         } else {
     //             mainNavContainer.remove("tabletOpen");
     //             mainNavContainer.add("mobileOpen");
     //             document.getElementById("mainNavContainer").style.display = "block";
     //         }
     //
     //
     //     });

     //     mobileClose.addEventListener("click", function () {
     //         mainNavContainer.remove("mobileOpen");
     //         document.getElementById("mainNavContainer").style.display = "none";
     //         subNav.style.display = "none";
     //         openSubNav.classList.remove("rotateClass");
     //         document.getElementById("openSubNav").style.color = "#95989A";
     //         bodyTag.remove("bodyWidth");
     //         mobileMenu.style.display = "block";
     //     });

     eventhandler(mobileClose, "click", mobileX);

     function mobileX(event) {
         mainNavContainer.remove("mobileOpen");
         document.getElementById("mainNavContainer").style.display = "none";
         //             mnc;
         subNav.style.display = "none";
         openSubNav.classList.remove("rotateClass");
         document.getElementById("openSubNav").style.color = "#95989A";
         bodyTag.remove("bodyWidth");
         mobileMenu.style.display = "block";
         event.preventDefault();
     }



     //..............submenu................
     eventhandler(openSubNav, "click", toggleSubNav);

     function toggleSubNav(event) {
         if (!this.classList.contains('rotateClass')) {
             this.classList.add('rotateClass');
             subNav.style.display = "block";
             document.getElementById("openSubNav").style.color = "#e4e4e4";
         } else {
             subNav.style.display = "none";
             openSubNav.classList.remove("rotateClass");
             document.getElementById("openSubNav").style.color = "#95989A";
         }
         event.preventDefault();
     }

     //     openSubNav.addEventListener('click', toggleSubNav, false);
     //     openSubNav.addEventListener("click", function () {
     //         if (subNav.style.display == "block") {
     //             subNav.style.display = "none";
     //             openSubNav.classList.remove("rotateClass");
     //             document.getElementById("openSubNav").style.color = "#95989A";
     //         } else {
     //             subNav.style.display = "block";
     //             openSubNav.classList.add("rotateClass");
     //             document.getElementById("openSubNav").style.color = "#e4e4e4";
     //         }
     //     });
     //...............end mobile nav ................

     //..................copy right year and greeting...................
     var currentDate = new Date();
     var currentHours = currentDate.getHours();
     var currentYear = currentDate.getFullYear();
     var greeting = document.getElementById("greeting");

     if (greeting) {
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

//...............smooth to top.....................
     
     
     //...................animation resume in about page............   

 })();
