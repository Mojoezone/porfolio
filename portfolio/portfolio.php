<?php
include("header.php");
$p_id = $_GET['p_id'];
?>

    <main>
        <div class="portfolioContainer">
           
               <?php portfolio(); ?>

        </div>
    </main>

    <?php
include("footer.php");
?>
