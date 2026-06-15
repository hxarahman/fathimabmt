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

const adminRow = $("#admin_bar .row");
const adminText = $("#admin_bar h3");
var x = window.matchMedia("(max-width: 768px)")
if (x.matches) { // If media query matches
  adminRow.css("display","none");
  adminText.html("Please Open This Page in Large Device To Get Better Experience.<br><br>Example : Ipad, Laptop, Desktop etc.");
}

/*-----------------------------
  /\        |    /\    \  /   |
 /__\       |   /__\    ><    |
/    \  |___|  /    \  /  \   |   
-----------------------------*/

$('.enq_update').click(function(){

  var value = $(this).attr("data-submit");
  var id = $(this).attr("data-id");

  if(value == "1"){
    $("#collaps"+id).removeClass('show');
    $(this).attr("data-submit","0")
    $("#card"+id).appendTo("#accordionSolved");
  }else if(value == "0"){
    $("#collaps"+id).removeClass('show');
    $(this).attr("data-submit","1")
    $("#card"+id).appendTo("#accordionUnsolved");
  }

  $.ajax({
    url: 'submit.php',
    method: 'POST',
    dataType: 'json',
    data: {
      'updateEnquiry': true,
      'id': id,
       'value': value
    },
    success: function(response) {
      popAlert(response,"success");
    }
  });

});

$('.enq_delete').click(function(){

  if (confirm("Are You Sure You want to Delete")) {
    var id = $(this).attr("data-id");
    $("#card"+id).remove();

    $.ajax({
      url: 'submit.php',
      method: 'POST',
      dataType: 'json',
      data: {
        'deleteEnquiry': true,
        'id': id
      },
      success: function(response) {
        popAlert(response,"success");
      }
    });
  }

});

$('#login').click(function(e){
    e.preventDefault();
  
    var username = $("#Login_Username").val();
    var pass = $("#Login_Pass").val();

    $.ajax({
      url: 'submit.php',
      method: 'POST',
      dataType: 'json',
      data: {
        'Login': true,
        'username': username,
        'pass': pass
      },
      success: function(response) {
        if(response.msg){
            popAlert(response.msg,"alert");
        }else{
            setTimeout(function(){ location.reload(); }, 800);
        }
      }
    });
  
});