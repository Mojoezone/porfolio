<?php
include('header.php');
$p_id = $_GET['p_id'];
?>
<main>
<div class="projectContainer">
<?php project(); ?>
    
</div>
<div class="otherProjects">
   <?php
    $query = "SELECT p_d_image, p_id, p_language, p_name
              FROM projects
              WHERE NOT projects.p_id = $p_id
              LIMIT 3";
    $result = $db->query($query);
    if($result->num_rows >= 1){
        while($row = $result->fetch_assoc()){
    ?>
    <div class="otherProject">
        <h3><a href="project.php?p_id=<?php echo $row['p_id'];  ?>"><img src="<?php echo $row['p_d_image']; ?>" alt="<?php echo $row['p_name'] ?>"></a></h3>
        <p><?php echo $row['p_language']; ?></p>
    </div>
    <?php
        }
        $result->free();
    }
            ?>
</div>
</main>

<?php include('footer.php'); ?>