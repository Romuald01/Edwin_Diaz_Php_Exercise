<?php include "db.php"; ?>
<?php include "my_function.php"; ?>


<?php updateStudentRecord(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>updating practical</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h1 class="text-center">Update student data</h1>
            <form action="" method="post">
                <input type="text" name="matric" placeholder="enter updating name">
                <br>
                <br>
                <input type="password" name="password" placeholder="enter updating password">
                <br><br>
                <select name="id" id="" style="padding:10px">
                <?php
                    showAllOptions();
                ?>
                    </select>
                <br>
                <br>
                <input type="submit" name="submit" class="btn btn-primary" value="Update">
            </form>
        </div>
    </div>
</body>
</html>
