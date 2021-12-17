<?php
include "db.php";

function createStudentRecord() {
        
    if(isset($_POST['submit'])) {
        $matric_number = $_POST['matric'];
        $password = $_POST['password'];

        $query = "INSERT INTO student(matric,password) VALUES ('$matric_number','$password')";
        $result = mysqli_query($connection, $query);
        if($result) {
            echo "registered successfully" . '<br>';
        }else{
            echo "you are not a student yet";
        }
    }

}

function readStudentRecord() {
    $readData = "SELECT * FROM student";
    $output = mysqli_query($connection, $readData);
    while($row = mysqli_fetch_assoc($output)){
            print_r($row);
    }


}


function updateStudentRecord(){
    if(isset($_POST['submit'])) {
        global $connection;
        $matric = $_POST['matric'];
        $password = $_POST['password'];
        $id = $_POST['id'];



        $query = "UPDATE student SET ";
        $query .= "matric = '$matric', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if($result) {
            echo "Record Updated Successful";
        }else{
            echo "Record Updating failed";
        }
    }

}

function showAllOptions(){

    global $connection;

    $query = "SELECT * FROM student";
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo "option are not fetched from database" . mysqli_error($connection);
    }

    while($row = mysqli_fetch_assoc($result)){
        $id =  $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function deleteStudentRows() {
    if(isset($_POST['submit'])) {
        $matric = $_POST['matric'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        $query = "DELETE FROM student WHERE id = $id";
    
        $result = mysqli_query($connection, $query);
        if($result) {
            echo "Record Deleted Successful";
        }else{
            echo "Record Deleting failed";
        }
    }
    
}

    ?>