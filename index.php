<?php
date_default_timezone_set("Europe/Vilnius");

$timer = date('s');
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
            transform: scale(0.<?php print $timer; ?>);
            margin: 0 auto;
        }

        .explode {
            background-image :url(https://upload.wikimedia.org/wikipedia/commons/7/79/Operation_Upshot-Knothole_-_Badger_001.jpg);
            background-size: cover;
            height: 1000px;
            width: 1000px;
            margin: 0 auto;
        }

        p {
            text-align: center;
        }
    </style>
    <body>
        <?php if ($timer == 0) : ?>
            <div class="explode"></div>
            
        <?php else : ?>
            <div class="bomb"></div>
            <p><?php print $timer; ?></p>
        <?php endif ?>
            
    </body>
</html>