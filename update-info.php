<?php 

require_once "./core/connection.php";
require_once "./core/functional.php";


if($_SERVER["REQUEST_METHOD" ] === "POST") {

    $name = $_POST["name"];
    $money = $_POST["money"];
    $id = $_POST["id"];
   
    $sql = "UPDATE testing SET name = '$name ', money = $money WHERE id = $id";
    if(mysqli_query($conn, $sql)) {
        header("LOCATION: index.php");
    }
   
}

?>