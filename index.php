<?php
require_once "./template/header.php";
?>




<div class=" container" >
    <div class=" row">
    <?php

    print_r($_SESSION);
            
            $sql="Select * from testing";
            $total = "Select sum(money) As total from testing";
            if(!empty($_GET["q"])){
                $q = $_GET["q"];
                $sql .= " WHERE name LIKE '%$q%'";
            }
            $query = mysqli_query($conn, $sql);
            $totalQuery = mysqli_query($conn, $total);
            
            ?>
        <div class="  mt-5 col-12">
            <div class=" d-flex mb-3 align-items-center justify-content-between">
                <h3>List</h3>
                <form method="get" class=" d-flex align-items-center ">
                    <input type="text" name="q" class=" form-control">
                    <button class=" btn btn-primary">Search</button>
                </form>
            </div>
           

            <table class=" table-bordered table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>money</th>
                        <th>control</th>
                        <th>create_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($query)) : ?>

                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["name"] ?></td>
                            <td><?= $row["money"] ?></td>
                            <td class=" d-flex align-items-center gap-2">
                                <a href="/update.php?id=<?= $row["id"] ?>" class="btn btn-info">Update</a>
                             <form action="/delete.php" method="post">
                                <input type="hidden" name="id" value="<?= $row["id"] ?>" >
                             <button class=" btn btn-danger">Delete</button>
                             </form>
                            </td>
                            <td><?= dateTime($row["create_at"]) ?> 
                            <?= dateTime($row["create_at"] , "h : i : s") ?>
                        </td>
                        </tr>


                        <?php endwhile ; ?>
                </tbody>
                <tfoot>
                    <th>
                        <td>Total Money</td>
                        <td colspan="3"><?= mysqli_fetch_assoc($totalQuery)["total"] ?></td>
                    </th>
                </tfoot>
            </table>

        </div>
    </div>
</div>














<?php 
require_once "./template/footer.php";
?>



