<?php 

require 'DBconfig.php';

include "cookie.php";
include "header.php";
include "footer.php";
include "get.php";

?>

<?php echo $home; ?>
<?php echo $about; ?>
<?php echo $product."active"; ?>
<?php echo $gallery; ?>
<?php echo $header; ?>

<div class="gallery">
    <?php getProducts($conn); ?>
</div>

<?php echo $footer; ?>