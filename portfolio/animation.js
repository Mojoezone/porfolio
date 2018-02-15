var animationJob = document.querySelector("#animationJob");
var animationJobText = "A Frontend Web Developer and Designer";
var textAnimation = animationJobText.split('');

function inputTextAnimation () {
    //only shown the last str if the on par because it finished before the settimeout, * the index for each str
           textAnimation.forEach(function(obj, index){
               setTimeout(function(){
               animationJob.innerHTML += obj;
                 }, 200*index);
              }); 

    }

inputTextAnimation();
setTimeout(function(){
animationJob.addEventListener("mouseenter", function(){    
        animationJob.innerHTML = " &#8595;Checkout My Resume, Click.&#8595;";
    animationJob.style.color = "#4A606E";
}, false);

animationJob.addEventListener("mouseleave", function(){  
    animationJob.innerHTML = "A Frontend Web Developer and Designer";
    animationJob.style.color = "#000";
}, false);
    }, 8000)