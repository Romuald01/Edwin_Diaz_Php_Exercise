<?php include "includes/admin_header.php" ?>

<div id="wrapper">
    <?php  if($connection) echo "connected"?>
<?php include "includes/admin_navigation.php" ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                
                <h1 class="page-header">
                    Welcome to Admin
                    <!-- this is how we can know  who the user is, session is helpful -->
                    <small><?php echo $_SESSION['username']; ?></small>
                </h1>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
</
<?php include "includes/admin_footer.php" ?>


 
