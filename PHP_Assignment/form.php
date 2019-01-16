<?php
    include 'libraries/form.php';
    include 'libraries/database.php';
    include 'template/header.php';
?>
<div id="form" class="container mt-3">
    <div class="form">
        <div class="card">
            <div class="card-body">
        <label for="exampleFormControlInput1">Choose Subject</label>
        <div class="row mt-3">
                <div class="form-check ml-3 mr-3">
                     <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                     <label class="form-check-label" for="gridRadios1">
                       Absentism
                     </label>
                </div>
                <div class="form-check mr-3">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                     <label class="form-check-label" for="gridRadios1">
                       Report
                     </label>
               </div>
               <div class="form-check mr-3">
                     <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                     <label class="form-check-label" for="gridRadios1">
                       Extension
                     </label>
               </div>
               <div class="form-check mr-3">
                     <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                     <label class="form-check-label" for="gridRadios1">
                       Other
                     </label>
               </div>
        </div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write here...">
                </div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlInput1">To</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email...">
                </div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlInput1">Message</label>
                    <textarea type="text" class="form-control" id="exampleFormControlInput1" placeholder="Write message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-clear">Send Form</button>

            </div>
        </div>
    </div>
</div>

    </body>
</html>

<?php
    include 'template/footer.php';
?>
