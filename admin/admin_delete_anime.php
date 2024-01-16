<?php include('db_connect.php'); ?>


<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];



    $query = "delete from `content` where `content_id` ='$id'";
    $result = mysqli_query($conn, $query);



        if(!$result){
            die("Query Failed".mysqli_error());
        }

        else{
            header('location:admin_anime.php?delete_msg= You have deleted the Anime.');
        }




}
?>