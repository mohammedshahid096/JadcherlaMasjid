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

 <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

 body {
    background-color: #f7f7f7;
    font-family: 'Poppins', sans-serif;
}

.tabletimings {
    box-shadow: 2px 2px 6px grey;
}
.alert{
    display: none;
    margin:15px;
}
 </style>
</head>
<body>
    <div class="container">
        <?php include 'navbar.html'; ?>
        <center><h2>Masjid Registration</h2></center>
        <div class="row mt-2">
            <div class="col-md-6 offset-md-3">
                <div class="alert alert-danger">Enter Masjid Name or Password</div>
                <div class="alert alert-success">successfully added <span id="resultadd"></span></div>
            </div>

            <div class="col-md-6 offset-md-3  mt-2">
                <form id="myform">
                    <div class="form-row">
                      <div class="form-group col-md-6 m-3">
                        <label for="Masjidname">Masjid Name</label>
                        <input type="email" class="form-control" id="Masjidname" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6 m-3">
                        <label for="inputPassword">Password</label>
                        <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group m-3">
                      <label for="profileImage">profile imgage</label>
                      <input type="text" class="form-control" id="profileImage" placeholder="Profile image ">
                    </div>
                    <div class="form-group m-3">
                      <label for="Location">Location</label>
                      <input type="text" class="form-control" id="Location" placeholder="Location ">
                    </div>
                    <div class="form-row m-3">
                      <div class="form-group col-md-6">
                        <label for="Map">Map</label>
                        <input type="text" class="form-control" placeholder="map" id="Map">
                      </div>
                     
                      
                    </div>

                 </form>
            </div>
            <div class="col-md-6 offset-md-3 tabletimings">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col" >Namaz</th>
                            <th scope="col">
                                <center>Azan</center>
                            </th>
                            <th scope="col">
                                <center>Jamat</center>
                            </th>
                            <!-- <th scope="col">Submit</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Fajar</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_fajar" value="05:00">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="fajar" value="05:15">
                                </div>
                            </td>
                           
                        </tr>

                        <tr>
                            <th scope="row">Zohar</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_zohar" value="13:00">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="zohar" value="13:15">
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">Asar</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_asar" value="17:00">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="asar" value="17:15">
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">Magrib</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_magrib" value="18:05">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="magrib" value="18:10">
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">Isha</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_isha" value="20:00">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="isha" value="20:15">
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">Jumma</th>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="a_jumma" value="12:30">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="time" class="form-control" id="jumma" value="13:15">
                                </div>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row m-3">
            <div class="col-md-4 offset-md-4">
            <input type="button" class="btn btn-dark w-100" value="submit" id="submitbutton">
            </div>
        </div>
    </div>
 <script src="addmasjid.js"></script>
</body>

</html>