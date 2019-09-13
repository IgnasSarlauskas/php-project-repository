<?php

$sunny = rand(0, 1);

if ($sunny) {
    $img = 'sunny';
    $text = 'sauleta';
} else {
    $img = 'rainy';
    $text = 'debesuota';
}

?>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <style>
        .sunny {
            background-image :url(http://www.cashadvance6online.com/data/archive/img/2313238826.png);
            background-size: cover;
            height: 500px;
            width: 500px;
        }

        .rainy {
            background-image :url(http://s13.favim.com/orig/160903/book-books-cloud-cloudy-Favim.com-4697653.jpeg);
            background-size: cover;
            height: 500px;
            width: 500px;
        }

        p {
            display: inline-block;
            position: relative; 
            bottom: 250px;
        }
    </style>
    <body>
        <img class ="<?php print $img; ?>">
        <p><?php print $text; ?></p>
    </body>
</html>