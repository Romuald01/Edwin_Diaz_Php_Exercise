<?php include "includes/admin_header.php" ?>

<div id="wrapper">
    <?php include "includes/admin_navigation.php" ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                         <h1 class="page-header">
                            Welcome to Admin
                            <small>Auhtor</small>
       
                        </h1>
                        <?php
                            // include "includes/view_all_posts.php";
                            // checking for get request
                            if(isset($_GET['source'])) {
                          
                                $source = $_GET['source'] ;

                            } else {
                                $source = ''; 
                            }

                            switch($source) {
                                case 'add_post';
                                include "includes/add_post.php";
                                break;

                                case '100';
                                echo "Nice 100";
                                break;

                                case '200';
                                echo "Nice 200";
                                break;
                                default:
                                
                                include "includes/view_all_posts.php";

                                break;
                            }

                        ?>
                       
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
</div>
<?php include "includes/admin_footer.php" ?>