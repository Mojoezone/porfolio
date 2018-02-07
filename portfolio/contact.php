<?php
include("header.php");
?>

    <main>
        <div class="formContainer">
          <div class="feedBack">
          <?php include("contactParse.php"); ?>
          </div>
           <div class="mailContainer">
           <a class="icon-mail" href="mailto:mojoezone@gmail.com">
           mojoezone@gmail.com
           </a>
           </div>
           
           <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
               <input type="text" name="name" placeholder="<?php if($nameErr){ echo $nameErr;}else{ echo 'Name';} ?> " autofocus  />
               <input type="text" name="email" placeholder="<?php if($emailErr){ echo $emailErr;}else{ echo 'Email';} ?>"  />
               <textarea name="comment" maxlength="1000" placeholder="<?php if($commentErr){ echo $commentErr;}else{ echo 'Message me.....';} ?>"></textarea>
               <input class="button" type="submit" name="submit" value="Hire Me">
            </form>
        </div>

    </main> 

 <?php
include("footer.php");
?>