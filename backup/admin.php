<?php 

session_start();
require 'DBconfig.php';
include "get.php";

if(isset($_POST['logout'])){
	$_SESSION['admin'] = false;
    session_destroy();
    header("Location: /admin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/softwares/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
<!--===============================================================================================-->
<style>
.nav-link {
    display: block;
    padding: 1.5rem 1rem;
}
/*------------------
   START POP ALERT |
------------------*/
.alert {
    background: #ff7946;
}
.success {
    background: #2aaba0;
}
.info {
    background: #47a9f8;
}
.warning {
    background: #fff1c0;
    border: 2px solid #f9de73;
    color: black!important;
}
.warning .fa{
    color: #ffb406!important;
}

#notification{
    position: fixed;
    top: 0;
    left: calc(50% - 175px);
    width: 350px;
    z-index: 22222;
}
#notification .popupbox{
    display: flex;
    width: 100%;
    height: 100%;
    justify-content: center;
    font-size: 20px;
    font-family: sans-serif;
    color: white;
    margin-bottom: 20px;
    box-shadow: 0px 0px 10px 0px black;
    opacity: 0;
    animation: popupbox 2s ease-in-out;
}
#notification .popupbox .fa{
    width: 20%;
    display: flex;
    justify-content: center;
    font-size: 30px;
    padding: 20px 0;
    border-right: 1px solid #969696;
}
#notification .popupbox p{
    font-family: "owswald";
    width: 80%;
    display: flex;
    align-items: center;
    padding: 20px 15px;
    text-align: center;
    margin: 0;
}
@keyframes popupbox{
    0%{opacity: 0;}
    10%{opacity: 1;}
    90%{opacity: 1;}
    100%{opacity: 0;}
}
.card_s {
    padding: 0 4px 18px;
    border: none;
}
.card_s img,
.card_s .card-body {
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,0.225);
}
/*-------------------
    STOP POP ALERT  |
-------------------*/
</style>
<script>
var name1 = document.getElementById("name_en");
var name2 = document.getElementById("name_ar");
var cat = document.getElementById("category");
</script>
</head>
<body>

	<!-- START POP ALERT -->
	<div id="notification"></div>
    <!-- STOP POP ALERT -->
 
    <!-- Vertically centered scrollable modal -->
    <div class="modal fade" id="newItem" tabindex="-1" aria-labelledby="newItemTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemTitle">ADD ITEM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="form-group">
                      <label for="name_en">Name (English)</label>
                      <input type="text" class="form-control" id="name_en" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="name_ar">Name (Arabic)</label>
                      <input type="text" class="form-control" id="name_ar">
                    </div>
                    <div class="form-group">
                      <label for="category">Category (English)</label>
                      <input type="text" class="form-control" id="category">
                    </div>
                    <div class="form-group row justify-content-center">
                        <img style="height: 160px;" id="preview_img" src="images/gallery/preview.jpg" class="img-fluid" alt="Responsive image">    
                    </div>
                    <div class="custom-file">
                      <input type="file" onchange="
                        var oFReader = new FileReader();
                        oFReader.readAsDataURL(this.files[0]);
                        oFReader.onload = (oFREvent)=>{document.querySelector('#preview_img').src = oFREvent.target.result};
                      " class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
     
<?php
	if(!isset($_SESSION['admin'])){
	echo'<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Admin Panel
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="Login_Username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user aria-hidden=true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="Login_Pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<!-- <a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>';
	}elseif(isset($_SESSION['admin'])){
		echo'
	
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="images/logo2.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                Admin Panel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://app.crisp.chat/">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank"  href="https://webmail1.hostinger.com/">E-mail</a>
                    </li>
                </ul>
                <form method="post" class="form-inline my-2 my-lg-0">
                  <input type="hidden" name="logout" value="logout">
                  <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5" id="admin_bar">
        <h3>Web Contents</h3>
        <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-Enquiry-tab" data-toggle="pill" href="#v-pills-Enquiry" role="tab" aria-controls="v-pills-Enquiry" aria-selected="true">Enquiry</a>
                <a class="nav-link" id="v-pills-Gallery-tab" data-toggle="pill" href="#v-pills-Gallery" role="tab" aria-controls="v-pills-Gallery" aria-selected="false">Gallery</a>
                <a class="nav-link" id="v-pills-Brands-tab" data-toggle="pill" href="#v-pills-Brands" role="tab" aria-controls="v-pills-Brands" aria-selected="false">Brands</a>
                <a class="nav-link" id="v-pills-Category-tab" data-toggle="pill" href="#v-pills-Category" role="tab" aria-controls="v-pills-Category" aria-selected="false">Category</a>
                <a class="nav-link" id="v-pills-Products-tab" data-toggle="pill" href="#v-pills-Products" role="tab" aria-controls="v-pills-Products" aria-selected="false">Products</a>
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-Enquiry" role="tabpanel" aria-labelledby="v-pills-Enquiry-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="Unsolved-tab" data-toggle="tab" href="#Unsolved" role="tab" aria-controls="Unsolved" aria-selected="true">Unsolved</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="Solved-tab" data-toggle="tab" href="#Solved" role="tab" aria-controls="Solved" aria-selected="false">Solved</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Unsolved" role="tabpanel" aria-labelledby="Unsolved-tab">

                            <div class="accordion" id="accordionUnsolved">';
                                getUnsolved($conn);
                            echo'</div>

                        </div>
                        <div class="tab-pane fade" id="Solved" role="tabpanel" aria-labelledby="Solved-tab">
                            
                            <div class="accordion" id="accordionSolved">';
                               getSolved($conn);
                            echo'</div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-Gallery" role="tabpanel" aria-labelledby="v-pills-Gallery-tab">
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2">
                            <button type="button" class="my-3 btn btn-info float-right" data-toggle="modal" data-target="#newItem" onclick="
                            document.getElementById(&apos;name_en&apos;).disabled = true; 
                            document.getElementById(&apos;name_ar&apos;).disabled = true; 
                            document.getElementById(&apos;category&apos;).disabled = true; 
                            ">ADD +</button>
                        </div> 
                    </div>
                    <div class="row">';
                    getAdminGallery($conn);
                    echo'</div>
                </div>
                <div class="tab-pane fade" id="v-pills-Brands" role="tabpanel" aria-labelledby="v-pills-Brands-tab">
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2">
                            <button type="button" class="my-3 btn btn-info float-right" data-toggle="modal" data-target="#newItem" onclick="
                            document.getElementById(&apos;name_en&apos;).disabled = true; 
                            document.getElementById(&apos;name_ar&apos;).disabled = true; 
                            document.getElementById(&apos;category&apos;).disabled = true; 
                            ">ADD +</button>
                        </div> 
                    </div>
                    <div class="row">';
                    getAdminBrands($conn);
                    echo'</div>
                </div>
                <div class="tab-pane fade" id="v-pills-Category" role="tabpanel" aria-labelledby="v-pills-Category-tab">
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2">
                            <button type="button" class="my-3 btn btn-info float-right" data-toggle="modal" data-target="#newItem" onclick="
                            document.getElementById(&apos;name_en&apos;).disabled = false; 
                            document.getElementById(&apos;name_ar&apos;).disabled = false; 
                            document.getElementById(&apos;category&apos;).disabled = true; 
                            ">ADD +</button>
                        </div> 
                    </div>
                    <div class="row">
						';
						getAdminCategory($conn);
                    echo'</div>
                </div>
                <div class="tab-pane fade" id="v-pills-Products" role="tabpanel" aria-labelledby="v-pills-Products-tab">
                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2">
                            <button type="button" class="my-3 btn btn-info float-right" data-toggle="modal" data-target="#newItem" onclick="
                            document.getElementById(&apos;name_en&apos;).disabled = false; 
                            document.getElementById(&apos;name_ar&apos;).disabled = false; 
                            document.getElementById(&apos;category&apos;).disabled = false; 
                            ">ADD +</button>
                        </div> 
                    </div>
                    <div class="row">
						';
						getAdminProduct($conn);
						echo'
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
	';
	}

?>

	
<!--===============================================================================================-->	
	<script src="js/softwares/jquery-3.5.1.min.js"></script>
<!--===============================================================================================-->	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<script src="js/admin.js"></script>

</body>
</html>