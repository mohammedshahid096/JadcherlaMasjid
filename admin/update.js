$(document).ready(function () {
  function loadfunc() {
    $.ajax({
      url: "listforEdit.php",
      success: function (data) {
        $("#tablelist").html(data);
      }
    });
  }
  loadfunc();

  let ButtonID = undefined;
  $(document).on("click", ".btn-warning", function () {
     ButtonID = $(this).data("edit_id");
    $("#bg_div_edit").slideDown();
    // console.log(ButtonID);
    $.ajax({
      url: "updatemasjid.php",
      type: "POST",
      data: { masjid_id: ButtonID },
      success: function (data) {
        $("#editform").html(data);
      },
    });
  });

  // cancel button function in the edit pop up
  $("#canceledit").click(function () {
    $("#bg_div_edit").fadeOut();
    $("#editform").html("");
  });

  //submit for changes in to the edit pop up
  $("#editmasjidbutton").click(function () {
    let masijidname = $("#Masjidname").val();
    let password = $("#inputPassword").val();
    let profileimage = $("#profileImage").val();
    let location = $("#Location").val();
    let map = $("#Map").val();
    if (masijidname.length == 0) {
      $(".alert-danger").slideDown();
    } else if (password.length == 0) {
      $(".alert-danger").slideDown();
    } else {
      $.ajax({
       url:"updataSubmit.php",
       type:"POST",
       data:{masjid_id: ButtonID, 
        Masjid_name: masijidname,
        Password: password,
        Profile_image: profileimage,
        Location: location,
        Map: map},
        success: function(data){
            $(".alert-danger").slideUp();
            $(".alert-success").slideDown();
            $("#bg_div_edit").fadeOut();
            $("#editform").html("");
            $("#resultadd").html(data);
            loadfunc();
        }
      });
    }
  });

  //delete function popup
  $(document).on("click", ".btn-danger", function () {
    ButtonID = $(this).data("delete_id");
   $("#bg_div_delete").slideDown();
   $("#deletemessageID").html(ButtonID);
 });

 //delete popup cancel button function
 $("#canceldelete").click(function () {
  $("#bg_div_delete").fadeOut();
});

$("#deletemasjidbutton").click(function(){
   $.ajax({
     url: "deleteMasjid.php",
     type: "POST",
     data: { masjid_id: ButtonID },
     success: function (data) {
       console.log(data);
       $(".alert-success").slideUp();
       $(".alert-info").slideDown();
       $("#bg_div_delete").fadeOut();
       $(".alert-info").html("successsfully delete "+data);
       loadfunc();
     },
   });
});
}); //end of jquery 
