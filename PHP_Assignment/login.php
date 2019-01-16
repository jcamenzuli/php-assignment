<?php
    include 'libraries/form.php';
    include 'libraries/database.php';
    include 'libraries/url.php';

    $formdata = get_formdata();

    if (is_logged())
       {
           redirect('home');
       }
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>SBUD</title>

        <!-- The Bootstrap CSS file -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.min.css">

        <!-- FontAwesome Icons -->
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
    </head>
    <body id="login">
        <img src="imgs/logo.png" class="logo" alt="logo">
        <form class="container-fluid px-4" action="login-process.php" method="post">
            <div class="col-12 col-md-6 mx-auto py-3">
                <div class="card">
                    <div class="card-body">
<?php if (has_error($formdata, 'user-email')): ?>
                        <div class="alert-danger mb-3 p-3">
                            <?php echo get_error($formdata, 'user-email'); ?>
                        </div>
<?php endif; ?>
                        <input type="email" name="user-email" class="form-control mb-3" placeholder="Email"
                            value="<?php echo get_value($formdata, 'user-email'); ?>">

<?php if (has_error($formdata, 'user-password')): ?>
                        <div class="alert-danger mb-3 p-3">
                            <?php echo get_error($formdata, 'user-password'); ?>
                        </div>
<?php endif; ?>
                        <input type="password" name="user-password" class="form-control mb-3" placeholder="Password">
                    </div>

                    <div class=" card card-footer text-center">
                        <button type="submit" class="btn btn-clear">Login</button>
                        <small class="d-block mt-3 text-white">
                            Don't have an account? <a href="register.php">Register here</a>
                        </small>
                    </div>
                </div>
            </div>
        </form>

    </body>
</html>
