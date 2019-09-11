<?php 
    date_default_timezone_set("Europe/Vilnius");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> PHP lydes ir <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'years')); ?></title>
    </head>
    <body>
        <h1>
            Ignas - galbut turesiu <?php print rand(1, 5); ?> vaiką(us)!
        </h1>
        <p>
           D. Trump'as nebebus prezidentu: <?php print date('Y-m-d', strtotime('+' . rand(2, 10) . ' year ')); ?>
        </p>
        
    </body>
</html>