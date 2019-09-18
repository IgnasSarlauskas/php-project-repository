<?php
$my_memory = ['penktadienis', 'paskaita', 'namai', 'zvanokas', 'draugeliui', '$alus++', '......', 'pirmadienis'];

$memories_count = count($my_memory) - 1;
$rand_flashback = rand(0, $memories_count);

$h1_text = 'Kas buvo Pentkadienį?';
$h2_text = 'Igno atmintis: ';
$flashback_text = "Index $rand_flashback : $my_memory[$rand_flashback]";

?>
<html>
    <body>
        <h1><?php print $h1_text; ?></h1>
        <h2><?php print $h2_text; ?>
        <ul>
            <?php foreach ($my_memory as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>   
        </ul>
        <h3><?php print $flashback_text; ?></h3>
</body>
</html>