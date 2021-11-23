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

    function emptyCheck($array)
    {
        echo "<body class=container_content id=container_content>
              <link rel='stylesheet' href='cv.css'>
              <div id='center'>";
        echo '<h1>personal info</h1>';
        if (!empty($array[0])) {
            echo "first name: $array[0]<br>";
        }
        if (!empty($array[1])) {
            echo "Last name: $array[1]<br>";
        }
        if (!empty($array[2])) {
            echo " date of birth: $array[2]<br>";
        }
        if (!empty($array[3])) {
            echo " city: $array[3]<br>";
        }
        if (!empty($array[4])) {
            echo " streetname: $array[4]<br>";
        }
        if (!empty($array[5])) {
            echo " postcode: $array[5]<br>";
        }
        if (!empty($array[6])) {
            echo " motivation: $array[6]<br>";
        }
        echo '<br> <h1>contact info</h1> <br>';
        if (!empty($array[7])) {
            echo " E-mail: $array[7]<br>";
        }
        if (!empty($array[8])) {
            echo " phonenumber:$array[8]<br>";
        }
        if (!empty($array[9])) {
            echo " linkedin name: $array[9]<br>";
        }
        if (!empty($array[13])) {
            echo "insertion $array[13]<br>";
        }
        echo '</div>  </body>;';
    }
}
?>

<html>
<head>

    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <link rel="stylesheet" type="text/css"
          href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/css.css" media="all"/>

</head>
<body>

<div id="doc2" class="yui-t7">
    <div id="inner">

        <div id="hd">
            <div class="yui-gc">
                <div class="yui-u first">
                    <h1><?php if (!empty($array[0])) {
                            echo "$array[0] ";
                        }
                        if (!empty($array[13])) {
                            echo "$array[13] ";
                        }
                        if (!empty($array[1])) {
                            echo "$array[1]";
                        }?></h1>
                    <h2>Web Designer, Director</h2>
                </div>

                <div class="yui-u">
                    <div class="contact-info">
                        <h3><a id="pdf" href="#">Download PDF</a></h3>
                    </div><!--// .contact-info -->
                </div>
            </div><!--// .yui-gc -->
        </div><!--// hd -->

        <div id="bd">
            <div id="yui-main">
                <div class="yui-b">
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Personal info</h2>
                        </div>
                        <div class="yui-u">
                            <p class="enlarge">
                                <?php if (!empty($array[0])) {
                                    echo "first name: $array[0]<br>";
                                }
                                if (!empty($array[1])) {
                                    echo "Last name: $array[1]<br>";
                                }
                                if (!empty($array[2])) {
                                    echo " date of birth: $array[2]<br>";
                                }
                                if (!empty($array[3])) {
                                    echo " city: $array[3]<br>";
                                }
                                if (!empty($array[4])) {
                                    echo " streetname: $array[4]<br>";
                                }
                                if (!empty($array[5])) {
                                    echo "postcode: $array[5]<br>";
                                }
                                if (!empty($array[6])) {
                                    echo "motivation: $array[6]<br>";
                                }
                                if (!empty($array[14])) {
                                    echo "hobbies: $array[14]<br>";
                                }
                                if (!empty($array[7])) {
                                    echo "E-mail: $array[7]<br>";
                                }
                                if (!empty($array[8])) {
                                    echo "phonenumber: $array[8]<br>";
                                }
                                if (!empty($array[9])) {
                                    echo "linkedin: $array[9]<br>";
                                }
                                ?>
                            </p>
                        </div>
                    </div><!--// .yui-gf -->

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Skills</h2>
                        </div>
                        <div class="yui-u">

                            <div class="talent">
                                <h2>work history</h2><p><?php
                                    if (!empty($array[10])) {
                                        echo "$array[10]<br>";
                                    }?></p>
                            </div>
                            <div class="talent">
                                <h2>education information</h2>
                               <p><?php if (!empty($array[11])) {
                                       echo "$array[11]<br>";
                                   }?></p>
                            </div>

                            <div class="talent">
                                <h2>Personal skills</h2>
                                <p><?php if (!empty($array[15])) {
                                        echo "$array[15]<br>";
                                    }?></p>
                            </div>
                        </div>
                    </div><!--// .yui-gf -->
                    <div class="yui-gf last">
                        <div class="yui-u first">
                            <h2>training and development</h2>
                        </div>
                        <div class="yui-u">
                            <?php if (!empty($array[12])) {
                                echo "$array[12]<br>";
                            } ?>
                        </div>
                    </div><!--// .yui-gf -->
                </div><!--// .yui-b -->
            </div><!--// yui-main -->
        </div><!--// bd -->

        <div id="ft">
            <p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) -
                867-5309</p>
        </div><!--// footer -->

    </div><!-- // inner -->


</div><!--// doc -->


</body>
</html>