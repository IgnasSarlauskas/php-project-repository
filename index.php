<?php

$answer = 0;

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
    </body>
</html>
