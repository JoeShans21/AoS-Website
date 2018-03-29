<?php
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <?php
            if (isset($_SESSION['u_id'])){
                include_once 'signed-in.php';
            }
            else {
                include_once "not-signed-in.php";
            }
        ?>
    </div>
</section>
    
<?php
    include_once 'footer.php';
?>