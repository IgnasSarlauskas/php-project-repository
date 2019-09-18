<?php
$friend_memory = ['penktadienis', 'paskaita', 'namai', 'skambutis', 'draugeliui', '$alus++', '......', 'galvos skausmas', 'sekmadienis'];
$my_memory = ['penktadienis', 'paskaita', 'namai', 'zvanokas', 'draugeliui', '$alus++', '......', 'pirmadienis'];

$same_memories[] = array_intersect($friend_memory, $my_memory);

?>
<html>
    <head></head>
    <body>
        <h1>Kas buvo penktadieni?!</h1>
        <h2>Sutape prisiminimai</h2>
        <ul>
            <?php foreach ($same_memories as $index): ?>
                <?php foreach ($index as $value): ?>
                    <li><?php print $value; ?></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </body>
</html>


