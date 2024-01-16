<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>

<?php
    if(isset($_GET['id'])){
        

        $list_id = $_GET['id'];
        $delete_query = "DELETE FROM watch_list WHERE list_id = '$list_id' " ;
        $result_check = mysqli_query($conn, $delete_query);

        if(!$result_check){
            die("Query Failed".mysqli_error());            
        }else{
            header('location:show_watchlist.php?message= Deleted successfully');
        }

    }


?>

<?php include("../footer.php"); ?>