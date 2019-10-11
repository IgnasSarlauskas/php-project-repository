<?php

if (!isset($_COOKIE['user'])) {
    $user_id =  rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9);
    $user = [
        'user_id' => $user_id,
        'count_of_visits' => 1,
    ];
    $json_cookie_string = setcookie('user', json_encode($user), time() + 3600, '/');
}
if (isset($_COOKIE['user'])) {
    $cookie_array = json_decode($_COOKIE['user'], true);
    $cookie_array['count_of_visits'] ++;
    setcookie('user', json_encode($cookie_array), time() + 3600, '/');
    
}
//var_dump($cookie_array);
//var_dump($_COOKIE);

?>
<html>
    <body>
        <?php if (!empty($_COOKIE)):?>
            <?php foreach ($cookie_array as $idx =>  $value):?> 
                <h1><?php print $idx . ': ' . $value; ?></h1>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>




