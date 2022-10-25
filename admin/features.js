$(document).ready(function(){
    //function for index page notification it should be checked or not when ever 
    // a page will be load 
    function indexCheckbox(){

        $.ajax({
            url:"featuresFunction.php",
            type:"POST",
            data:{_indexCheckBox:1},
            success:function(data){
                // console.log(data);
                if(data==1){
                    $("#indexnotification").prop('checked',true);
                    $("#indexnotification").val(1);
                }
                else{
                    $("#indexnotification").prop('checked',false);
                    $("#indexnotification").val(0);
                }
            }
        });
    }

    indexCheckbox();

    function userscheckbox(){
        $.ajax({
            url:"featuresFunction2.php",
            type:"POST",
            data:{_userCheckBox:1},
            success:function(data){
                console.log(data);
                if(data==1){
                    $("#usersaddnotice").prop('checked',true);
                    $("#usersaddnotice").val(1);
                }
                else{
                    $("#usersaddnotice").prop('checked',false);
                    $("#usersaddnotice").val(0);
                }
            }
        });
    }

    userscheckbox();

    $("#indexnotification").click(function(){
        let x = $("#indexnotification").val();
        if(x==1){
            x = 0;
            $("#indexnotification").val(x);
        }
        else{
            x = 1;
            $("#indexnotification").val(x);
        }
        // console.log("now changes to = "+x);
        $.ajax({
            url:"featuresFunction.php",
            type:"POST",
            data:{setCountValue:x},
            success:function(data){
                // console.log("output"+data);
                if(data==0)
                {
                    $("#extraoptions").html("");
                }
                else{
                    $("#extraoptions").html(data);
                }
            }
        });
    });

    $(document).on("click",".singlecheckbox",function(){
        let Buttonid = $(this).data("singlecheckbox");
        let x = $(this).val();
        console.log(x);
        x == 1 ? x= 0 : x =1;
        $(this).val(x);
        console.log("u change to "+x);
        $.ajax({
            url:"featuresFunction.php",
            type:"POST",
            data:{setSingleCheckBox:x,id:Buttonid},
            success:function(x){
                console.log(x);
            }
        });
    });

    
    $("#usersaddnotice").click(function(){
        let x = $("#usersaddnotice").val();
        console.log(x);
        if(x==1){
            x = 0;
            $("#usersaddnotice").val(x);
        }
        else{
            x = 1;
            $("#usersaddnotice").val(x);
        }
        // console.log("now changes to = "+x);
        $.ajax({
            url:"featuresFunction2.php",
            type:"POST",
            data:{setCountValueUser:x},
            success:function(data){
                console.log("output"+data);
        
            }
        });
    });

    $("#clearnoticeboard").dblclick(function(){
        console.log("u click doubble");
        $.ajax({
            url:"featuresFunction2.php",
            type:"POST",
            data:{_clearNotice:1},
            success:function(){
                alert("all the data is cleared now in notice board");
            }
        });
    })

});//end of jquery function