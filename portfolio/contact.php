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
               <input type="text" name="name" placeholder="<?php if($nameErr){ echo $nameErr;}else{ echo 'Name';} ?> " autofocus  required />
               <input type="text" name="email" placeholder="<?php if($emailErr){ echo $emailErr;}else{ echo 'Email';} ?>" required />
               <textarea name="comment" maxlength="1000" placeholder="<?php if($commentErr){ echo $commentErr;}else{ echo 'Message me.....';} ?>" required ></textarea>
               <input class="button" type="submit" name="submit" value="Send">
               <input type="hidden" name="did_send" value="1">
            </form>
        </div>

    </main> 

 <?php
include("footer.php");
?>