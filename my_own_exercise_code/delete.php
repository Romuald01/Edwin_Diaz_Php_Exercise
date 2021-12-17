<?php include "db.php"; ?>
<?php include "my_function.php"; ?>

<?php deleteStudentRows(); ?>


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
            <h1 class="text-center">Deleting student data</h1>
            <form action="" method="post">
                <input type="text" name="matric" placeholder="enter name">
                <br>
                <br>
                <input type="password" name="password" placeholder="enter password">
                <br><br>
                <select name="id" id="" style="padding:10px">
                <?php
                    showAllOptions();
                ?>
                    </select>
                <br>
                <br>
                <input type="submit" name="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
</body>
</html>
