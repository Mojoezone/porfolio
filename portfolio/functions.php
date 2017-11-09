<?php
// contact parse
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//portfolio 
function portfolio(){
     global $db;
    global $p_id;
        $query = "SELECT p_id, p_logo, p_name, p_language
                  FROM projects";
            
        $result = $db->query($query);
        if($result->num_rows >= 1){
            while($row = $result->fetch_assoc()){
           if(!$row['p_logo']){          
       ?>
            <?php 
                echo '<div class="plogoContainer"><h3>
        <a href="project.php?p_id='.$row['p_id'].'">'.$row['p_name'].'</a></h3><p class="pLanguage">'.$row['p_language'].'</P></div>'; 
           }else{ 
               echo '<div class="plogoContainer"><h3>
        <a href="project.php?p_id='.$row['p_id'].'"><img src="'.$row['p_logo'].'" alt="'.$row['p_name'].'" ></a></h3><p class="pLanguage">'.$row['p_language'].'</P></div>'; 
            ?>
    <?php
     }
 }   
            $result->free();
        }
}

//sing project
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
    
            echo '<div  class="singlePIMG"><picture><source media="(min-width: 1280px)" srcset="'.$row['p_d_image'].'"><img src="'.$row['p_m_image'].'" alt="'.$row['p_name'].'"></picture></div>' ;
//   if(!$row['p_m_image']){ 
//       echo '<div class="singlePIMG"><img src="'.$row['p_d_image'].'" alt="'.$row['p_name'].'"></div>';
//   }else{
//      echo '<div  class="singlePIMG"><img src="'.$row['p_m_image'].'" alt="'.$row['p_name'].'"></div>' ;
//   }


    echo
   ' </div>
    <div class="pCaseStudy clearfix">
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
    <div class="buttonContainer"><a class="button" href="<?php echo $row['p_url']; ?>" target="_blank">Checkout the live site</a></div>
    
<?php
        }
        $result->free();
}
}

//page title
function get_title(){
$path = $_SERVER['PHP_SELF'];
    $file = basename($path);
    $file = strtoupper(basename($path, '.php'));
    
    if($file == 'INDEX'){
        echo 'HOME';
    }elseif($file == 'PROJECT'){
     getProjectName();
    }else{
        echo $file;
    }
    }
//set the global $p_id before the function in header.php
function getProjectName(){
       global $db;
        global $p_id;
        $query = "SELECT p_id, p_name
                FROM projects
                WHERE p_id = $p_id
                LIMIT 1";
        $result = $db->query($query);
        if($result->num_rows >= 1){
        while($row = $result->fetch_assoc()){
            echo $row['p_name'];
        }
        $result->free();
        }
}