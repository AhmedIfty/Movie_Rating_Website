<?php
include 'db_connect.php';

if(isset($_POST['add_students'])){
    //echo 'yesss';
    $title = $_POST['title'];
    $year = $_POST['year_r'];
    $duration = $_POST['duration'];
    $typee = $_POST['type'];
    $season = $_POST['season'];
    $trailer = $_POST['trailer'];


    if(($title == "" || empty($title)) || ($year == "" || empty($year)) || ($duration == "" || empty($duration)) || ($typee == "" || empty($typee)) || ($trailer == "" || empty($trailer))){
        header('location: admin_movie.php?message=Any of the field is empty!');
    }


    else{

        $query = "insert into `content` (`title` , `year_released`, `duration`, `type`, `trailer`) 
            values ('$title', '$year', '$duration', '$typee', '$trailer')";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed".mysqli_error());
        }

        else{
            $genre_str = $_POST['genre_str'];
            $genre = explode(',',$genre_str);
            $content_id = mysqli_insert_id($conn);

            for ($i=0; $i<sizeof($genre); $i++){
                $genre_query = "insert into `genre` (content_id, genre_name) values ('$content_id','$genre[$i]')";
                mysqli_query($conn, $genre_query);
            }
            
            header('location:admin_movie.php?insert_msg= Your data has been added successfully');
        }

    }
}
?>