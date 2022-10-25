$(document).ready(function(){

    
    function loadpage(){
        $.ajax({
            url:"Api_Folder/masjidtiming.php",
            type:"POST",
            success:function(timings){
                // console.log(timings);
                $("#resultandpart").html(timings);
            }
        });
    }
    loadpage(); //load page will be called to show the timings of a masjid

    function noticeborad(){
        $.ajax({
            url:"Api_Folder/noticeBoard.php",
            success:function(show){
                // console.log(timings);
                $("#noticeBoard").html(show);

            }
        });
    }

    noticeborad(); //notice board block

    $("#search").keyup(function(){
        let searchvar =$(this).val();
        console.log(searchvar);
        $.ajax({
            url:"Api_Folder/search.php",
            type:"POST",
            data:{Search:searchvar},
            success:function(timings){
                // console.log(timings);
                $("#resultandpart").html(timings);
            }
        });
    });

}); //end of jquery block