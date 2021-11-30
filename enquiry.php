<?php
 
include "cookie.php";
include "lang.php";
include "header.php";
include "footer.php"; 
 
?>

<?php echo $home; ?>
<?php echo $about; ?>
<?php echo $product; ?>
<?php echo $gallery; ?>
<?php echo $header; ?>

<div class="banner1">
    <div class="overlay">
        <div class="text">ENQIRY</div>
    </div>
</div>

<div class="enquiry_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-4">
                <h3><?php echo $get_in_touch;?></h3>
                <ul class="ml-4 mb-4">
                  <li><a target="_blank" href=""><?php echo $company_name;?></a></li>
                  <li><a target="_blank" href="https://goo.gl/maps/255JpipJXb5a1MGQ8"><?php echo $company_location;?></a></li>
                  <li><a target="_blank" href="tel:092229498">09 222 9498</a></li>
                  <li><a target="_blank" href="tel:+971502386667">+971 50 238 6667</a></li>
                  <li><a target="_blank" href="mailto:info@fathimabmt.com">info@fathimabmt.com</a></li>
                  <li><a target="_blank" href="mailto:sales@fathimabmt.com">sales@fathimabmt.com</a></li>
                </ul>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control username" id="enq_name" placeholder="<?php echo $name_holder;?>">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control email" id="enq_email" placeholder="<?php echo $email_holder;?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control phone" id="enq_phone" placeholder="<?php echo $phone_holder;?>">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="subject" placeholder="<?php echo $subject_holder;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="enq_message" rows="8" placeholder="<?php echo $message_holder;?>"></textarea>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-12">
                      <button type="submit" id="enquiry_submit" class="btn btn-primary float-right"><?php echo $submit;?></button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-md-6 my-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d275.45223977633543!2d56.3543841!3d25.1243906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDA3JzI3LjkiTiA1NsKwMjEnMTQuOSJF!5e1!3m2!1sar!2sae!4v1605725513269!5m2!1sar!2sae" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

<?php echo $footer; ?>