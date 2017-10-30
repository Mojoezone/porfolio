<?php
include("header.php");
include("contactParse.php");
?>

    <main>
        <div class="formContainer">
           <div class="mailContainer">
           <a class="icon-mail" href="mailto:mojoezone@gmail.com">
           mojoezone@gmail.com
           </a>
           </div>
           
           <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
               <input type="text" name="name" placeholder="Name" autofocus  >
               <input type="text" name="email" placeholder="Email"  >
               <textarea name="comment" maxlength="1000" placeholder="Message me......"></textarea>
               <input class="button" type="submit" name="submit" value="Send">
               <input type="hidden" name="did_send" value="1">
            </form>
        </div>

    </main> 

 <?php
include("footer.php");
?>