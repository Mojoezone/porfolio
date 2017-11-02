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



                 
                        <h3>
                            <a href="#">
                                <img id="imgSrcset" src="<?php if(!$row['p_m_image']){ echo $row['p_d_image'];}else{echo $row['p_m_image'];}?>" alt="<?php echo $row['p_name'];?>">
                                  </a>
                        </h3>
            

                         
                            <?php
            }
        }
        ?>

            </div>
    </main>

    <?php
include("footer.php");
?>
