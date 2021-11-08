<?php
error_reporting(0);

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

$workhistory1 = $_POST['workhostory1'];
$workhistory2 = $_POST['workhostory2'];
$workhistory3 = $_POST['workhostory3'];
$education = $_POST['certificates'];
$personalskills1 = $_POST['personskills1'];
$personalskills2 = $_POST['personskills2'];
$personalskills3 = $_POST['personskills3'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> scrum opdracht </title>

    <style>
        <?php include '../output.css';
         include '../css/all.css';
         include '../css/all.min.css'; ?>
    </style>


</head>
<body>
<div id="wrapper">
    <?php echo '<img src="cvbanner%20top.png" alt="banner" id="banner">' ?>

    <div id="links">
        <br>
        <br>
        <?php echo '<img src="face.jpg" alt="gezicht" id="face">' ?>
        <br>
        <br>
        <br>
        <br>
        <div class="pointer" id="adres">
            <table>
                <tr>
                    <td><?php echo $streetname ?></td>
                    <td rowspan="2"><i class="fas fa-map-marker-alt fa-lg"></i></td>
                </tr>
                <tr>
                    <td><?php echo $city. $postcode ?></td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="pointer" id="phone">
            <p>phone number <i class="fas fa-phone-alt fa-lg"></i></p>
        </div>
        <br>
        <br>
        <div class="pointer" id="email">
            <p>email <i class="fas fa-envelope fa-lg"></i></p>
        </div>
        <br>
        <br>
        <div class="pointer" id="website">
            <p>date of birth <i class="fas fa-calendar fa-lg"></i></p>
        </div>

    </div>
    <div id="rechts">
        <h1> <?php echo $firstname ?> </h1>
        <h1><?php echo $insertion . "\x20\x20\x20" . $lastname ?></h1>
        <hr>
        <h3>personal information</h3>
        my hobbies are <br>
        item 1 and item2 and item3 <br>
        <br>
        motivation: <br>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum."
        <br>
        <h3>skills</h3>
        my work history is: <br>
        firts workplace <br>
        seccond workplace <br>
        third workplace <br>
        <h3>certificates</h3>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum."
        <h3>personal skills</h3>
        item1 <br>
        item2 <br>
        item3 <br>
    </div>
    <?php echo '<img src="cvbanner%20bot.png" alt="footer" id="footer">' ?>
</div>
</body>
</html>