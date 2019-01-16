<?php
    include '../libraries/http.php';
    include '../libraries/database.php';

    // 1. check that the form has been sent.
    ($_SERVER['REQUEST_METHOD'] === 'POST') or error();

    // 2. store the form data in case of any errors.
	get_input_stream($data);

    // 3. retrieve the variables from $_POST
    $email      = $data['email'];
    $password   = $data['password'];
    $name       = $data['name'];

    // 4. check the inputs that are required.
    if (empty($email))
    {
    	error('The email field is required.');
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        error('Please enter a valid email address.');
    }

    else if (email_exists($email))
    {
        error('This email address is already registered.');
    }

    if (strlen($password) < 8)
    {
        error('Please enter a password that is at least 8 characters long.');
    }

    if (empty($name))
    {
    	error('The name field is required.');
    }

    list($name, $surname) = explode(' ', $name);

    // 6. When keeping user data, information should be split to make
    // reading faster.

    $salt = random_code();
    $id = register_login_data($email, $password, $salt);
    if (!$id)
    {
        error('The query was unsuccessful.');
    }

    $check = register_user_details($id, $name, $surname);
    if (!$check)
    {
        error('User not fully registered.');
    }
    // 7. Everything worked, go back to the list.
    success();
?>
