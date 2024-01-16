<?php session_start(); ?>
<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>

<?php
    if(isset($_POST['add_rating'])){ 
             
        $user_id = $_SESSION['user_id']; 
        $content_id = $_GET['id'];
        $rating = $_POST['rating'];
        $review = $_POST['review'];

        $sql_Check = "SELECT * FROM rating where content_id = $content_id AND user_id = $user_id";
        $result_check = mysqli_query($conn, $sql_Check);

        if (mysqli_num_rows($result_check) == 1) { 
            header('location:user_movie.php?message=You have already rated this');
            
        }else{

            $insertRating = "INSERT INTO rating (content_id, user_id, rating, review) 
                VALUES ('$content_id', '$user_id', '$rating' , '$review')"; 
            
            if(mysqli_query($conn, $insertRating)){
                $rating_id = mysqli_insert_id($conn);
                $insertRateQuery = "INSERT INTO rate (rating_id, content_id, user_id) 
                VALUES ('$rating_id', '$content_id', '$user_id')";

                if (mysqli_query($conn, $insertRateQuery)){
                    header('location:user_movie.php?message=Ratting added');
                }

            }
        }
        // }


    }
?>

<?php include("../footer.php"); ?>

