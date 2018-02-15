     //else
//         }else{
//            console.log('notIE');
            //.........mobile nav ............
            //.........vars..........
//           let mobileMenu = document.getElementById("mobileMenu");
//           let mainNavContainer = document.getElementById("mainNavContainer").classList;
//           let mobileClose = document.getElementById("mobileClose");
//           let openSubNav = document.getElementById("openSubNav");
//           let subNav = document.getElementsByClassName("subNav")[0];
//           let bodyTag = document.getElementsByTagName("body")[0].classList;
//            //..............escape key................
//       
//            const escapeKey = (e) => {
//                if (mainNavContainer.contains == "mobileOpen" || e.keyCode == 27) {
//                    mainNavContainer.remove("mobileOpen");
//                    mainNavContainer.remove("tabletOpen");
//                    document.getElementById("mainNavContainer").style.display = "none";
//                    subNav.style.display = "none";
//                    bodyTag.remove("bodyWidth");
//                    mobileMenu.style.display = "block";
//                }
//            }
//            document.addEventListener("keydown", escapeKey);
//       
//       
//            //................even hanndler.............
//       
//            //..........browser width for media query......
//       
//       
//            let winWidth;
//            let winHeight;
//            let docHeight;
//       
//            //     eventhandler(window, "resize", windowResize);
//       
//            const windowResize = (e) => {
//                winWidth = window.innerWidth;
//                winHeight = window.innerHeight;
//                docHeight = document.body.clientHeight || document.documentElement.clientHeight;
//                mainNavContainer.remove("tabletOpen");
//                bodyTag.remove("bodyWidth");
//                if (winWidth <= 1280) {
//                    mobileMenu.style.display = "block";
//                    document.getElementById("mainNavContainer").style.display = "none";
//                } else {
//                    mobileMenu.style.display = "none";
//                    document.getElementById("mainNavContainer").style.display = "block";
//                }
//            }
//            window.addEventListener("resize", windowResize);
//       
//           const windowLoad = (e) => {
//                winWidth = window.innerWidth;
//                winHeight = window.innerHeight;
//                docHeight = document.body.clientHeight || document.documentElement.clientHeight;
//            }
//            window.addEventListener("load", windowLoad);
//       
//       
//            //........stickyNav.......
//            let stickyHeader = document.getElementById("stickyHeader");
//            let stickyOffset = stickyHeader.offsetTop;
//            let imgToggle = document.getElementById("imgToggle");
//       
//            //....check if document height has more than 100 px than the viewport height...
//            //     eventhandler(window, "scroll", scrollDetection);
//       
//            const scrollDetection = (e) => {
//                if (docHeight >= winHeight + 300 && stickyOffset < window.pageYOffset) {
//                    imgToggle.src = "images/logoFaded.png";
//                    stickyHeader.classList.add("stickyNav");
//                    mobileMenu.style.color = "#95989A";
//                    if (winWidth >= 1280) {
//                        stickyHeader.classList.add("dstickyNav");
//                        mobileMenu.style.display = "none";
//                    } else if (winWidth >= 768 && winWidth <= 1280) {
//                        mainNavContainer.remove("tabletOpen");
//                        document.getElementById("mainNavContainer").style.display = "none";
//                        bodyTag.remove("bodyWidth");
//                        mobileMenu.style.display = "block";
//                        
//                    }
//                } else {
//                    stickyHeader.classList.remove("stickyNav");
//                    stickyHeader.classList.remove("dstickyNav");
//                    imgToggle.src = "images/logo.png";
//                    mobileMenu.style.color = "#4A606E";
//                }
//            }
       //     var pyset = window.pageYOffset;
       //     var curPos;
       //    setInterval(stickyInOut, 1000);
       //     var pos;
       //     var timer = 0;
       //
       //     function stickyInOut() {
       //         curPos = window.pageYOffset;
       //         pos = curPos;
       //         console.log(pos, curPos);
       //         if (curPos) {
       //             timer ++;
       //         }
       //     }
       //     if(x){
       //       console.log("yes");  
       //     }
               // var x = window.addEventListener("scroll", scrollDetection);
            //.................detect scroll action.....
       
            //get the current value of x, and the current x value - the past value,
            //1-2-2018 call scroll detection than set the stickyheader to hide in 10s, clear the timer again if scroll.
//           let timer;
//           function stickyTimer(){
//               window.addEventListener("scroll", function(){
//                   clearTimeout(timer);
//                   scrollDetection();
//                timer = setTimeout(function(){
//                   stickyHeader.classList.remove("stickyNav");
//                   stickyHeader.classList.remove("dstickyNav");
//                }, 10000);
//                
//               });
//           }
//           stickyTimer();
//            //..............end checking width............
//            //     eventhandler(mobileMenu, "click", menuTrigger);
//       
//            const menuTrigger = (e) => {
//                if (winWidth >= 1280) {
//                    mobileMenu.style.display = "none";
//                } else if (winWidth <= 1280 && winWidth >= 768) {
//                    mainNavContainer.remove("mobileOpen");
//                    mainNavContainer.add("tabletOpen");
//                    document.getElementById("mainNavContainer").style.display = "block";
//                    bodyTag.add("bodyWidth");
//                    mobileMenu.style.display = "none";
//                } else {
//                    mainNavContainer.remove("tabletOpen");
//                    mainNavContainer.add("mobileOpen");
//                    document.getElementById("mainNavContainer").style.display = "block";
//                }
//            }
//            mobileMenu.addEventListener("click", menuTrigger);
//       
//       
//            
//       
//            const mobileX = (e) => {
//                mainNavContainer.remove("mobileOpen");
//                document.getElementById("mainNavContainer").style.display = "none";
//                //             mnc;
//                subNav.style.display = "none";
//                openSubNav.classList.remove("rotateClass");
//                document.getElementById("openSubNav").style.color = "#95989A";
//                bodyTag.remove("bodyWidth");
//                mobileMenu.style.display = "block";
//            }
//            mobileClose.addEventListener("click", mobileX);
//            //..............submenu................
//       
//            function toggleSubNav (e) {
//                if (!this.classList.contains('rotateClass')) {
//                    this.classList.add('rotateClass');
//                    subNav.style.display = "block";
//                    document.getElementById("openSubNav").style.color = "#e4e4e4";
//                } else {
//                    subNav.style.display = "none";
//                    openSubNav.classList.remove("rotateClass");
//                    document.getElementById("openSubNav").style.color = "#95989A";
//                }
//            }
//       
//            openSubNav.addEventListener('click', toggleSubNav);
//       
//            //...............end mobile nav ................
//       
//            //..................copy right year and greeting...................
//            let currentDate = new Date();
//            let currentHours = currentDate.getHours();
//            let currentYear = currentDate.getFullYear();
//            let greeting = document.getElementById("greeting");
//       
//       function greetingHome(){
//            if (greeting) {
//                document.getElementById("greeting").innerHTML = checkHours();
//            }
//            if (currentYear == 2017) {
//                document.getElementById("currentYear").innerHTML = currentYear;
//            } else {
//                document.getElementById("currentYear").innerHTML = 2017 + "-" + currentYear;
//            }
//           }
//           greetingHome();
//            function checkHours() {
//                if (currentHours >= 17 && currentHours <= 24) {
//                    return "Good Evening!";
//                } else if (currentHours >= 12 && currentHours <= 17) {
//                    return "Good Afternoon!";
//                } else {
//                    return "Good Morning!";
//                }
//            }
//            //....................end year and greeting.....
//       
//            //...............smooth to top.....................
//       
//       
//            //...................animation resume in about page............   
//            //........................dectect landscape orientation.....
//           
//           
//    }//end else
//} //end checkIe fn
//checkIE();