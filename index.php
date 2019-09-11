<?php
date_default_timezone_set("Europe/Vilnius");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP lydes ir <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'years')); ?></title>
    </head>
    <style>
        .bomb {
            background-image: url(https://files.gamebanana.com/img/ico/sprays/4ea33068c0dcc.png);
            height: 200px;
            width: 300px;
            background-repeat: no-repeat;
            transform: scale(0.<?php print date('s'); ?>);
            margin: 0 auto;
        }
        
        p {
            text-align: center;
        }
    </style>
    <body>
        <div class="bomb"></div>
        <p><?php print date('s')?></p>
    </body>
</html>