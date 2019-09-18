<?php

$my_memory = ['Penktadienis', 'paskaita', 'namai', 'zvanokas', 'draugeliui', '$alus++', '......', 'pirmadienis']
        
?>
<html>
    <head></head>
    <body>
        <h1>Kas buvo penktadieni?!</h1>
        <h2>Igno atmintis</h2>
        <ul>
            <?php foreach ($my_memory as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>