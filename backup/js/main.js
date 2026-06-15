console.log("%cDo not spam Here!", "color: red; font-family: sans-serif; font-size: 4.5em; font-weight: bolder; text-shadow: #000 1px 1px;");
console.log("©2018 Fathima Building Materials Trading Co. LLC | All Rights Reserved | Design by MSAC SOLUTION.");

function popAlert(x,y){
  const popBody = document.getElementById("notification");
  let popEl = document.createElement("div");
  popEl.classList.add("popupbox",y);
  switch(y){
      case "alert":
          popEl.innerHTML = '<i class="fa fa-exclamation-circle"></i>'+'<p>'+x+'</p>';
          break
      case "warning":
          popEl.innerHTML = '<i class="fa fa-exclamation-triangle"></i>'+'<p>'+x+'</p>';
          break
      case "success":
          popEl.innerHTML = '<i class="fa fa-check"></i>'+'<p>'+x+'</p>';
          break
      case "info":
          popEl.innerHTML = '<i class="fa fa-paper-plane"></i>'+'<p>'+x+'</p>';
          break
  }
  popBody.appendChild(popEl);

  setTimeout(() => {
      popEl.remove();
  },2000)
};

/* TOGGLE NAVIGATORS */
function navToggle(x){
    x.classList.toggle("active");
    $("#navigators").slideToggle();
}

/* SLIDER */
// IMAGE SLIDES & CIRCLES ARRAYS, & COUNTER
var imageSlides = document.getElementsByClassName('imageSlides');
var circles = document.getElementsByClassName('circle');
var leftArrow = document.getElementById('leftArrow');
var rightArrow = document.getElementById('rightArrow');
var counter = 0;

// HIDE ALL IMAGES FUNCTION
function hideImages() {
  for (var i = 0; i < imageSlides.length; i++) {
    imageSlides[i].classList.remove('visible');
  }
}

// REMOVE ALL DOTS FUNCTION
function removeDots() {
  for (var i = 0; i < imageSlides.length; i++) {
    circles[i].classList.remove('dot');
  }
}

// SINGLE IMAGE LOOP/CIRCLES FUNCTION
function imageLoop() {
  var currentImage = imageSlides[counter];
  var currentDot = circles[counter];
  hideImages();
  currentImage.classList.add('visible');
  removeDots();
  currentDot.classList.add('dot');
  counter++;
}

// LEFT & RIGHT ARROW FUNCTION & CLICK EVENT LISTENERS
function arrowClick(e) {
  var target = e.target;
  if (target == leftArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    removeDots();
    if (counter == 1) {
      counter = (imageSlides.length - 1);
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 8000);
    } else {
      counter--;
      counter--;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 8000);
    }
  } 
  else if (target == rightArrow) {
    clearInterval(imageSlideshowInterval);
    hideImages();
    removeDots();
    if (counter == imageSlides.length) {
      counter = 0;
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 8000);
    } else {
      imageLoop();
      imageSlideshowInterval = setInterval(slideshow, 8000);
    }
  }
}

if(leftArrow){
  leftArrow.addEventListener('click', arrowClick);
  rightArrow.addEventListener('click', arrowClick);
}

// IMAGE SLIDE FUNCTION
function slideshow() {
  if (counter < imageSlides.length) {
    imageLoop();
  } else {
    counter = 0;
    hideImages();
    imageLoop();
  }
}

// SHOW FIRST IMAGE, & THEN SET & CALL SLIDE INTERVAL
if(leftArrow){
  setTimeout(slideshow, 1000);
  var imageSlideshowInterval = setInterval(slideshow, 7000);
}

/* START SINGLE LINE SLIDE */
if($('.product-slider')){
  $('.product-slider').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    margin : 30,
    autoplay: true,
    navText: ['<i class="flaticon-left-arrow-1"></i>', '<i class="flaticon-right-arrow-1"></i>'],
    responsive : {
      0 : {
        items: 1,
      },
      480 : {
        items: 1,
      },
      768 : {
        items: 2,
      },
      1200 : {
        items: 4,
      }
    }
  });
}

/* START SMALL SLIDE */
if($('.product-slider-1')){
  $('.product-slider-1').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    margin : 30,
    autoplay: true,
    navText: ['<i class="flaticon-left-arrow-1"></i>', '<i class="flaticon-right-arrow-1"></i>'],
    responsive : {
      0 : {
        items: 1,
      },
      480 : {
        items: 1,
      },
      768 : {
        items: 1,
      },
      1200 : {
        items: 1,
      }
    }
  });
}

/* BODY SCROLL ANIMATION */
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".scrollanim").on('click', function(event) {
    
    var x = window.matchMedia("(max-width: 480px)")
    if (x.matches) { // If media query matches
      $("#navigators").slideToggle();
    }
    

    // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") 
      {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
              scrollTop: $(hash).offset().top
          }, 900, function()
          {
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
          });
      } // End if
  });
});

/* WOW INIT */
wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();


/* CONTACT US SCRIPT */
$(function(){

  var errorname = false;
  var erroremail = false;
  var errorphone = false;

  $(".username").focusout(function(){
    check_name();
  });
  
  $(".email").focusout(function(){
    check_email();
  });
  $(".phone").focusout(function(){
    check_phone();
  });

  function check_name(){
    var patt = new RegExp(/^[a-zA-Z\s]+$/i);
    var username_length = $(".username").val().length;
  
    if(username_length < 1) {
      popAlert("User Name is Required","alert");
      $(".username").css("border","2px solid red");
      errorname = true;
    }else{
      if(!patt.test($(".username").val())) {
        popAlert("Name can only contain letters and white spaces","alert");
        $(".username").css("border","2px solid red");
        errorname = true;
      }else {
        $(".username").css("border","3px solid lightgreen");
      }
    }
  }
  function check_email(){
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    var email_length = $(".email").val().length;
    
    if (email_length < 1) {
      popAlert("Email is Required","alert");
      $(".email").css("border","2px solid red");
      erroremail = true;   
    }else{	
      if(pattern.test($(".email").val()))   
      {
        $(".email").css("border","3px solid lightgreen");     
      }else
      {
        popAlert("Invalid email address & no space is Allowed","alert");
        $(".email").css("border","2px solid red");
        erroremail = true;     
      }
    }
  }
  function check_phone(){
    var phone_length = $(".phone").val().length;
  
    if(phone_length < 1) {
      popAlert("Phone Number is Required","alert");
      $(".phone").css("border","2px solid red");
      errorname = true;
    }else{
      if(phone_length > 14 || phone_length < 5) {
        popAlert("Invalid Phone Number","alert");
        $(".phone").css("border","2px solid red");
        errorname = true;
      }else {
        $(".phone").css("border","3px solid lightgreen");
      }
    }
  }

/*-----------------------------
  /\        |    /\    \  /   |
 /__\       |   /__\    ><    |
/    \  |___|  /    \  /  \   |   
-----------------------------*/

$('#set_cookie').click(function(){

  var lang = $(this).attr("data-lang");

  $.ajax({
    url: 'submit.php',
    method: 'POST',
    dataType: 'json',
    data: {
      'set_cookie': true,
      'lang': lang
    }
  });
  setTimeout(function(){ location.reload(); }, 800);
});

  /* SEND CONTACT MESSAGE */
  $("#contact_submit").click(function(e) {
    e.preventDefault();

    errorname = false;
    erroremail = false;
    errorphone = false;

    check_name();
    check_email();
    check_phone();

    if(errorname == false && erroremail == false && errorphone == false) {
      const username = $("#username").val();
      const email = $("#email").val();
      const phone = $("#phone").val();
      const message = $("#message").val();
      $.ajax({
        url: 'submit.php',
        method: 'POST',
        dataType: 'json',
        data: {
          'submitContact': true,
          'name': username,
          'email': email,
          'phone': phone,
          'message': message
        },
        success: function(response) {
          popAlert(response,"success");
          $("input").val("");
          $("input").css("border","none");
          $("textarea").val("");
        }
      });
    }
  });
  $("#enquiry_submit").click(function(e) {
    e.preventDefault();

    errorname = false;
    erroremail = false;
    errorphone = false;

    check_name();
    check_email();
    check_phone();

    if(errorname == false && erroremail == false && errorphone == false) {
      const username = $("#enq_name").val();
      const email = $("#enq_email").val();
      const phone = $("#enq_phone").val();
      const subject = $("#subject").val();
      const message = $("#enq_message").val();
      $.ajax({
        url: 'submit.php',
        method: 'POST',
        dataType: 'json',
        data: {
          'submitEnquiry': true,
          'name': username,
          'email': email,
          'phone': phone,
          'subject': subject,
          'message': message
        },
        success: function(response) {
          popAlert(response,"success");
          $("input").val("");
          $("input").css("border","1px solid #ced4da");
          $("textarea").val("");
        }
      });
    }
  });
});