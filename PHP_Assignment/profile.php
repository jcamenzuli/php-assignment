<?php
    include 'libraries/form.php';
    include 'libraries/database.php';
    include 'template/header.php';

    $id = (isset($_GET['id'])) ? $_GET['id'] : $_COOKIE['id'];
    $user = get_user($id);
?>
    <div id="profile" class="container mt-3">
        <div class="card">
            <div class="card-body">
                <img class="profilephoto" width="300px" src="imgs/profile.jpg" alt="profile photo">
            </div>
            <div class="name">
                <div class="row">
                    <h4 class="headerProfileName mb-3"> <?php echo "{$user['user-name']} {$user['user-surname']}" ?></h4>
                </div>
                    <hr>
                    <center class="about">About Me</center>
            </div>
        </div>
    </div>
    


<?php
    include 'template/footer.php'
?>
