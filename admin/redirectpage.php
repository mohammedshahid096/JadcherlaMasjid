<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css " rel="stylesheet "
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php  include 'bootstrapjs.html'; ?>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
           <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php include 'navbar.html'; ?>
        <center><h2><bold>MASJID LIST</bold></h2></center>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="alert alert-info col-md-6 offset-md-3"></div>
                <div class="alert alert-success col-md-6 offset-md-3">successfully added <span id="resultadd"></span></div>
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th scope="col">S.no</th>
                            <th scope="col">Masjid</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="tablelist">
                         <!-- dynamic data list -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- editing block  -->
    <div id="bg_div_edit">
        <div id="popup_edit">
            <div class="container">
                <div class="row">
                    <h3 style="margin: 0px;">Edit Confirmation
                    </h3>
                </div>
                <hr style="height: 1.5px; color: gray;">
                <div class="row" id="insertgrade">
                    <div class="col  mt-2">
                        <div class="alert alert-danger col-md-6 offset-md-3">Enter Masjid Name or Password</div>
                        <form id="editform">
                           <!-- dynamic data will come from php  -->
                        </form>
                    </div>
                </div>
                <hr style="height: 1.5px; color: gray;">
                <div class="row" id="gratebuttons">
                    <span>
                        <button type="button" class="btn btn-success" id="editmasjidbutton">Submit</button>
                        <button type="button" class="btn btn-dark" id="canceledit">Close</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div id="bg_div_delete">
        <div id="popup_delete">
            <div class="container">
                <div class="row">
                    <h3 style="margin: 0px;">Delete Confirmation
                    </h3>
                </div>
                <hr style="height: 1.5px; color: gray;">
                 <span>Are sure you want to delete id= <span id="deletemessageID"></span></span>
                <hr style="height: 1.5px; color: gray;">
                <div class="row" id="gratebuttons">
                    <span>
                        <button type="button" class="btn btn-success" id="deletemasjidbutton">Submit</button>
                        <button type="button" class="btn btn-dark " id="canceldelete">Close</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="update.js"></script>
</body>

</html>