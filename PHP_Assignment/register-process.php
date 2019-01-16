<?php
    include 'libraries/form.php';
    include 'libraries/url.php';
    include 'libraries/database.php';

    // 1. check that the form has been sent.
    if ($_SERVER['REQUEST_METHOD'] !== 'POST')
    {
        exit('You have no access to this page.');
    }

    // 2. store the form data in case of any errors.
	set_formdata($_POST);

    // 3. retrieve the variables from $_POST
    $email      = $_POST['user-email'];
    $password   = $_POST['user-password'];
    $name       = $_POST['user-name'];

    // we'll use a boolean to determine if we have errors on the page.
    $has_errors = FALSE;

    // 4. check the inputs that are required.
    if (empty($email))
    {
    	$has_errors = set_error('user-email', 'The email field is required.');
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $has_errors = set_error('user-email', 'Please enter a valid email address.');
    }
    else if (email_exists($email))
    {
        $has_errors = set_error('user-email', 'This email address is already registered.');
    }

    if (strlen($password) < 8)
    {
        $has_errors = set_error('user-password', 'Please enter a password that is at least 8 characters long.');
    }

    if (empty($name))
    {
    	$has_errors = set_error('user-name', 'The name field is required.');
    }

    list($name, $surname) = explode(' ', $name);

    // 5. if there are errors, we should go back and show them.
    if ($has_errors)
    {
        redirect('register');
    }

    // 6. When keeping user data, information should be split to make
    // reading faster.

    $salt = random_code();
    $id = register_login_data($email, $password, $salt);
    if (!$id)
    {
        exit("The query was unsuccessful.");
    }

    $check = register_user_details($id, $name, $surname);
    if (!$check)
    {
        exit("User not fully registered.");
    }

    // 7. Everything worked, go back to the list.
    clear_formdata();
    redirect('login');
?>
