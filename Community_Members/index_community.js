$(document).ready(function () {
  //for showing the input password
  $("#showpassword").click(function () {
    $("#checkPassword").attr("type", "text");
    $("#showpassword").hide();
    $("#hidepassword").show();
  });

  //for hiding the password
  $("#hidepassword").click(function () {
    $("#checkPassword").attr("type", "password");
    $("#hidepassword").hide();
    $("#showpassword").show();
  });


  //----------------login function--------------------------------
  $("#loginbutton").click(function (e) {
    e.preventDefault();
    let checkmasjid_id = $("#masjid_id").val();
    let checkPassword = $("#checkPassword").val();
    if (checkmasjid_id.length == "") {
      $("#loginerror").slideDown();
      $("#loginerror").html("Enter the Masjid's ID");
    } 
    else if (checkPassword.length == "") {
      $("#loginerror").slideDown();
      $("#loginerror").html("Enter the password");
    } 
    else {
      $("#loginerror").slideUp();
      $.ajax({
        url: "Api_Folder/login.php",
        type: "POST",
        data: {
          check_ID: checkmasjid_id,
          check_password: checkPassword,
        },
        success: function (result2) {
          console.log(result2);
          if (result2 == "true") {
            location.href = "inside_files/home.php"; //if successfully login then we goo inside page
          } 
          else {
            $("#loginerror").slideDown();
            $("#loginerror").html("Email or Password is incorrect!");
          }
        },
      });
    }
  }); //login functin will end here

}); //jquery end
