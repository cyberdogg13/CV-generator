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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>cv</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <script type="text/javascript">
        $(document).ready(function ($) {
            $(document).on('click', '.btn_print', function (event) {
                event.preventDefault();
                var element = document.getElementById('container_content');
                var opt =
                    {
                        margin: 1,
                        filename: 'Cv_' + js.AutoCode() + '.pdf',
                        image: {type: 'jpeg', quality: 0.98},
                        html2canvas: {scale: 1},
                        jsPDF: {unit: 'in', format: 'a4', orientation: 'portrait'}
                    };
                html2pdf().set(opt).from(element).save();
            });
        });
    </script>

</head>

<body>
<div class="container-fluid overcover" id="container_content">
    <div class="container profile-box">
        <div class="row">
            <div class="col-md-4 left-co">
                <div class="left-side">
                    <div class="profile-info">
                        <?php
                        if (!empty($array[0])) {
                            echo "$array[0] ";
                        }
                        if (!empty($array[1])) {
                            echo "$array[1]<br>";
                        }
                        if (!empty($array[2])) {
                            echo "$array[2]<br>";
                        }
                        ?>
                    </div>
                    <h4 class="ltitle">Contact</h4>
                    <div class="contact-box pb0">

                        <div class="detail">
                            <?php
                            if (!empty($array[10])) {
                                echo " Phone Number: $array[10]<br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="contact-box pb0">
                        <div class="detail">
                            <?php
                            if (!empty($array[9])) {
                                echo " E-mail: $array[9]<br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="detail">
                            <?php
                            if (!empty($array[11])) {
                                echo " linkedin name: $array[11]<br>";
                            }
                            ?>
                        </div>
                    </div>

                    <h4 class="ltitle">Personal info</h4>

                    <div class="refer-cov">
                        <?php
                        if (!empty($array[0])) {
                            echo "$array[0] ";
                        }
                        if (!empty($array[1])) {
                            echo "$array[1] ";
                        }
                        if (!empty($array[2])) {
                            echo "$array[2]<br><br>";
                        }
                        if (!empty($array[3])) {
                            echo " date of birth: $array[3]<br><br>";
                        }
                        if (!empty($array[4])) {
                            echo " City/state: $array[4]<br><br>";
                        }
                        if (!empty($array[5])) {
                            echo " street-name: $array[5]<br><br>";
                        }
                        if (!empty($array[6])) {
                            echo " postcode: $array[6]<br>";
                        }
                        ?>

                    </div>
                    <div class="refer-cov">

                    </div>

                </div>
            </div>

            <div class="col-md-8 rt-div">
                <div class="rit-cover">
                    <div class="hotkey">
                        <?php
                        if (!empty($array[0])) {
                            echo "$array[0] ";
                        }
                        if (!empty($array[1])) {
                            echo "$array[1]<br>";
                        }
                        if (!empty($array[2])) {
                            echo "$array[2]<br>";
                        }
                        ?>
                    </div>
                    <h2 class="rit-titl">Profile</h2>
                    <div class="about">
                        <?php
                        if (!empty($array[7])) {
                            echo "My hobbies: $array[7]<br><br>";
                        }
                        if (!empty($array[8])) {
                            echo "My  motivation: $array[8]<br>";
                        }
                        ?>
                    </div>

                    <h2 class="rit-titl"> Work Experience</h2>
                    <div class="work-exp">
                        <?php
                        if (!empty($array[12])) {
                            echo "$array[12]<br><br>";
                        }
                        if (!empty($array[13])) {
                            echo "$array[13]<br><br>";
                        }
                        if (!empty($array[14])) {
                            echo "$array[14]<br><br>";
                        }
                        ?>
                    </div>

                    <h2 class="rit-titl"> Education & Training</h2>
                    <div class="education">
                        <ul class="row no-margin">
                            <li class="col-md-6"><span><?php if (!empty($array[11])) {
                                        echo "$array[15]<br>";
                                    } ?></span> <br>
                                <?php if (!empty($array[16])) {
                                    echo "$array[16]<br>";
                                } ?>   </li>

                        </ul>
                    </div>

                    <h2 class="rit-titl"> Skills</h2>
                    <div class="profess-cover row no-margin">
                        <div class="col-md-6">
                            <div class=" prog-row row">
                                <div class="col-sm-6">
                                    <?php
                                    if (!empty($array[17])) {
                                        echo "$array[17]<br><br>";
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo "$array[18]"*20?>%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row prog-row">
                                <div class="col-sm-6">
                                    <?php
                                    if (!empty($array[19])) {
                                        echo "$array[19]<br><br>";
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo "$array[20]"*20?>%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row prog-row">
                                <div class="col-sm-6">
                                    <?php
                                    if (!empty($array[21])) {
                                        echo "$array[21]<br><br>";
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo "$array[22]"*20?>%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row prog-row">
                                <div class="col-sm-6">
                                    <?php
                                    if (!empty($array[23])) {
                                        echo "$array[23]<br><br>";
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo "$array[24]"*20?>%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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