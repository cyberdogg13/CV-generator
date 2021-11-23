<?php

//: variable aanmaken met als waarde wat er ingevult is in het form(zie textfield.html)
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birth = $_POST['birth'];
    $city = $_POST['city'];
    $streetname = $_POST['streetname'];
    $postcode = $_POST['postcode'];
    $motivation = $_POST['motivation'];
    $email = $_POST['email'];
    $phonenumber = $_POST['telephone'];
    $linkedin = $_POST['Linkedin'];
    $workHistory = $_POST['workHistory'];
    $education = $_POST['education'];
    $training = $_POST['training'];
    $insertion = $_POST['insertion'];
    $hobbys = $_POST['hobbies'];
    $skill = $_POST['personalskill'];

    $array = array($firstname, $lastname, $birth, $city, $streetname, $postcode,
        $motivation, $email, $phonenumber, $linkedin, $workHistory, $education, $training, $insertion, $hobbys, $skill);

    function emptyCheck($array){
        echo "<body class=container_content id=container_content>
              <link rel='stylesheet' href='cv.css'>
              <div id='center'>";
        echo'<h1>personal info</h1>';
        if (!empty($array[0])) {
            echo"first name: $array[0]<br>";
        }
        if (!empty($array[1])) {
            echo"Last name: $array[1]<br>";
        }
        if (!empty($array[2])) {
            echo" date of birth: $array[2]<br>";
        }
        if (!empty($array[3])) {
            echo" city: $array[3]<br>";
        }
        if (!empty($array[4])) {
            echo" streetname: $array[4]<br>";
        }
        if (!empty($array[5])) {
            echo"profile: $array[5]<br>";
        }
        if (!empty($array[6])) {
            echo" postcode: $array[6]<br>";
        }
        echo '<br> <h1>contact info</h1> <br>';
        if (!empty($array[7])) {
            echo" E-mail: $array[7]<br>";
        }
        if (!empty($array[8])) {
            echo" phonenumber:$array[8]<br>";
        }
        if (!empty($array[9])) {
            echo" linkedin name: $array[9]<br>";
        }
        echo'</div>  </body>;';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>

    <title>CV Generator</title>
    <link rel="stylesheet" type="text/css" href="css/generator.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    ";

    <script type="text/javascript">
        $(document).ready(function($)
        {
            $(document).on('click', '.btn_print', function(event)
            {
                event.preventDefault();
                var element = document.getElementById('container_content');
                var opt =
                    {
                        margin:       1,
                        filename:     'Cv_'+js.AutoCode()+'.pdf',
                        image:        { type: 'jpeg', quality: 0.98 },
                        html2canvas:  { scale: 1 },
                        jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
                    };
                html2pdf().set(opt).from(element).save();
            });
        });
    </script>
</head>
<body>
<div class="container" id="container_content">
    <div class="left_side">
        <div class="profiel_text">
            <h2>
            <?php if (!empty($array[0])) {
                echo"$array[0] $insertion ";
            }
            if (!empty($array[1])) {
                echo"$array[1]";
            } ?>
            </h2>
        </div>
        <div class="contactInfo">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                    <span class="icon"><br><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class="text"><?php echo"$array[8]"; ?></span>
                </li>
                <li>
                    <span class="icon"><br><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo "$email"?></span>
                </li>

                <li>
                    <span class="icon"><br><i class="fa fa-map-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo "$city"?></span>
                </li>
            </ul>
        </div>

        <div class="contactInfo education">
            <h3 class="title">Education</h3>
            <ul>
                <li>
                    <h5><?php echo "$education"?></h5>
                </li>
            </ul>
        </div>

        <div class="contactInfo language">
            <h3 class="title">Languages</h3>
            <div style="width: 90%;"></div>
            <ul>
                <li>
                    <span class="text">English</span>
                    <span class="percent">
                    <div style="width: 90%;"></div>
                        </span>
                </li>
                <li>
                    <span class="text">Dutch</span>
                    <span class="percent">
                    <div style="width: 40%;"></div>
                        </span>
                </li>
                <li>
                    <span class="text">Portuguese</span>
                    <span class="percent">
                    <div style="width: 60%;"></div>
                        </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="right_Side">
        <div class="about">
            <h2 class="title2">Profile</h2>
            <p><?php if (!empty($array[6])) {
                echo"$array[6]  ";
                } ?></p>
        </div>
        <div class="about">
            <h2 class="title2">Experience</h2>
           <h5>
               <?php if (!empty($array[10])) {
                   echo"$array[10]<br>";
               } ?>
           </h5>
        </div>

        <div class="about">
            <h2 class="title2">training</h2>
           <h5>
               <?php echo"$training"; ?>
           </h5>
        </div>

        <div class="about skills">
            <h2 class="title2">Professional Skills</h2>
            <div class="box">
                <h4>HTML</h4>
                <div class="percent">
                    <div style="width: 90%;"></div>
                </div>
            </div>
            <div class="box">
                <h4>Javascript</h4>
                <div class="percent">
                    <div style="width: 45%;"></div>
                </div>
            </div>
            <div class="box">
                <h4>JAVA</h4>
                <div class="percent">
                    <div style="width: 90%;"></div>
                </div>
            </div>
            <div class="box">
                <h4>PHP</h4>
                <div class="percent">
                    <div style="width: 70%;"></div>
                </div>
            </div>
            <div class="box">
                <h4>MySQL</h4>
                <div class="percent">
                    <div style="width: 55%;"></div>
                </div>
            </div>
        </div>

        
    </div>
</div>
<div class="text-center" style="padding:20px;">
    <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
</body>
</html>