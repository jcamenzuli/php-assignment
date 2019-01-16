<?php
    include 'libraries/url.php';
    include 'libraries/database.php';

    $id = (array_key_exists('id', $_COOKIE)) ? $_COOKIE['id'] : FALSE;
    $auth = (array_key_exists('auth_code', $_COOKIE)) ? $_COOKIE['auth_code'] : FALSE;

    $keys = array_keys($_COOKIE);
    foreach ($keys as $key)
    {
        setcookie($key, '', time() - 3600);
    }

    if ($id !== FALSE)
    {
        clear_login_data($id, $auth_code);
    }

    redirect('login');
?>
