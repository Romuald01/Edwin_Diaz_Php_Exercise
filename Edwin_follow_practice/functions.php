<?php 
include "db.php";


function createRows() {
    global $connection;
    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);

//          ENCRYPTION
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        
        $hashF_and_salt = $hashFormat . $salt;

        $password = crypt($password, $hashF_and_salt);

        // function to send all this mysql to and the query will be written in the qoute 

        $query = "INSERT INTO users(username,password) VALUES('$username','$password')"; 
        $result = mysqli_query($connection, $query);
        //two value the database connection and the query that will insert the values into the database
        if(!$result) {
        die("query failed" . mysqli_error());
        }else{ 
            echo "Record Created";
        }
    }

}




function readRows() {
    global $connection;
    // function to send all this mysql to and the query will be written in the qoute 
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    //two value the database connection and the query that will insert the values into the database
        if(!$result) {
            die("query failed" . mysqli_error());
        }
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        
        }
}


function showAllData() {

    // function to send all this mysql to and the query will be written in the qoute 
    global $connection; 
    // query to update user table data
    $query = "SELECT * FROM users";

    //two value the database connection and the query that will insert the values into the database
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("query failed" . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }


}


function updateTable(){
    if(isset($_POST['submit'])) {
        global $connection; 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id']; 

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED . mysqli_error($connection)");  //command that will stop all execution after this
        } else{
            echo "Record Updated";
        }
    }
}

function deleteRows(){
    if(isset($_POST['submit'])){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users  "; 
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED" . mysqli_error($connection));  //command that will stop all execution after this
        }else{
            echo "Record Delete";
        }
    }

}



?>