<?php

$duchai = [];

if (isset($_POST['submit'])) {
    foreach ($_POST as $name => $value) {
        $duchai[$name] = $value;
    }
    if ($duchai['submit']) {
        unset($duchai['submit']);
    }

    $stamp_image = 'https://cttgraphics.com/wp-content/uploads/2018/06/71nOdJPiZkL._SL1000_.jpg';
    $signature_image = 'https://upload.wikimedia.org/wikipedia/commons/8/80/Joachim_Gaucks_signature.svg';

    $name = $duchai['name'];
    $surname = $duchai['surname'];
    $age = $duchai['age'];
    $level = $duchai['level-list'];
    $date = date("l jS \of F Y ");

    $h2_text = ' Recognition sertificate for being a Duchas';
    $h4_text = "This sertificate is presented to $name $surname in Recognition of Valuable Contribution for Duchai Community"
            . " and also being Duchas";
    $p_text = "Current level of competency: $level. Achieved at beign $age years old";
}

?>
<html>
    <head>
        <title>Ducho anketa</title>
    </head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        form {
            width: 50%;
            height: 400px;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        input[type=text], input[type=number], select {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        input[type=submit] {
            background-color: black;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        input[type=submit]:hover {
            opacity: 1;
        }

        img {
            margin-top: 30px;
            display: block;
            height: 250px;
            width: 250px;
            margin: 0 auto;
        }

        h2{
            margin-bottom: 50px;
            margin-top: 40px
        }

        h4{
            margin-bottom: 50px;
        }

        p {
            margin-bottom: 50px;
        }

        .signature-container {
            display: flex;
            flex-direction: column;
        }

    </style>
    <body>

        <?php if (isset($_POST['submit'])): ?>
            <h2 class="text-center"><?php print $h2_text; ?></h2>
            <img src="<?php print $stamp_image ?>">
            <h4 class="text-center"><?php print $h4_text; ?></h4>
            <p class="text-center"><?php print $p_text; ?></p>
            <div class="text-center"><?php print $date; ?></div>
            <img src="<?php print $signature_image ?>">
        <?php else: ?>
            <h1 class="text-center">Duchamoro anketa</h1>
            <form method = "POST">
                <input type="text" name="name" placeholder="Jusu vardas" required>
                <input type="text" name="surname" placeholder="Jusu pavarde" required>
                <input type="number" name="age" placeholder="Jusu amzius">
                <select name="level-list">
                    <option value="Pradedantysis" selected>Pradedantysis</option>
                    <option value="Pazenges">Pazenges</option>
                    <option value="Profesionalas">Profesionalas</option>
                </select>
                <input name="submit" type="submit" />
            </form>
        <?php endif; ?>
    </body>
</html>
