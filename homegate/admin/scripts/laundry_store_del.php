
<?php
include("config.php");

$item_num = $_GET['item_num'];

$sql= mysqli_query($mysqli, "DELETE FROM laundary_storage WHERE item_no='$item_num'");

        if($sql){

            header("Location: ../view-laundry-store.php?msg=Store Item Deleted!");
            
        }else{
            
            header("Location: ../view-laundry-store.php?msg=Something was wrong! Please check!");
            
        }

    





?>