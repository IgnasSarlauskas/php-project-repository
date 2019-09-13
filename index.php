<?php

$sunny = rand(0, 1);

if($sunny) {
    $img = 'sunny' ;
} else {
    $img = 'rainy';
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
            margin: 0 auto;
        }
        
        .rainy {
            background-image :url(http://s13.favim.com/orig/160903/book-books-cloud-cloudy-Favim.com-4697653.jpeg);
            background-size: cover;
            height: 500px;
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <body>
        <div class="<?php print $img; ?>"></div>
    </body>
</html>