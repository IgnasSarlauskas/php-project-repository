<?php 
    date_default_timezone_set("Europe/Vilnius");
//    print date('Y-m-d', strtotime('+1 week'));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php print' PHP lydes ir ' . date('Y-m-d', strtotime('+1 day')); ?></title>
    </head>
    <body>
        <h1>
            Ignas - PHP su manimi buvo ir <?php print date('H:i:s', strtotime('-1 hour')); ?> 
        </h1>
        <p>
           <?php print date('Y', strtotime('+1 year ')); ?> ne uz kalnu !
        </p>
        
    </body>
</html>