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
<script type="text/javascript" src="myjs.js">


</script>
<script>
    var resumeTrigger = document.getElementById("resumeTrigger");
    var resumeContainer = document.getElementById("resumeContainer");
    var aniResume = resumeContainer.querySelectorAll(".aniResume");
   var current;
    var count = 0;
    
    resumeTrigger.addEventListener("click", function() {
       animationResume();
    });
    
    for (var i = 0; i < aniResume.length; i++) {
            count += aniResume[i];
        }

    function animationResume() {
        
        if(count == 0){
            aniResume.style.display = "block";
        }
    }

</script>
</body>

</html>
