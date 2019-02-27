
<?php
require('functions.php');
?>
<!doctype html>
<html lang="en">
<!--HEADER start-->
<?php
require('mainStructure/header.php');
?>
<!--HEADER END-->
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!--            FORM START-->
            <?php
            require('mainStructure/form.php');
            ?>
            <!--            FORM END-->
            <hr>
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                formData();
            }
            ?>
        </div>
    </div>
</div>
<!--FOOTER START-->
<?php
require('mainStructure/footer.php');
?>
<!--FOOTER END-->
</body>
</html>