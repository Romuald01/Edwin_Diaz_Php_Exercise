<?php include "db.php";?>
<?php include "functions.php";?>

<?php
createRows();

?>
<?php include "includes/header.php" ?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input type="submit" class="btn btn-primary" class="form control" name="submit" value="CREATE">
            </form>
        </div>
    <?php include "includes/footer.php" ?>