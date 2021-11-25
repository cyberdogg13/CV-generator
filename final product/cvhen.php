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
                        jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
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
            <?php
            if (!empty($array[0])) {
                echo"$array[0] ";
            }
            if (!empty($array[1])) {
                echo"$array[1] ";
            }
            if (!empty($array[2])) {
                echo"$array[2] ";
            }
            ?>
            </h2>
        </div>
        <div class="contactInfo">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                    <span class="icon"><br><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class="text"><?php echo"$array[10]"; ?></span>
                </li>
                <li>
                    <span class="icon"><br><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo "$array[9]"?></span>
                </li>

                <li>
                    <span class="icon"><br><i class="fa fa-map-o" aria-hidden="true"></i></span>
                    <span class="text"><?php echo "$array[5] $array[4]<br> $array[6]"?></span>
                </li>
            </ul>
        </div>

        <div class="contactInfo education">
            <h3 class="title">Education</h3>
            <ul>
                <li>
                    <h5><?php echo "$array[15]"?></h5>
                </li>
            </ul>
        </div>

        <div class="contactInfo language">
            <h3 class="title">Skills</h3>
            <div style="width: 90%;"></div>
            <ul>
                <li>
                    <span class="text"><?php echo $array[17] ?></span>
                    <span class="percent">
                    <div style="width: <?php echo "$array[18]"*20?>%;"></div>
                        </span>
                </li>
                <li>
                    <span class="text"><?php echo $array[19] ?></span>
                    <span class="percent">
                    <div style="width: <?php echo "$array[20]"*20?>%;"></div>
                        </span>
                </li>
                <li>
                    <span class="text"><?php echo $array[21] ?></span>
                    <span class="percent">
                    <div style="width: <?php echo "$array[22]"*20?>%;"></div>
                        </span>
                </li>
                <li>
                    <span class="text"><?php echo $array[23] ?></span>
                    <span class="percent">
                    <div style="width: <?php echo "$array[24]"*20?>%;"></div>
                        </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="right_Side">
        <div class="about">
            <h2 class="title2">Hobbies & Motivation</h2>
            <p><?php
                if (!empty($array[7])) {
                echo"$array[7]<br><br>  ";
                }
                if (!empty($array[8])) {
                    echo"$array[8]<br>  ";
                }
                ?></p>
        </div>
        <div class="about">
            <h2 class="title2">Experience</h2>
           <p>
               <?php
               if (!empty($array[12])) {
                   echo"$array[12]<br><br>  ";
               }
               if (!empty($array[13])) {
                   echo"$array[13]<br><br>  ";
               }
               if (!empty($array[14])) {
                   echo"$array[14]<br><br>  ";
               }
               ?>
           </p>
        </div>

        <div class="about">
            <h2 class="title2">training</h2>
           <p>
               <?php echo"$array[16]"; ?>
           </p>
        </div>
    </div>
</div>
<div class="text-center" style="padding:20px;">
    <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
</div>
</body>
</html>