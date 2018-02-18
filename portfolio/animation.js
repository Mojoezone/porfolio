(function(){
var animationJob = document.querySelector("#animationJob");
var animationJobText = "A Frontend Web Developer and Designer";
var textAnimation = animationJobText.split('');
    
var radiusWidth = window.innerWidth/2;
var pi = 3.141592;
var circumferencePix;
//get the circumference
var getCircumference =  Math.floor(circumferencePix = 2*pi*radiusWidth);
var spaceText = Math.floor(getCircumference/animationJobText.length); 
var getDeg = 360/(animationJobText.length);
//const setDeg =()=> textAnimation[''].style.transform ='rotate('+getDeg+'deg)';




function inputTextAnimation () {
    //only shown the last str if the on par because it finished before the settimeout, * the index for each str
           textAnimation.forEach(function(obj, index){
               setTimeout(function(){
                   animationJob.innerHTML += obj;
                   //animationJob.style.letterSpacing = spaceText + 'px';
                   //index + 1 to set it equal to 360 deg because the index array is 0-35
                   animationJob.style.transform = 'rotate('+getDeg*(index+1)+'deg)';  
                 }, 150*index);  
              }); 
    }

inputTextAnimation();
setTimeout(function(){
animationJob.addEventListener("mouseenter", function(){    
        animationJob.innerHTML = " &#8595; Checkout My Resume &#8595;";
    animationJob.style.color = "#4A606E";
}, false);

animationJob.addEventListener("mouseleave", function(){  
    animationJob.innerHTML = "A Frontend Web Developer and Designer";
    animationJob.style.color = "#000";
}, false);
    }, 8000)
    
    
    
    
    
    }())