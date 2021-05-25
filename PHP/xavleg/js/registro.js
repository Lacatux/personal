$(document).ready(function () {
  $("#enviar").hide();
  $("#repassword").on("change textInput input", function () {
    var pass1 = $("#password").val();
    var pass2 = $("#repassword").val();

    if (pass1 != pass2) {
      $("#repassword").css("background-color", "red");
      $("#enviar").hide();
    } else {
      $("#repassword").css("background-color", "green");
      $("#enviar").show();
    }
  });
  $(document).ready(function () {
    $('#username').keyup(check_username); //use keyup,blur, or change
  });
  function check_username() {
    var username = $('#username').val();
    jQuery.ajax({
      type: 'POST',
      url: 'check_username.php',
      data: 'username=' + username,
      cache: false,
      success: function (response) {
        if (response == 0) {
          alert('available')
        }
        else {
          alert('not available')
          //do perform other actions like displaying error messages etc.,
        }
      }
    });
  }
});
