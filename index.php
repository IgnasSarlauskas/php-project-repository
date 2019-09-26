<?php

function slot_run($size) {
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            $array[$i][$j] = rand(0, 1);
        }
    }
    return $array;
}

function find_winner_array($array) {
    $winner_array = [];
    foreach ($array as $array_id => $section) {
        foreach ($section as $value) {
            $section_length = count($section);
            $section_sum = array_sum($section);
            if ($section_sum == $section_length ) {
                $winner_array[$array_id][] = $value;
            } 
        }
    }
    return $winner_array;
}

$result = slot_run(4);
var_dump($result);
$winning_rows = find_winner_array($result);
var_dump($winning_rows);
?>

<html>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }
        .yellow {
            background-color: yellow;
            height: 50px;
            width: 50px;
            border: 1px solid white;
        }
        .blue {
            background-color: blue;
            height: 50px;
            width: 50px;
            border: 1px solid white;
        }
    </style>
    <body>
            <?php foreach ($result as $value): ?>
            <div class="container">
                <?php foreach ($value as $key): ?>
                    <?php if ($key == 1): ?>
                        <div class="yellow"></div>
                    <?php else: ?>
                        <div class="blue"></div>
                    <?php endif; ?>     
            <?php endforeach; ?>
            </div> 
<?php endforeach; ?>
    </body>
</html>