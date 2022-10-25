$(document).ready(function () {
  //when ever we click the button to submit for setting a time
  $("#submitbutton").click(function () {
    let masijidname = $("#Masjidname").val();
    let password = $("#inputPassword").val();
    let profileimage = $("#profileImage").val();
    let location = $("#Location").val();
    let map = $("#Map").val();
    let a_fajar = $("#a_fajar").val();
    let fajar = $("#fajar").val();
    let a_zohar = $("#a_zohar").val();
    let zohar = $("#zohar").val();
    let a_asar = $("#a_asar").val();
    let asar = $("#asar").val();
    let a_margib = $("#a_magrib").val();
    let magrib = $("#magrib").val();
    let a_isha = $("#a_isha").val();
    let isha = $("#isha").val();
    let a_jumma = $("#a_jumma").val();
    let jumma = $("#jumma").val();

    if (masijidname.length == 0) {
      $(".alert-danger").slideDown();
      $(".alert-success").slideUp();
    } else if (password.length == 0) {
      $(".alert-danger").slideDown();
      $(".alert-success").slideUp();
    } else {
      $.ajax({
        url: "addmasjidDB.php",
        type: "POST",
        data: {
          Masjid_name: masijidname,
          Password: password,
          Profile_image: profileimage,
          Location: location,
          Map: map,
          Fajar: [a_fajar, fajar],
          Zohar: [a_zohar, zohar],
          Asar: [a_asar, asar],
          Magrib: [a_margib, magrib],
          Isha: [a_isha, isha],
          Jumma: [a_jumma, jumma],
        },
        success: function (result) {
          $(".alert-danger").slideUp();
          $(".alert-success").slideDown();
          $("#resultadd").html(result);
          $("#myform").trigger('reset');
        },
      });
    }
  });
}); //end of a ready function of jquery
