<?php

#CATEGORY
function getCategories($conn){

    $query = "SELECT * FROM `category`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        if($_COOKIE['Language'] == "Arabic"){
            echo '<div class="col-4">
                    <div class="image_holder">
                        <img src="'.$row["image"].'" alt="Not Found" srcset="">
                        <p>'.$row["name_ar"].'</p>
                    </div>
                </div>';
        }
        else{
            echo '<div class="col-4">
                    <div class="image_holder">
                        <img src="'.$row["image"].'" alt="Not Found" srcset="">
                        <p>'.$row["name"].'</p>
                    </div>
                </div>';
        }
    };
}
#PRODUCTS HOME
function getProductsHome($conn){

    $query = "SELECT * FROM `products`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        if($_COOKIE['Language'] =="Arabic"){
        echo '<div class="product-item">
            <div class="pi-pic">
                <img src="'.$row["image"].'">
            </div>
            <div class="text">'.$row["name_ar"].'</div>
        </div>';
        }else{
        echo '<div class="product-item">
            <div class="pi-pic">
                <img src="'.$row["image"].'">
            </div>
            <div class="text">'.$row["name"].'</div>
        </div>';
        }
    };
}

#BRANDS
function getBrands($conn){

    $query = "SELECT * FROM `brands`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo '<div class="product-item">
            <div class="pi-pic">
                <img src="'.$row["image"].'">
            </div>
        </div>';
    };
}

#PRODUCTS
function getProducts($conn){

    $query = "SELECT * FROM `category`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {

        if($_COOKIE['Language'] =="Arabic"){
            echo '<div class="container">
                <h4>'.$row['name_ar'].'</h4>
                <div class="row">';
        }else{
            echo '<div class="container">
                <h4>'.$row['name'].'</h4>
                <div class="row">';
        }
        
        $cat = $row['name'];
        $nquery = "SELECT * FROM `products` WHERE `category` = '$cat'";
        $nresult = $conn->query($nquery);
        while ($nrow = $nresult->fetch_assoc()) {
            if($_COOKIE['Language'] =="Arabic"){
                echo'<div class="col-4">
                    <div class="holder">
                        <a href="'.$nrow['image'].'">
                            <img src="'.$nrow['image'].'" alt="" srcset="">
                            <h5>'.$nrow['name_ar'].'</h5>
                        </a>
                    </div>
                </div>';
            }else{
                echo'<div class="col-4">
                    <div class="holder">
                        <a href="'.$nrow['image'].'">
                            <img src="'.$nrow['image'].'" alt="" srcset="">
                            <h5>'.$nrow['name'].'</h5>
                        </a>
                    </div>
                </div>';
            }
        }

        echo '</div>
        </div>';
    };
}
#GALLERY
function getGallery($conn){

    $query = "SELECT * FROM `gallery`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-4">
            <div class="holder">
                <a href="images/gallery/gal1.jpg">
                    <img src="'.$row["image"].'" alt="" srcset="">
                    <p>
                        <span>View</span>
                    </p>
                </a>
            </div>
        </div>';
    };
}


#ADMIN PAGE 


#UNSOLVED MESSAGE
function getUnsolved($conn){

    $counter = 0;
    $query = "SELECT * FROM `enquiry` WHERE `is_solved` = false ORDER BY `id` DESC";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        if ($counter < 1){
            echo '<div class="card" id="card'.$row['id'].'">
                  <div class="card-header" id="heading'.$row['id'].'">
                    <h2 class="mb-0">
                      <button class="btn btn-light btn-block text-left text-danger" type="button" data-toggle="collapse" data-target="#collaps'.$row['id'].'" aria-expanded="true" aria-controls="collaps'.$row['id'].'">
                      <b>Subject :</b> '.$row['subject'].' <span class="ml-5 text-primary"> <b>From :</b> '.$row['name'].'</span>
                      </button>
                    </h2>
                  </div>
                    
                  <div id="collaps'.$row['id'].'" class="collapse show" aria-labelledby="heading'.$row['id'].'" data-parent="#accordionUnsolved">
                    <div class="card-body">
                      '.$row['message'].'
                    </div>
                    <span class="ml-4">
                        Phone Number : <a href="tel:'.$row['phone'].'">'.$row['phone'].'</a>
                    </span>
                    <span class="ml-4">    
                        E-mail : <a href="mailto:'.$row['email'].'">'.$row['email'].'</a>
                    </span>
                    <span class="ml-4">    
                        Date : <a>'.$row['date_uploaded'].'</a>
                    </span>
                    <br>
                    <button type="button" data-submit="1" data-id="'.$row['id'].'" class="enq_update btn btn-success ml-4 my-4">Move To Solved</button>
                    <button type="button" data-id="'.$row['id'].'" class="enq_delete btn btn-danger ml-2 my-4">Delete</button>
                  </div>
                </div>';
        }else{
            echo '<div class="card" id="card'.$row['id'].'">
                <div class="card-header" id="heading'.$row['id'].'">
                  <h2 class="mb-0">
                    <button class="btn btn-light btn-block text-left text-danger" type="button" data-toggle="collapse" data-target="#collaps'.$row['id'].'" aria-expanded="true" aria-controls="collaps'.$row['id'].'">
                    <b>Subject :</b> '.$row['subject'].' <span class="ml-5 text-primary"> <b>From :</b> '.$row['name'].'</span>
                    </button>
                  </h2>
                </div>

                <div id="collaps'.$row['id'].'" class="collapse" aria-labelledby="heading'.$row['id'].'" data-parent="#accordionUnsolved">
                  <div class="card-body">
                    '.$row['message'].'
                  </div>
                  <span class="ml-4">
                      Phone Number : <a href="tel:'.$row['phone'].'">'.$row['phone'].'</a>
                  </span>
                  <span class="ml-4">    
                      E-mail : <a href="mailto:'.$row['email'].'">'.$row['email'].'</a>
                  </span>
                  <span class="ml-4">    
                      Date : <a>'.$row['date_uploaded'].'</a>
                  </span>
                  <br>
                  <button type="button" data-submit="1" data-id="'.$row['id'].'" class="enq_update btn btn-success ml-4 my-4">Move To Solved</button>
                  <button type="button" data-id="'.$row['id'].'" class="enq_delete btn btn-danger ml-2 my-4">Delete</button>
                </div>
            </div>';
        }
        $counter++;
    };
}
#SOLVED MESSAGE
function getSolved($conn){

    $counter = 0;
    $query = "SELECT * FROM `enquiry` WHERE `is_solved` = true ORDER BY `id` DESC";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        if ($counter < 1){
            echo '<div class="card" id="card'.$row['id'].'">
                  <div class="card-header" id="solved'.$row['id'].'">
                    <h2 class="mb-0">
                      <button class="btn btn-light btn-block text-left text-danger" type="button" data-toggle="collapse" data-target="#collaps'.$row['id'].'" aria-expanded="true" aria-controls="collaps'.$row['id'].'">
                      <b>Subject :</b> '.$row['subject'].' <span class="ml-5 text-primary"> <b>From :</b> '.$row['name'].'</span>
                      </button>
                    </h2>
                  </div>
                    
                  <div id="collaps'.$row['id'].'" class="collapse show" aria-labelledby="solved'.$row['id'].'" data-parent="#accordionSolved">
                    <div class="card-body">
                      '.$row['message'].'
                    </div>
                    <span class="ml-4">
                        Phone Number : <a href="tel:'.$row['phone'].'">'.$row['phone'].'</a>
                    </span>
                    <span class="ml-4">    
                        E-mail : <a href="mailto:'.$row['email'].'">'.$row['email'].'</a>
                    </span>
                    <span class="ml-4">    
                        Date : <a>'.$row['date_uploaded'].'</a>
                    </span>
                    <br>
                    <button type="button" data-submit="0" data-id="'.$row['id'].'" class="enq_update btn btn-success ml-4 my-4">Move To UnSolved</button>
                    <button type="button" data-id="'.$row['id'].'" class="enq_delete btn btn-danger ml-2 my-4">Delete</button>
                  </div>
                </div>';
        }else{
            echo '<div class="card" id="card'.$row['id'].'">
                <div class="card-header" id="solved'.$row['id'].'">
                  <h2 class="mb-0">
                    <button class="btn btn-light btn-block text-left text-danger" type="button" data-toggle="collapse" data-target="#collaps'.$row['id'].'" aria-expanded="true" aria-controls="collaps'.$row['id'].'">
                    <b>Subject :</b> '.$row['subject'].' <span class="ml-5 text-primary"> <b>From :</b> '.$row['name'].'</span>
                    </button>
                  </h2>
                </div>

                <div id="collaps'.$row['id'].'" class="collapse" aria-labelledby="solved'.$row['id'].'" data-parent="#accordionUnsolved">
                  <div class="card-body">
                    '.$row['message'].'
                  </div>
                  <span class="ml-4">
                      Phone Number : <a href="tel:'.$row['phone'].'">'.$row['phone'].'</a>
                  </span>
                  <span class="ml-4">    
                      E-mail : <a href="mailto:'.$row['email'].'">'.$row['email'].'</a>
                  </span>
                  <span class="ml-4">    
                      Date : <a>'.$row['date_uploaded'].'</a>
                  </span>
                  <br>
                  <button type="button" data-submit="0" data-id="'.$row['id'].'" class="enq_update btn btn-success ml-4 my-4">Move To UnSolved</button>
                  <button type="button" data-id="'.$row['id'].'" class="enq_delete btn btn-danger ml-2 my-4">Delete</button>
                </div>
            </div>';
        }
        $counter++;
    };
}

function getAdminCategory($conn){

    $query = "SELECT * FROM `category`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card card_s col-4">
              <img src="'.$row["image"].'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$row["name"].'</h5>
                <h5 class="card-title">'.$row["name_ar"].'</h5>
                <p class="card-text">last Updated : '.$row['date_updated'].'</p>
                <p class="card-text">Uploaded : '.$row['date_uploaded'].'</p>
                <button type="button" class="my-3 btn btn-success">UPDATE</button>
                <button type="button" class="my-3 btn btn-danger">DELETE</button>
              </div>
            </div>';
    };
}
function getAdminProduct($conn){

    $query = "SELECT * FROM `products`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card card_s col-4">
              <img src="'.$row["image"].'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$row["name"].'</h5>
                <h5 class="card-title">'.$row["name_ar"].'</h5>
                <p class="card-text">Category : '.$row['category'].'</p>
                <p class="card-text">last Updated : '.$row['date_updated'].'</p>
                <p class="card-text">Uploaded : '.$row['date_uploaded'].'</p>
                <button type="button" class="my-3 btn btn-success">UPDATE</button>
                <button type="button" class="my-3 btn btn-danger">DELETE</button>
              </div>
            </div>';
    };
}
function getAdminGallery($conn){

    $query = "SELECT * FROM `gallery`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card card_s col-4">
              <img src="'.$row["image"].'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">No Title</h5>
                <p class="card-text">last Updated : '.$row['date_updated'].'</p>
                <p class="card-text">Uploaded : '.$row['date_uploaded'].'</p>
                <button type="button" class="my-3 btn btn-success">UPDATE</button>
                <button type="button" class="my-3 btn btn-danger">DELETE</button>
              </div>
            </div>';
    };
}

function getAdminBrands($conn){

    $query = "SELECT * FROM `brands`";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card card_s col-4">
              <img src="'.$row["image"].'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">No Title</h5>
                <p class="card-text">last Updated : '.$row['date_updated'].'</p>
                <p class="card-text">Uploaded : '.$row['date_uploaded'].'</p>
                <button type="button" class="my-3 btn btn-success">UPDATE</button>
                <button type="button" class="my-3 btn btn-danger">DELETE</button>
              </div>
            </div>';
    };
}

?>
