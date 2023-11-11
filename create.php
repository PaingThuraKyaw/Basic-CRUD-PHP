<?php require_once ("./template/header.php"); ?>

<div class=" container">
    <div class=" row align-items-center justify-content-center mt-5">
        <div class=" col-4">
            <div class=" px-4 py-3 my-4 border rounded">
                <h3>Create List</h3>


                <?php  

                if($_SERVER["REQUEST_METHOD"] === "POST"){
                    $name = $_POST["name"];
                    $money = $_POST["money"];
                    $sql = "INSERT INTO testing (name, money)  VALUES ('$name',$money)";
                    
                    if(mysqli_query($conn, $sql)){
                        header("location: index.php");
                    }

                }


?>


                <form action="" method="post" class="">
                    <div class=" mb-3">
                        <label for="" class=" form-label">Name</label>
                        <input type="text" name="name" class=" form-control" required>
                    </div>
                    <div class=" mb-3">
                        <label for="" class=" form-label">Money</label>
                        <input type="text" name="money" class=" form-control" required>
                    </div>
<button class=" px-5 btn btn-primary mt-3" type="submit">
    create
</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require_once ("./template/footer.php"); ?>