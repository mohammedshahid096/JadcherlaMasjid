<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css " rel="stylesheet "
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php  include 'bootstrapjs.html'; ?>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <link rel="stylesheet" href="features.css">

</head>
<body>
    <div class="container">
        <?php include 'navbar.html'; ?>
        <div class="row">
            <div class="col-9">
                <h1>show Notice Board on main page </h1>
            </div>
            <div class="col-3">
                <label class="switch">
                    <input type="checkbox" id="indexnotification" >
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-4" id="extraoptions">
            <!-- dynamic check box options  -->
            </div>
        
        </div>

        <div class="row mt-4">
            <div class="col-9">
                <h1>show notice adding options to users</h1>
            </div>
            <div class="col-3">
            <label class="switch">
                    <input type="checkbox" id="usersaddnotice" >
                    <span class="slider round"></span>
                </label>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-6">
                <h1>Notice Board clearing  Data</h1>
            </div>
            <div class="col-md-4 offset-md-2 col">
                <input type="button" class="btn btn-warning w-100" value=" double click to clear" id="clearnoticeboard">
            </div>
        </div>
    </div>

    <script src="features.js"></script>
</body>
</html>