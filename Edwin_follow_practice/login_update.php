<?php include "db.php";?>
<?php include "functions.php";?>


 <?php updateTable(); ?>

<?php include "includes/header.php" ?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                            showAllData();
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" class="form-control" name="submit" value="Update">
            </form>
        </div>
 
<?php include "includes/footer.php" ?>