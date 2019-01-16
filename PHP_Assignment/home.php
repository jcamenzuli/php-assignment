<?php
    include 'libraries/form.php';
    include 'libraries/database.php';
    include 'template/header.php';


    $formdata = get_formdata();
    $post = get_post();

?>
        <div id="home" class="container">
            <div class="row">
                <div class="col-12">
                    <form class="" action="add-post-process.php" method="post">
                       <div class="share-post mt-3">
                           <div class="card">
                               <div class="card-body">
                    <?php if (has_error($formdata, 'add-post')): ?>
                                   <div class="alert-danger mt-3 p-3">
                                       <?php echo get_error($formdata, 'add-post'); ?>
                                   </div>
                    <?php endif; ?>
                                   <textarea name="add-post" rows="8" placeholder="What's on your mind?" class="form-control mb-3"><?php echo get_value($formdata, 'add-post'); ?></textarea>
                                   <button type="submit" class="btn btn-clear">Post</button>
                               </div>
                           </div>
                       </div>
                    </form>

                <?php  while($row = mysqli_fetch_assoc($post)):?>
                    <div class="card mt-3">
                     <!-- Here whatever the user posts will be shown -->
                         <div class="card-body">
                            <div class="name">
                                 <p><?php echo "{$row['name']} {$row['surname']}";?></p>
                            </div>
                            <div class="date">
                                <p><?php echo date('d M Y, H:i', $row ['date']);?></p>
                            </div>
                            <hr>
                            <div class="feed">
                                <p><?php echo $row['content'];?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
                </div>
            </div>
        </div>

<?php
    include 'template/footer.php'
?>
