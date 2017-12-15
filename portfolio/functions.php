<?php


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
    if(!$row['p_logo']){ 
        echo '<div class="pTitleContainer">
        <h2><a href="'.$row['p_url'].'" target="_blank" >'.$row['p_name'].'</a></h2>';
    }else{
        echo '<div class="pTitleContainer">
        <h2><a href="'.$row['p_url'].'" target="_blank" ><img src="'.$row['p_logo'].'" alt="'.$row['p_name'].'" >'.'</a></h2>';
    }
    ?>
        <div class="singlePIMG">
            <a href="<?php echo $row['p_url']; ?>">
                <picture>
                    <source media="(min-width: 1280px)" srcset="<?php echo $row['p_d_image']; ?>"><img src="<?php if(!$row['p_m_image']){ echo $row['p_d_image'];}else{echo $row['p_m_image'];} ?>" alt="<?php echo $row['p_name']; ?>"></picture>
            </a>
        </div>


        <?php
    echo
   ' </div>
    <div class="pCaseStudy clearfix">
        <h3>Role</h3>
        <p>'.$row['p_roll'].'</p>
        
        <h3>Objective</h3>
        <p>'.$row['p_objective'].'</p>
        
        <h3>Technologies</h3>
        <p>'.$row['p_language'].'</p>
        
        <h3>Problem</h3>
        <p>'.$row['p_problems'].'</p>
        
        <h3>Solution</h3>
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
