<?php
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function portfolio(){
     global $db;
    global $p_id;
        $query = "SELECT p_id, p_logo, p_name
                  FROM projects";
            
        $result = $db->query($query);
        if($result->num_rows >= 1){
            while($row = $result->fetch_assoc()){
           if(!$row['p_logo']){          
       ?>
            <?php 
                echo '<div class="plogoContainer"><h3>
        <a href="project.php?p_id='.$row['p_id'].'">'.$row['p_name'].'</a></h3></div>'; 
           }else{ 
               echo '<div class="plogoContainer"><h3>
        <a href="project.php?p_id='.$row['p_id'].'"><img src="'.$row['p_logo'].'" alt="'.$row['p_name'].'" ></a></h3></div>'; 
            ?>
    <?php
     }
 }      }
}

function project(){
    global $db;
    global $p_id;
    $query = "SELECT *
              FROM projects
              WHERE projects.p_id = $p_id
              LIMIT 1";
    $result = $db->query($query);
    if($result->num_rows >= 1){
        while($row = $result->fetch_assoc()){
            If(!$row['p_logo']){ 
        echo '<div class="pTitleContainer">
        <h2>'.$row['p_name'].'</h2>';
    }else{
        echo '<div class="pTitleContainer">
        <h2><img src="'.$row['p_logo'].'" alt="'.$row['p_name'].'" >'.'</h2>';
    }
    
   if(!$row['p_m_image']){ 
       echo '<div class="singlePIMG"><img src="'.$row['p_d_image'].'" alt="'.$row['p_name'].'"></div>';
   }else{
      echo '<div  class="singlePIMG"><img src="'.$row['p_m_image'].'" alt="'.$row['p_name'].'"></div>' ;
   }

    echo
   ' </div>
    <div class="pCaseStudy">
        <h3>Roll</h3>
        <p>'.$row['p_roll'].'</p>
        
        <h3>Objective</h3>
        <p>'.$row['p_objective'].'</p>
        
        <h3>Language</h3>
        <p>'.$row['p_language'].'</p>
        
        <h3>Problems</h3>
        <p>'.$row['p_problems'].'</p>
        
        <h3>Solutions</h3>
        <p>'.$row['p_solutions'].'</p>
        
    </div>'?>
    <a class="button" href="<?php echo $row['p_url']; ?>" target="_blank">Checkout the live site</a>
<?php
        }
}
}