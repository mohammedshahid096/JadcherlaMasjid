<?php 
include '../Api_Folder/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changing Time of Masjid</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css " rel="stylesheet "
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="container-fliud">
        <header class="mt-3">
            <h4 class="text-primary">Welcome: <small class="text-success">
                <?php 
                echo $_SESSION["masjidName"];
                ?>
            </small></h4>
            <hr>
            <center>
                <h1>Set Timinings</h1>
            </center>
        </header>
        <div class="row">
            <div class="col-md-3 offset-md-5">
                <center>
                <button class="btn btn-dark w-75 m-2" id="logoutbutton">Logout</button>
            </center>
        </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3 tabletimings">
                <div class="alert alert-success m-3" id="loginerror">successfully changed the <span id="ctimenamaz"></span> time</div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Namaz</th>
                            <th scope="col">
                                <center>Azan</center>
                            </th>
                            <th scope="col">
                                <center>Jamat</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="timinglist">
                   <!-- here all the masjid timing list data will be print dynamically -->
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 offset-md-3 mt-5 p-3" id="noticeaddblock">
              
            </div>
        </div>
    </div>

    <!-- this is a confirmation block after we click to set time button button and it will display the pop up -->
    <div id="bg_div_confirm">
        <div id="popup_confirm">
            <div class="container">
                <div class="row">
                    <h3 style="margin: 0px;">Set Confirmation
                    </h3>
                </div>
                <hr style="height: 1.5px; color: gray;">
                <div class="row" id="insertgrade">
                    <span>Are you Sure you want to change?</span>
                </div>
                <hr style="height: 1.5px; color: gray;">
                <div class="row" id="gratebuttons">
                    <span>
                        <!-- if we click to this button then ajax request will be called
                       and the data will be updated into the database -->
                        <button type="button" class="btn btn-success" id="submitconfirm">Submit</button> 
                        <!-- this button will cancel the ajax request for setting time change -->
                        <button type="button" class="btn btn-danger " id="cancelconfirm">Close</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
<script src="home.js"></script>
</body>

</html>