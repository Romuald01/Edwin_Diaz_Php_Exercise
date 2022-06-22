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

<!-- widget start codes -->

<div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php


                        $query = "SELECT * FROM posts";
                        $select_post_query = mysqli_query($connection, $query);

                        $post_count = mysqli_num_rows($select_post_query);

                        echo  "<div class='huge'>{$post_count}</div>";


                        ?>

                        <div>posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">view details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <span class="clearfix"></span>
                </div>
            </a>
        </div>
    </div>
    
</div>
<div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comment fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php


                        $query = "SELECT * FROM comments";

                        $select_all_comments = mysqli_query($connection, $query);

                        $comment_count = mysqli_num_rows($select_all_comments);

                        echo "<div class='huge'>{$comment_count}</div>";


                        ?>
                     
                       
                        <div>comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">view details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <span class="clearfix"></span>
                </div>
            </a>
        </div>
    </div>
    
</div>

<div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php


                        $query = "SELECT * FROM users";
                        $select_all_user= mysqli_query($connection, $query);

                        $user_count = mysqli_num_rows($select_all_user);

                        echo "<div class='huge'>{$user_count}</div>";

                        ?>
                       
                        <div> users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">view details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <span class="clearfix"></span>
                </div>
            </a>
        </div>
    </div>
    
</div>


<div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php

                        $query = "SELECT * FROM categories";

                        $select_category_query = mysqli_query($connection, $query);

                        $category_count = mysqli_num_rows($select_category_query);

                        echo "<div class='huge'>{$category_count}</div>";


                        ?>
      
                        <div>categories</div>
                    </div>
                </div>
            </div>
            <a href="./categories.php">
                <div class="panel-footer">
                    <span class="pull-left">view details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <span class="clearfix"></span>
                </div>
            </a>
        </div>
    </div>
    
</div>

<!-- widget codes ends here -->


            </div>
        </div>
        <!-- /.row -->
        
<div class="row">
    
    <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Data', 'Count'],
               
              <?php
                $element_text = ['Active posts', 'Comments', 'Users', 'Categories'];
                $element_count = [$post_count, $comment_count, $user_count, $category_count,];

                for($i = 0;$i < 4; $i++){

                    echo "['{$element_text[$i]}'" . "," . "{$element_text[$i]}],";

                }

                ?>
            //   ['Posts', 1000],
             
            ]);
    
            var options = {
              chart: {
                title: '',
                subtitle: '',
              }
            };
    
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
    
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        </script>
        <div id="columnchart_material" style="width: 'auto'; 800px; height: 500px;"></div>
    
    </div>
    
     
    

    </div>
    <!-- /.container-fluid -->

</div>
</div>
<?php include "includes/admin_footer.php" ?>
