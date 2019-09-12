<?php
date_default_timezone_set("Europe/Vilnius");

$phones = [
    'iphone' => [
        [
            'model' => 'iphone 6',
            'price' => 400,
            'photo' => 'https://phonespot.lt/wp-content/uploads/2016/09/iPhone_6_16gb_Space_Grey-300x300.jpg',
        ],
        [
            'model' => 'iphone 7',
            'price' => 500,
            'photo' => 'https://www.technorama.lt/359184-home_default/apple-iphone-7.jpg',
        ],
        [
            'model' => 'iphone 8',
            'price' => 600,
            'photo' => 'https://rent.infotheek.com/wp-content/uploads/2017/10/iphone-8.png',
        ],
    ],
    'samsung' => [
        [
            'model' => 'Samsung galaxy 9',
            'price' => 650,
            'photo' => 'https://phonespot.lt/wp-content/uploads/2018/05/samsung-galaxy-s9-black-300x300.jpg',
        ],
    ],
    'huawei' => [
        [
            'model' => 'Huawei P Smart',
            'price' => 550,
            'photo' => 'https://i.ebayimg.com/images/g/maQAAOSwmvpcP8aE/s-l300.jpg',
        ],
        [
            'model' => 'Huawei P Smart Plus',
            'price' => 650,
            'photo' => 'https://i.ebayimg.com/images/g/v98AAOSwb1NclWiS/s-l300.jpg',
        ],
    ]
];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP lydes ir <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'years')); ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        .row {
            margin: 0 auto !important;
        }
    </style>
    <body>

        <section id="gallery">
            <div class="container">
                <div class="row ">
                    <?php foreach ($phones as $brand): ?>
                        <?php foreach ($brand as $phone): ?>
                            <div class="card m-4 col-sm-3" style="width: 14rem;">
                                <img src="<?php print $phone['photo']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php print $phone['price']; ?>$</h5>
                                    <p class="card-text"><?php print $phone['model']; ?></p>
                                    <a href="#" class="btn btn-primary">Buy</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>





        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>