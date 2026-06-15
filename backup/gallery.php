<?php 

require 'DBconfig.php';

include "cookie.php";
include "header.php";
include "footer.php";
include "get.php";

?>

<?php echo $home; ?>
<?php echo $about; ?>
<?php echo $product; ?>
<?php echo $gallery."active"; ?>
<?php echo $header; ?>

<div class="banner1">
    <div class="overlay">
        <div class="text">GALLERY</div>
    </div>
</div>

<div class="gallery">
    <div class="container">
        <div class="row">
            <?php getGallery($conn); ?>
        </div>
    </div>
</div>

<?php echo $footer; ?>