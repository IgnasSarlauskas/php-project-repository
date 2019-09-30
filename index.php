<?php

$number_pow = 0;

function square($x) {
    return $_POST['number'] ** 2;
}

if (isset($_POST['submit'])) {
    $number_pow = square($_POST['number']);
} 

var_dump($_POST);

?>

<html>
    <body>
        <form method = "POST">
            Pakelti kvadratu: <input name="number" type = "number" required/>
            <input name="submit" type ="submit"/>
        </form>
        <h2>Atsakymas : <?php print $number_pow; ?></h2>
    </body>
</html>
