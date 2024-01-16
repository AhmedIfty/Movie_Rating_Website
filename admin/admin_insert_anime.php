<?php
include 'db_connect.php';

if(isset($_POST['add_students'])){
    //echo 'yesss';
    $title = $_POST['title'];
    $year = $_POST['year_r'];
    //$duration = $_POST['duration'];
    $typee = $_POST['type'];
    $season = $_POST['season'];
    $trailer = $_POST['trailer'];

    // if($title == "" || empty($title) ){
    //     header('location:admin_movie.php?message=Ooops! forget the Title?');
    // }
    
    // // year and duration field not working.
    // if($year == "" || empty($year) ){
    //     header('location:admin_movie.php?message=Ooops! forget the Releasing Year?');
    // }
    
    // elseif($duration == "" || empty($duration) ){
    //     header('location:admin_movie.php?message=Ooops! forget the Duration?');
    // }

    if(($title == "" || empty($title)) || ($year == "" || empty($year)) || ($season == "" || empty($season)) || ($typee == "" || empty($typee))){
        header('location: admin_anime.php?message=Any of the field is empty!');
    }


    else{

        $query = "insert into `content` (`title` , `year_released`, `type`, `seasons`, `trailer`) values ('$title', '$year', '$typee', '$season', '$trailer')";

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
            
            header('location:admin_anime.php?insert_msg= Your data has been added successfully');
        }

    }
}
?>