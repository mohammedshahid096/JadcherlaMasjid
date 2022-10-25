$(document).ready(function () {
  //it is load function for printing the masjid timing list of all prayers
  // for setting the time
  function loadfunc() {
    $.ajax({
      url: "../Api_Folder/Masjid_timings_list.php",
      success: function (data) {
        $("#timinglist").html(data);
      },
    });
  }
  loadfunc();

  //it will check the condition if count is 1 then notice board data will be printed
  //or else it will not print
  function noticeload() {
    $.ajax({
      url: "../Api_Folder/addnotice.php",
      type: "POST",
      data: { noticeloadfunc: true },
      success: function (noticedata) {
        $("#noticeaddblock").html(noticedata);
      },
    });
  }
  noticeload();

  //it is logout function if we click to logout button
  //  then all the sessions will be deleted and back to index page
  $("#logoutbutton").click(function () {
    $.ajax({
      url: "../Api_Folder/logout.php",
      success: function () {
        location.href = "../";
      },
    });
  });

  //this varaibles are for storing the final values of specific namaz timing of azan and jammat
  let final_submit_azan = "";
  let final_submit_jamat = "";
  let buttonID = "";

  //when ever we click the button to submit for setting a time
  //all the values will be stored in a variables
  $(document).on("click", ".btn-info", function () {
    let a_fajar = $("#a_fajar").val();
    let fajar = $("#fajar").val();
    let a_zohar = $("#a_zohar").val();
    let zohar = $("#zohar").val();
    let a_asar = $("#a_asar").val();
    let asar = $("#asar").val();
    let a_margib = $("#a_margib").val();
    let margib = $("#margib").val();
    let a_isha = $("#a_isha").val();
    let isha = $("#isha").val();
    let a_jumma = $("#a_jumma").val();
    let jumma = $("#jumma").val();

    let ButtonId = $(this).data("submittime");
    buttonID = ButtonId;

    //this will check the condition which namaz timings should need to change
    //and according to the condition it will stored in the final values
    switch (ButtonId) {
      case 1:
        final_submit_azan = a_fajar;
        final_submit_jamat = fajar;
        break;

      case 2:
        final_submit_azan = a_zohar;
        final_submit_jamat = zohar;
        break;

      case 3:
        final_submit_azan = a_asar;
        final_submit_jamat = asar;
        break;

      case 4:
        final_submit_azan = a_margib;
        final_submit_jamat = margib;
        break;

      case 5:
        final_submit_azan = a_isha;
        final_submit_jamat = isha;
        break;

      case 6:
        final_submit_azan = a_jumma;
        final_submit_jamat = jumma;
        break;
    }
    // console.log(final_submit_azan+" jammat= "+final_submit_jamat);
    $("#bg_div_confirm").show(); //when ever we click the button a pop will be shown
  });

  //for canceling the submit
  $("#cancelconfirm").click(function () {
    $("#bg_div_confirm").hide();
  });

  //for changing the time confirmation
  $("#submitconfirm").click(function () {
    $.ajax({
      url: "../Api_Folder/change_time.php",
      type: "POST",
      data: {
        azan_time: final_submit_azan,
        jamat_time: final_submit_jamat,
        namaz: buttonID,
      },
      success: function (data) {
        $("#ctimenamaz").html(data);
        $("#bg_div_confirm").hide();
        $(".alert-success").slideDown();
        loadfunc(); //it will again refresh the list of masjid items after submitting the final timings data
      },
    });
  });

  //for submiting the notice data
  $(document).on("click", "#submitnoticemessage", function () {
    let setdate = $("#setdate").val();
    let settime = $("#settime").val();
    let setmessage = $("#setmessage").val();
    $.ajax({
      url: "../Api_Folder/addnotice.php",
      type: "POST",
      data: { _SetDate: setdate, _SetTime: settime, _SetMessage: setmessage },
      success: function (noticedata) {
        console.log(noticedata);
        alert("data is inserted");
      }
    });
  });


}); //end of a ready function of jquery
