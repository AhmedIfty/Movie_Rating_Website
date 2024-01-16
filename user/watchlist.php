<?php session_start(); ?>
<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?> 

<?php

$user_id = $_SESSION['user_id']; 
$content_id = $_GET['id'];

$sql_Check = "SELECT * FROM watch_list where content_id = $content_id AND user_id = $user_id";
$result_check = mysqli_query($conn, $sql_Check);

if (mysqli_num_rows($result_check) == 1) { 
    header('location:user_movie.php?message=Already exists in watchlist');
    
}else{

    $insertWatchlist = "INSERT INTO watch_list (content_id, user_id) VALUES ('$content_id', '$user_id')"; 
    
    if(mysqli_query($conn, $insertWatchlist)){
        $listId = mysqli_insert_id($conn);
        $insertAddedToQuery = "INSERT INTO added_to (content_id, user_id, list_id) 
        VALUES ('$content_id', '$user_id', '$listId')";

        if (mysqli_query($conn, $insertAddedToQuery)){
            header('location:user_movie.php?message=Added to watchlist');
        }

    }
}
// }

?>

<?php include("../footer.php"); ?>

