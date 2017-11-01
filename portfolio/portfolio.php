<?php
include("header.php");
?>

<main>
    <div class="portfolioContainer">
        <div class="pTitle">
        <?php
        $query = "SELECT p_logo
                  FROM projects";
            
        $result = $db->query($query);
        if($result->num_rows >= 1){
            while($row = $result->fetch_assoc()){
                
        ?>
        
            <h3><a href=""><img src="<?php $row['p_logo']; ?>" ></a></h3>
        
        <?php
            }
        }
        ?>
            </div>
    </div>
</main>

<?php
include("footer.php");
?>