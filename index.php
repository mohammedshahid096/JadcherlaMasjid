<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Timings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css " rel="stylesheet "
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css folder -->
    <link rel="stylesheet" href="./Design.css">

    <!-- font awesome icons link  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>

    <!-- juquery link  -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
</head>

<body>
    <div class="wrapper container-fliud">
        <!-- header part -->
        <!-- <header>
            <div class="row">
                <h1>Mosque of Allah</h1>
                <div class="himage">
                    <img src="https://png.pngtree.com/png-clipart/20220301/original/pngtree-dua-muslim-prayer-praying-boy-png-illustration-eid-graphic-png-image_7345716.png"
                        alt="">
                </div>
            </div>
        </header> -->
        <?php include 'carousel.html'; ?>

        <!-- marquee part div  -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <marquee behavior="" direction="right" bgcolor="yellow">Assalmualkum pls look the namaz and offer the
                    namaz.
                </marquee>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8 offset-md-2 mt-1 " style="position: relative;">
                <div class=" d-flex" id="searcbar">
                    <input type="text" class="form-control" id="search" placeholder="Masjid Name">
                    <i class="fas fa-search"></i>
                </div>
            </div>

            <div class="col-md-8 offset-md-2">
                <div id="noticeBoard">

                </div>
                <!-- tables resut div  -->
                <div id="resultandpart">

                </div>
            </div>
        </div>

    </div>
    <script src="./indexpage.js"></script>
</body>

</html>