<?php

//:de link naar de style sheet
echo '<link rel="stylesheet" type="text/css" href="index.css"></head>';

//: variable aanmaken met als waarde wat er ingevult is in het form(zie textfield.html)
if (isset($_POST['submit'])) {

    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $birth = $_POST['birth'];
    $city = $_POST['city'];
    $streetname = $_POST['street'];
    $postcode = $_POST['postcode'];
    $profile = $_POST['profile'];

    $email = $_POST['email'];
    $phonenumber = $_POST['phone'];
    $linkedin = $_POST['linkedin'];

    echo "<body class=container_content id=container_content>
<link rel='stylesheet' href='cv.css'>
<div id='center'>
<h1>personal info</h1>
 first name: $firstname <br>
 Last name: $lastname <br>
 date of birth: $birth <br>
 city: $city  <br>
 streetname: $streetname  <br>
 postcode: $postcode  <br>
 profile: $profile <br>
 <br>
 <h1>contact info</h1>
 <br>
 E-mail: $email  <br>
 phonenumber: $phonenumber  <br>
 linkedin name: $linkedin  <br>
</div>
 </body>";

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


    <script type="text/javascript">
        $(document).ready(function ($) {

            $(document).on('click', '.btn_print', function (event) {
                event.preventDefault();


                var element = document.getElementById('container_content');


                var opt =
                    {
                        margin: 1,
                        filename: 'pageContent_' + js.AutoCode() + '.pdf',
                        image: {type: 'jpeg', quality: 0.98},
                        html2canvas: {scale: 2},
                        jsPDF: {unit: 'in', format: 'letter', orientation: 'portrait'}
                    };


                html2pdf().set(opt).from(element).save();


            });


        });
    </script>


</head>
<body>

<div class="text-center" style="padding:20px;">
    <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>


<div class="container_content" id="container_content">

</div>


</body>
</html>
