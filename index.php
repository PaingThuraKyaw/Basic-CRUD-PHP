<?php
require_once "./template/header.php";
?>




<div class=" container" >
    <div class=" row">
        <div class=" col-12">
            <?php
            
            $sql="Select * from testing";
            $total = "Select sum(money) As total from testing";
            $query = mysqli_query($conn, $sql);
            $totalQuery = mysqli_query($conn, $total);
            
            ?>

            <table class=" table-bordered table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>money</th>
                        <th>create_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($query)) : ?>

                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["name"] ?></td>
                            <td><?= $row["money"] ?></td>
                            <td><?= dateTime($row["create_at"]) ?> 
                            <?= dateTime($row["create_at"] , "h : i : s") ?>
                        </td>
                        </tr>


                        <?php endwhile ; ?>
                </tbody>
                <tfoot>
                    <th>
                        <td>Total Money</td>
                        <td colspan="2"><?= mysqli_fetch_assoc($totalQuery)["total"] ?></td>
                    </th>
                </tfoot>
            </table>

        </div>
    </div>
</div>














<?php 
require_once "./template/footer.php";
?>



