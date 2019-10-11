<?php

if (!isset($_COOKIE['user'])) {
    $user_id =  rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9);
    $user = [
        'user_id' => $user_id,
        'count_of_visits' => 1,
    ];
    $json_cookie_string = setcookie('user', json_encode($user), time() + 3600, '/');
} else {
    $user = json_decode($_COOKIE['user'], true);
    $user['count_of_visits'] ++;
    setcookie('user', json_encode($user), time() + 3600, '/');  
}
//var_dump($cookie_array);
//var_dump($_COOKIE);

?>
<html>
    <body>
        <h1>User with id: <?php print $user['user_id']; ?></h1>
        <h2>Number of visits: <?php print $user['count_of_visits']; ?></h2>          
    </body>
</html>




