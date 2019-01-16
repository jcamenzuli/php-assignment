<?php
    include 'libraries/form.php';
    include 'libraries/database.php';
    include 'libraries/login-check.php';

    if ($_SERVER['REQUEST_METHOD'] !=='POST') {
        exit('You have no access to this page.');
    }

    set_formdata($_POST);
    $post      = $_POST['add-post'];


    $has_errors = FALSE;

    if(empty($post)){
        $has_errors = set_error('add-post', 'You cant share an empty post.');
    }

    $check = add_post($post);
    if(!$check){
        exit('The query was unsuccessful.');
    }

    clear_formdata();
    redirect('home');
?>
