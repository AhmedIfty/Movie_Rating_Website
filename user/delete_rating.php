<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>

<?php
    if(isset($_GET['id'])){
        

        $rating_id = $_GET['id'];
        $delete_query = "DELETE FROM rating WHERE rating_id = '$rating_id' " ;
        $result_check = mysqli_query($conn, $delete_query);

        if(!$result_check){
            die("Query Failed".mysqli_error());            
        }else{
            header('location:show_rating.php?message= Deleted successfully');
        }

    }


?>

<?php include("../footer.php"); ?>