<?php
// error_reporting(0);


//: variable aanmaken met als waarde wat er ingevult is in het form(zie textfield.html)
if (isset($_POST['submit'])) {


    $firstname = $_POST['first'];
    $insertion = $_POST['insertion'];
    $lastname = $_POST['last'];
    $birth = $_POST['birth'];
    $city = $_POST['city'];
    $streetname = $_POST['street'];
    $postcode = $_POST['postcode'];
    $hobby1 = $_POST['hobby1'];
    $hobby2 = $_POST['hobby2'];
    $hobby3 = $_POST['hobby3'];
    $profile = $_POST['motivation'];

    $email = $_POST['email'];
    $phonenumber = $_POST['phone'];
    $linkedin = $_POST['linkedin'];

    $workhistory1 = $_POST['workhistory1'];
    $workhistory2 = $_POST['workhistory2'];
    $workhistory3 = $_POST['workhistory3'];
    $education = $_POST['certificates'];
    $personalskills1 = $_POST['personalskills1'];
    $personalskills2 = $_POST['personalskills2'];
    $personalskills3 = $_POST['personalskills3'];
}


?>
<!DOCTYPE html>
<html>
<head>

    <title> Template </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--[CSS/JS Files - Start]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    <style>
        <?php include 'cv.css';
         include '../css/all.css';
         include '../css/all.min.css'; ?>
    </style>


    <script type="text/javascript">
        $(document).ready(function ($) {

            $(document).on('click', '.btn_print', function (event) {
                event.preventDefault();


                var element = document.getElementById('container_content');


                var opt =
                    {
                        filename: 'pageContent_' + js.AutoCode() + '.pdf',
                        image: {type: 'jpeg', quality: 0.98},
                        html2canvas: {scale: 1},
                        jsPDF: {unit: 'in', format: 'letter', orientation: 'portrait'}
                    };


                html2pdf().set(opt).from(element).save();


            });


        });
    </script>


</head>
<body>
<div class="container_content" id="container_content">
    <div id="wrapper">
        <?php echo '<img src="cvbanner%20top.png" alt="banner" id="banner">' ?>

        <div id="links">
            <br>
            <br>
            <?php echo '<img src="face.jpg" alt="gezicht" id="face">' ?>
            <br>
            <br>
            <br>
            <div class="pointer" id="adres">
              <p id="plekje"><?php echo $streetname ?><i class="fas fa-map-marker-alt fa-lg" id="marker"></i><br>
                  <?php echo $city . $postcode ?>
                </p>
            </div>
            <br>
            <div class="pointer" id="phone">
                <p><?php echo $phonenumber ?><i class="fas fa-phone-alt fa-lg"></i></p>
            </div>
            <br>
            <div class="pointer" id="email">
                <p><?php echo $email ?> <i class="fas fa-envelope fa-lg" id="briefje"></i></p>
            </div>
            <br>
            <div class="pointer" id="website">
                <p><?php echo $birth ?> <i class="fas fa-calendar fa-lg"></i></p>
            </div>

        </div>
        <div id="rechts">
            <h1> <?php echo $firstname ?> </h1>
            <h1><?php echo $insertion . "\x20\x20\x20" . $lastname ?></h1>
            <hr>
            <h3>personal information</h3>
            my hobbies are <br>
            <?php echo $hobby1 . "\x20\x20\x20" . $hobby2 . "\x20\x20\x20" . $hobby3 ?>
            <br>
            <h3>motivation</h3>
            <?php echo $profile ?> <br>
            <h3>skills</h3>
            my work history<br>
            <?php echo $workhistory1 ?> <br>
            <?php echo $workhistory2 ?> <br>
            <?php echo $workhistory3 ?> <br>
            <h3>certificates</h3>
            <?php echo $education ?>
            <h3>personal skills</h3>
            <?php echo $personalskills1 ?> <br>
            <?php echo $personalskills2 ?> <br>
            <?php echo $personalskills3 ?> <br>
        </div>
        <?php echo '<img src="cvbanner%20bot.png" alt="footer" id="footer">' ?>
    </div>
</div>

<div class="text-center" style="padding:20px;">
    <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
</body>
</html>
