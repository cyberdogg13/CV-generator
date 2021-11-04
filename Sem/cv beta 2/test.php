<?php

//:de link naar de style sheet
echo '<link rel="stylesheet" type="text/css" href="index.css"></head>';

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
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $skill4 = $_POST['skill4'];
    $per1 = $_POST['per1'];
    $per2 = $_POST['per2'];
    $per3 = $_POST['per3'];
    $per4 = $_POST['per4'];
    $array = array($firstname,$lastname,$birth,$city,$streetname,$postcode,$profile,$email,$phonenumber,$linkedin,$experience,$time,$cert,$skill1,$skill2,$skill3,$skill4,$per1,$per2,$per3,$per4);


}
?>
    <!doctype html>
    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>cv</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="container-fluid overcover">
    <div class="container profile-box">
        <div class="row">
            <div class="col-md-4 left-co">
                <div class="left-side">
                    <div class="profile-info">
                        <?php
                        if (!empty($array[0])) {
                            echo"$array[0] ";
                        }
                        if (!empty($array[1])) {
                            echo"$array[1]<br>";
                        }
                        ?>
                    </div>
                    <h4 class="ltitle">Contact</h4>
                    <div class="contact-box pb0">

                        <div class="detail">
                            <?php
                            if (!empty($array[8])) {
                                echo" Phone Number: $array[8]<br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="contact-box pb0">
                        <div class="detail">
                            <?php
                            if (!empty($array[7])) {
                                echo" E-mail: $array[7]<br>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="detail">
                            <?php
                            if (!empty($array[9])) {
                                echo" linkedin name: $array[9]<br>";
                            }
                            ?>
                        </div>
                    </div>

                    <h4 class="ltitle">Personal info</h4>

                    <div class="refer-cov">
                        <?php
                        if (!empty($array[0])) {
                            echo"$array[0] ";
                        }
                        if (!empty($array[1])) {
                            echo"$array[1]<br>";
                        }
                        if (!empty($array[2])) {
                            echo" date of birth: $array[2]<br>";
                        }
                        if (!empty($array[3])) {
                            echo" City/state: $array[3]<br>";
                        }
                        if (!empty($array[4])) {
                            echo" street-name: $array[4]<br>";
                        }
                        if (!empty($array[5])) {
                            echo" postcode: $array[5]<br>";
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
                            echo"$array[0] ";
                        }
                        if (!empty($array[1])) {
                            echo"$array[1]<br>";
                        }
                        ?>
                    </div>
                    <h2 class="rit-titl">Profile</h2>
                    <div class="about">
                        <?php
                        if (!empty($array[6])) {
                            echo"$array[6]<br>";
                        }
                        ?>
                    </div>

                    <h2 class="rit-titl"> Work Experience</h2>
                    <div class="work-exp">
                        <?php
                        if (!empty($array[10])) {
                            echo"$array[10]<br>";
                        }
                        ?>
                    </div>

                    <h2 class="rit-titl"> Education</h2>
                    <div class="education">
                        <ul class="row no-margin">
                            <li class="col-md-6"><span><?php if (!empty($array[11])) {
                                        echo"$array[11]<br>";
                                    } ?></span> <br>
                                <?php if (!empty($array[12])) {
                                    echo"$array[12]<br>";
                                } ?>   </li>

                        </ul>
                    </div>

                    <h2 class="rit-titl"> Skills</h2>
                    <div class="profess-cover row no-margin">
                        <div class="col-md-6">
                            <div class=" prog-row row">
                                <div class="col-sm-6">
                                    <?php
                                    echo "$skill1";
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php $per1 ?> %" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row prog-row">
                                <div class="col-sm-6">
                                    <?php
                                    echo "$skill2";
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php $per2 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row prog-row">
                                <div class="col-sm-6">
                                    <?php
                                    echo "$skill3";
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php $per3 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row prog-row">
                                <div class="col-sm-6">
                                    <?php
                                    echo "$skill4";
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php $per4 ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
</body>
</html>
