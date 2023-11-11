<?php 




require_once "./core/connection.php";
require_once "./core/functional.php";

// echo "<pre>";
// print_r($_SERVER);

if($_SERVER["REQUEST_METHOD"] === "POST" ){
    $id = $_POST["id"];
    echo $id;
    $sql = "DELETE FROM testing WHERE id = $id";
     
    if(mysqli_query($conn, $sql)){
        header("LOCATION: index.php");
    }
}
















?>

