<?php

//: variable aanmaken met als waarde wat er ingevult is in het form(zie textfield.html)
if (isset($_POST['submit'])) {

    $firstname = $_POST['voornaam'];
    $lastname = $_POST['achternaam'];
    $birth = $_POST['geboortedatum'];
    $city = $_POST['City'];
    $streetname = $_POST['streetname'];
    $postcode = $_POST['postcode'];
    $profile = $_POST['profiel'];
    $email = $_POST['email'];
    $phonenumber = $_POST['telephone'];
    $linkedin = $_POST['Linkedin'];
    $experience = $_POST['experience'];
    $time = $_POST['time'];
    $cert = $_POST['cert'];

    $array = array($firstname,$lastname,$birth,$city,$streetname,$postcode,$profile,$email,$phonenumber,$linkedin,$experience,$time,$cert);

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
    <title>CV Generator</title>
    <link rel="stylesheet" type="text/css" href="css/generator.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    ";
</head>
<body>
<div class="container">
    <div class="left_side">
        <div class="profiel_text">
            <h2>
            <?php if (!empty($array[0])) {
                echo"$array[0] ";
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
                    <h5><?php echo "$cert<br> $time"?></h5>
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

        <div class="about interest">
            <h2 class="title2">Interest</h2>
            <ul>
                <li><i class="fa fa-gamepad" aria-hidden="true"></i>Gaming</li>
                <li><i class="fa fa-television" aria-hidden="true"></i>TV</li>
                <li><i class="fa fa-spotify" aria-hidden="true"></i>Music</li>
                <li><i class="fa fa-laptop" aria-hidden="true"></i>Programming</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>