   <?php 
include "config.php";

/* This query for delete item from table */

$delete_id = $_GET['id'];

$delete_query  = "DELETE FROM manu";

if ($conn->query($delete_query) === TRUE) {
    echo "<script>window.open('mange_manu.php?deleted=Post deleted','_self')</script>";
} else {
    echo "Error deleting record: " . $$conn->error;
}
?>
