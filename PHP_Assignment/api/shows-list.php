<?php
    include '../libraries/database.php';
    include '../libraries/http.php';

    ($_SERVER['REQUEST_METHOD'] === 'GET') or error();
    chech_login_auth() or error("You have no permission to be here.");

    $shows = get_all_shows();
    success('shows', mysqli_fetch_all($shows, MYSQLI_ASSOC));
?>
