<?php require_once ("./template/header.php"); ?>

<div class=" container">
    <div class=" row align-items-center justify-content-center mt-5">
        <div class=" col-4">
            <div class=" px-4 py-3 my-4 border rounded">
                <h3>Update List</h3>


                <?php  
           if(isset($_GET["id"])){
            $id = $_GET["id"];
            $sql = "SELECT * FROM testing WHERE id = $id";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);
            
           }           
?>


                <form action="/update-info.php" method="post" class="">
                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                    <div class=" mb-3">
                        <label for="" class=" form-label">Name</label>
                        <input type="text" name="name" value="<?= $row["name"] ?>" class=" form-control" required>
                    </div>
                    <div class=" mb-3">
                        <label for="" class=" form-label">Money</label>
                        <input type="text" name="money" value="<?= $row["money"] ?>" class=" form-control" required>
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