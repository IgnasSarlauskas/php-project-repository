<?php
$friend_memory = ['penktadienis', 'paskaita', 'namai', 'skambutis', 'draugeliui', '$alus++', '......','galvos skausmas', 'pirmadienis']
        
?>
<html>
    <head></head>
    <body>
        <h1>Kas buvo penktadieni?!</h1>
        <h2>Draugo atmintis</h2>
        <ul>
            <?php foreach ($friend_memory as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>


