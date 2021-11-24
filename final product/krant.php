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

<html>
<head>

    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>

    <link rel="stylesheet" type="text/css"
          href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="css/css.css" media="all"/>

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
<div id="container_content">
<div id="doc2" class="yui-t7">
    <div id="inner">

        <div id="hd">
            <div class="yui-gc">
                <div class="yui-u first">
                    <h1><?php if (!empty($array[0])) {
                            echo "$array[0] ";
                        }
                        if (!empty($array[1])) {
                            echo "$array[1] ";
                        }
                        if (!empty($array[2])) {
                            echo "$array[2]";
                        }?></h1>
                    <h2>Web Designer, Director</h2>
                </div>

                <div class="yui-u">
                    <div class="contact-info">
                       
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
                                <?php
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
                                if (!empty($array[9])) {
                                    echo "E-mail: $array[9]<br>";
                                }
                                if (!empty($array[10])) {
                                    echo "phonenumber: $array[10]<br>";
                                }
                                if (!empty($array[11])) {
                                    echo "linkedin: $array[11]<br>";
                                }
                                ?>
                            </p>
                        </div>
                    </div><!--// .yui-gf -->

                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Hobbies  </h2>
                        </div>
                        <div class="yui-u">
                            <p class="enlarge">
                            <?php
                            if (!empty($array[7])) {
                                echo "$array[7]<br>";
                            }
                            ?>
                            </p>
                        </div>
                    </div><!--// .yui-gf -->


                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>Motivation</h2>
                        </div>
                        <div class="yui-u">
                            <p class="enlarge">
                            <?php
                            if (!empty($array[8])) {
                                echo "$array[8]<br>";
                            }
                            ?>
                            </p>
                        </div>
                    </div><!--// .yui-gf -->

                            
                    <div class="yui-gf">
                        <div class="yui-u first">
                            <h2>History/skills</h2>
                        </div>
                        <div class="yui-u">

                            <div class="talent">
                                <h2>working history</h2><p><?php
                                    if (!empty($array[12])) {
                                        echo "$array[12]<br>";
                                    }
                                    if (!empty($array[13])) {
                                        echo "$array[13]<br>";
                                    }
                                    if (!empty($array[14])) {
                                        echo "$array[14]<br>";
                                    }
                                    ?></p>
                            </div>
                            <div class="talent">
                                <h2>education info</h2>
                               <p><?php if (!empty($array[15])) {
                                       echo "$array[15]<br>";
                                   }?></p>
                            </div>

                            <div class="talent">
                                <h2>Personal skills: level 1-5</h2>
                                <p><?php
                                    if (!empty($array[17])) {
                                        echo "$array[17] ";
                                    }
                                    if (!empty($array[18])) {
                                        echo "$array[18]<br>";
                                    }
                                    if (!empty($array[19])) {
                                        echo "$array[19] ";
                                    }
                                    if (!empty($array[20])) {
                                        echo "$array[20]<br>";
                                    }
                                    if (!empty($array[21])) {
                                        echo "$array[21] ";
                                    }
                                    if (!empty($array[22])) {
                                        echo "$array[22]<br>";
                                    }
                                    if (!empty($array[23])) {
                                        echo "$array[23] ";
                                    }
                                    if (!empty($array[24])) {
                                        echo "$array[24]<br>";
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div><!--// .yui-gf -->
                    <div class="yui-gf last">
                        <div class="yui-u first">
                            <h2>training and development</h2>
                        </div>
                        <div class="yui-u">
                            <?php if (!empty($array[16])) {
                                echo "$array[16]<br>";
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
</div>
<div class="text-center">
    <input type="submit" id="rep" value="Print" class="btn btn-info btn_print">
</div>
</body>
</html>