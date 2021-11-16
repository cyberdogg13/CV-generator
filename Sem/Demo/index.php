<?php
?>
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<style>

    @keyframes slideInDown {
        0% {
            transform: translatey(500%);
        }
        100% {
            transform: translatey(0);
        }
    }
    @keyframes slideInLeft {
        0% {
            transform: translatex(-500%);
        }
        100% {
            transform: translatex(0);
        }
    }
    @keyframes slideInRight {
        0% {
            transform: translatex(500%);
        }
        100% {
            transform: translatex(0);
        }
    }
   .cv1{
       animation-duration: 2s;
       animation-timing-function: ease-in-out;
       animation-delay: 0s;
       animation-name: slideInLeft;
   }
   .cv2{
       animation-duration: 2s;
       animation-timing-function: ease-in-out;
       animation-delay: 0s;
       animation-name: slideInDown;
   }
   .cv3{
       animation-duration: 2s;
       animation-timing-function: ease-in-out;
       animation-delay: 0s;
       animation-name: slideInRight;
   }
    </style>
<body>
<div class="line"> <h3 class="roeptext">Choose a template</h3> </div>
<div class="center">
<div class="body">
<div class="cv1">
    <img src="img/cv1.png" alt="cv1" class="img1">
    <a href="invul.html" class="Btn btn1">CV 1</a>
</div>

<div class="cv2">
    <img src="img/krant.png" alt="cv2" class="img2">
    <a href="invul2.html" class="Btn btn1">CV 2</a>
</div>

<div class="cv3">
    <img src="img/cvhen.png" alt="cv3" class="img2">
    <a href="invul3.html" class="Btn btn1">CV 3</a>
</div>
</div>
</div>
</body>
</html>
