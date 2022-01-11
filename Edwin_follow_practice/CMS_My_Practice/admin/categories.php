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
                <div class="col-xs-6">
                    <?php
                        if(isset($_POST['submit'])) {
                            
                            $cat_title = $_POST['cat_title'];
                            if($cat_title == "" ||  empty($cat_title)) {
                                    echo "This field should not be empty";
                            } else {
                                $query = "INSERT INTO categories(cat_title) ";
                                $query .= "VALUE('{$cat_title}') ";
                                $create_category_query = mysqli_query($connection, $query);

                                if(!$create_category_query) {
                                    die('QUERY FAILED' . mysqli_error($connection)); //kill function
                                }
                            }
                        }
                    ?>


                    <form action="" method="post">
                        <div class="form-group" >
                            <label for="cat-title">Add Category</label>
                            <input type="text" name="cat_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="form-group" >
                            <label for="cat-title">Add Category</label>
                            <input type="text" name="cat_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                        </div>
                    </form>
                    </div>
                    <div class="col-xs-6">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                               
                    <?php 
                    //FIND ALL CATEGORIES
                    $query = "SELECT * FROM categories";
                    $select_categories = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_categories)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        echo "<tr>";
                        echo "<td>{$cat_id}</td>";
                        echo "<td>{$cat_title}</td>";
                        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                        echo "</tr>";
                                                                    
                    }
                    ?>
                    <?php 
                    //DELETE QUERY
                    if(isset($_GET['delete'])) {
                        $the_cat_id = $_GET['delete'];
                        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                        $delete_query = mysqli_query($connection, $query);
                        header("Location: categories.php");
                    }


                    ?>
                            </tr>
                        </tbody>
                    </table>
                    </div>
              

               
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
</
<?php include "includes/admin_footer.php" ?>


 
