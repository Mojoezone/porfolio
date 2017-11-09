<div class="toTop clearfix"><a href="#" class="icon-up-open"></a></div>
<footer>
   
    <nav>
        <ul class="footerNav">
            <li>
                <a class="<?php if($urlName == 'index'){echo 'active';} ?>" href="index.php">Home</a>
            </li>
            <li>
                <a class="<?php if($urlName == 'portfolio'){echo 'active';} ?>" href="portfolio.php">Portfolio</a>
                <ul class="subNav">
                   <?php 
                            $query = "SELECT p_id, p_name
                                      FROM projects";
                            $result = $db->query($query);
                            if($result->num_rows >= 1){
                                while($row = $result->fetch_assoc()){
                            
                            ?>
                            <li>
                                <a class="<?php if($p_id == $row['p_id']){echo 'active';} ?>" href="project.php?p_id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a>
                            </li>
                         <?php
                                }
                             $result->free();   
                            }
                                    ?>
                </ul>
            </li>
            <li>
                <a class="<?php if($urlName == 'about'){echo 'active';} ?>" href="about.php">About</a>
            </li>
            <li>
                <a class="<?php if($urlName == 'contact'){echo 'active';} ?>"  href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
    <nav>
        <ul class="socialNav">
            <li>
                <a href="https://www.linkedin.com/in/joe-mo-04228b101/" target="_blank"><span class="icon-linkedin-squared"></span></a>
            </li>
            <li>
                <a href="https://github.com/Mojoezone" target="_blank"><span class="icon-github-squared"></span></a>
            </li>
            <li>
                <a href="https://codepen.io/mojoezone/" target="_blank"><span class="icon-codeopen"></span></a>
            </li>
        </ul>
    </nav>

    <p class="copyRight">&copy;<span id="currentYear"></span> mojoezone.com All Right Reserved.</p>
</footer>
<script type="text/javascript" src="myjs.js">


</script>
<script>
//    var toTop = document.querySelector(".toTop");
//    toTop.addEventListener("click", smoothToTop);
//    function smoothToTop(){
//       var toTopLocation = toTop.offsetTop;
//        var winTop = 0;
//        var winScrolled = window.pageXOffset;
//      
//    }
    var resumeTrigger = document.getElementById("resumeTrigger");
    var resumeContainer = document.getElementById("resumeContainer");
    const aniResumes = resumeContainer.querySelectorAll(".aniResume");
    const aniResume = Array.from(aniResumes);
     
//    var aniResumeHeight =  aniResume.forEach(function(aniResume){return aniResume.clientHeight; });
   var current;
    var count;
    
    resumeTrigger.addEventListener("click", function() {
       animationResume();
    });
    
    for (var i = 0; i < aniResume.length; i++) {
          count = aniResume[i].clientHeight;
        }
//aniresume height
    
    function animationResume() {
        var scrollTop = resumeContainer.offsetTop;
        var aniResumeTop = scrollTop + count;
        console.log(scrollTop, aniResumeTop);
//       window.scrollBy(scrollTop);
    }

</script>
</body>

</html>
