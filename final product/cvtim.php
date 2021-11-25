<?php

//: variable aanmaken met als waarde wat er ingevult is in het form(zie textfield.html)
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];                       // 0
    $insertion = $_POST['insertion'];                       // 1
    $lastname = $_POST['lastname'];                         // 2
    $birth = $_POST['birth'];                               // 3
    $city = $_POST['city'];                                 // 4
    $streetname = $_POST['streetname'];                     // 5
    $postcode = $_POST['postcode'];                         // 6
    $hobbies = $_POST['hobbies'];                           // 7
    $motivation = $_POST['motivation'];                     // 8
    $email = $_POST['email'];                               // 9
    $phonenumber = $_POST['telephone'];                     // 10
    $linkedin = $_POST['Linkedin'];                         // 11
    $workHistory1 = $_POST['workHistory1'];                 // 12
    $workHistory2 = $_POST['workHistory2'];                 // 13
    $workHistory3 = $_POST['workHistory3'];                 // 14
    $education = $_POST['education'];                       // 15
    $training = $_POST['training'];                         // 16
    $personalskill1 = $_POST['personalskill1'];             // 17
    $skillLvl1 = $_POST['skillLvl1'];                       // 18
    $personalskill2 = $_POST['personalskill2'];             // 19
    $skillLvl2 = $_POST['skillLvl2'];                       // 20
    $personalskill3 = $_POST['personalskill3'];             // 21
    $skillLvl3 = $_POST['skillLvl3'];                       // 22
    $personalskill4 = $_POST['personalskill4'];             // 23
    $skillLvl4 = $_POST['skillLvl4'];                       // 24

    $array = array($firstname, $insertion, $lastname, $birth, $city, $streetname, $postcode,
        $hobbies, $motivation, $email, $phonenumber, $linkedin, $workHistory1, $workHistory2, $workHistory3,
        $education, $training, $personalskill1, $skillLvl1, $personalskill2, $skillLvl2, $personalskill3, $skillLvl3,
        $personalskill4,$skillLvl4);

    function emptyCheck($array)
    {
        echo '<h1>personal info</h1>';
        if (!empty($array[0])) {
            echo "first name: $array[0]<br>";
        }
        if (!empty($array[1])) {
            echo "insertion: $array[1]<br>";
        }
        if (!empty($array[2])) {
            echo "Last name: $array[2]<br>";
        }
        if (!empty($array[3])) {
            echo " date of birth: $array[3]<br>";
        }
        if (!empty($array[4])) {
            echo " city: $array[4]<br>";
        }
        if (!empty($array[5])) {
            echo " streetname: $array[5]<br>";
        }
        if (!empty($array[6])) {
            echo "postcode: $array[6]<br>";
        }
        if (!empty($array[7])) {
            echo " hobbies: $array[7]<br>";
        }
        echo '<br> <h1>contact info</h1> <br>';
        if (!empty($array[9])) {
            echo " E-mail: $array[9]<br>";
        }
        if (!empty($array[10])) {
            echo " phonenumber:$array[10]<br>";
        }
        if (!empty($array[11])) {
            echo " linkedin name: $array[11]<br>";
        }
        echo '</div>  </body>;';
    }
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
        <?php include 'css/cvtim.css';
         include 'css/all.css';
         include 'css/all.min.css'; ?>
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
            <br><br><br><br><br>
            <br><br><br><br><br>
            <div class="pointer" id="adres">
              <p id="plekje"><?php echo $array[5] ?><i class="fas fa-map-marker-alt fa-lg" id="marker"></i><br>
                  <?php echo $array[4] . $array[6] ?>
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
            <h3>Hobbies & motivation</h3>
           <p><?php echo $array[7]?></p>
            <p><?php echo $array[8]?></p>

            <h3>work  history</h3>
            <?php echo $array[12] ?> <br>
            <?php echo $array[13] ?> <br>
            <?php echo $array[14] ?> <br>
            <br>
            <h3>Education</h3>
            <?php echo $education ?>
            <br>
            <h3>personal skills</h3>
            <h5>Level 1-5</h5>
            <?php echo $array[17]," - ",$array[18]?> <br>
            <?php echo $array[19]," - ",$array[20] ?> <br>
            <?php echo $array[21]," - ",$array[22] ?> <br>
            <?php echo $array[23]," - ",$array[24] ?> <br>
        </div>
        <?php echo '<img src="cvbanner%20bot.png" alt="footer" id="footer">' ?>
    </div>
</div>

<div class="text-center" style="padding:20px;">
    <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
</body>
</html>
