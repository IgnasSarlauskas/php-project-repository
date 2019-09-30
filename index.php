<?php

$answer = 0;
$image = 'http://www.jackieleonards.ie/wp-content/uploads/2015/03/banana-300x300.png';

function add_one($x) {
    return $_POST['submit'] + 1;
}

if (isset($_POST['submit'])) {
    $answer = add_one($_POST['submit']);
}

var_dump($_POST);

?>
<html>
    <body>
        <form method = "POST">
            <input name="submit" type ="submit" value="<?php print $answer; ?>"/>
        </form>
        <?php for ($i = 0; $i < $answer; $i ++): ?>
            <img src="<?php print $image; ?>">
        <?php endfor; ?>
    </body>
</html>
