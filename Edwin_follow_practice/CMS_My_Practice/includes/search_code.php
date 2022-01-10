
<?php

if(isset($_POST['submit'])) {
    $search = $_POST['search'];
    // echo "this is my search " . $search; 
}
  

$query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
$search_query = mysqli_query($connection,$query);

if(!$search_query){
        die("query failed". mysqli_error($connection));
}

$count = mysqli_num_rows($search_query); 
if($count == 0) {
    echo "<h1>NO RESULT</h1>";
}else {
    echo "some result";
}


 ?>


