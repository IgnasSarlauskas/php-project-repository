<?php 

date_default_timezone_set("Europe/Vilnius");

$h1_font = rand(5,32);
$body_rgb = rand(0,255) . ', ' . rand(0,255) . ', ' . rand(0,255);
$p_rgb = rand(0,255) . ', ' . rand(0,255) . ', ' . rand(0,255);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP lydes ir <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'years')); ?></title>
    </head>
    <body style="background-color:rgb(<?php print $body_rgb?>);">
        <h1 style="font-size:<?php print $h1_font;?>px;">
            Ignas - galbut turesiu <?php print rand(1, 5); ?> vaiką(us)!
        </h1>
        <p style="color:rgb(<?php print $p_rgb?>);">
           D. Trump'as nebebus prezidentu: <?php print date('Y-m-d', strtotime('+' . rand(2, 10) . 'years')); ?>
        </p>
        
    </body>
</html>