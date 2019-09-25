<?php

function slot_run($size) {
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            $array[$i][$j] = rand(0, 1);
        }
    }
    return $array;
}

$result = slot_run(5);

var_dump($result);
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
                    <?php if ($key == 0): ?>
                        <div class="yellow"></div>
                    <?php else: ?>
                        <div class="blue"></div>
                    <?php endif; ?>     
                <?php endforeach; ?>
            </div> 
        <?php endforeach; ?>
    </body>
</html>
