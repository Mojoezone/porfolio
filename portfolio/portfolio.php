<?php
include("header.php");
$p_id = $_GET['p_id'];
$winWidth;
?>

    <main>
        <div class="portfolioContainer">
            <div>
                <?php
        $query = "SELECT p_logo, p_name, p_m_image, p_d_image
                  FROM projects";
            
        $result = $db->query($query);
        if($result->num_rows >= 1){
            while($row = $result->fetch_assoc()){
                
        ?>
                <img id="imgSrcset" src="<?php echo $row['p_d_image']; ?>" srcset="<?php if(!$row['p_m_image']){ echo $row['p_d_image'];}else{echo $row['p_m_image'];}?> 2x, <?php echo $row['p_d_image']; ?> 3x" alt="<?php echo $row['p_name'];?>">
       <div>
        <h3>
            <a href="#">
                <?php
                if($row['p_logo']){
                 ?>
            <img src="<?php echo $row['p_logo'] ?>" alt="logo">
                 <?php
                    }else{
                    echo $row['p_name'];
                    }
                ?>
            </a>
         </h3>
    </div>
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