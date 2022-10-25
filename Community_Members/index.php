<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Community Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css " rel="stylesheet "
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

    <link rel="stylesheet" href="masjid_community.css">
   
</head>

<body>
    <div class="container-fliud">
        <div class="row wrapper">

            <!-- ------------------------Login in-------------------------------------------------------------------- -->
            <div class="col login">
                <header>
                    Masjid Community Login
                </header>
                <div class="alert alert-danger" id="loginerror">Enter the correct input</div>
                <form action="" id="loginform">

                    <div class="form-group">
                        <label for="masjid_id">Email address</label>
                        <input type="text" class="form-control" id="masjid_id" 
                            placeholder="Enter Masjid's ID">
                    </div>

                    <div class="form-group">
                        <label for="checkPassword">Password</label>
                        <input type="password" class="form-control" id="checkPassword" placeholder="Password">
                        <i class="fas fa-eye" id="showpassword"></i>
                        <i class="fas fa-eye-slash" id="hidepassword"></i>
                    </div>

                    <button type="button" class="btn mb-2" id="loginbutton">Let's Enter into the Application</button>
                </form>

            </div>
        </div>
    </div>
<script src="index_community.js"></script>
</body>

</html>