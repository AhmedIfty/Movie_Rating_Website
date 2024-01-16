<?php include("admin_header.php"); ?>
<?php include("db_connect.php"); ?>
<style>
    .body{
    background-image: url(./image/img\ 1.jpeg);
    }
</style>
    <?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
        
                
            $view_query = "SELECT * FROM `content` WHERE `content_id`='$id'";                
            $result = mysqli_query($conn, $view_query);

            if (!$result){
                die("Query Failed".mysqli_error());
            }
            else{
                $row=mysqli_fetch_assoc($result);

            
            }
                
        }
    ?>

    <?php

        if(isset($_POST['update_movie'])){

            if(isset($_GET['id_new'])){
                $id_new = $_GET['id_new'];
            }
            
            $title = $_POST['title'];
            $year = $_POST['year_r'];
            $duration = $_POST['duration'];

            $query = "UPDATE `content` set `title`='$title', `year_released`= '$year', `duration`='$duration' 
                WHERE `content_id`='$id_new'";
            $result = mysqli_query($conn, $query);

            if (!$result){
                die("query Failed".mysqli_error());
            }
            else{
                header('location:admin_movie.php?update_msg=Data updated successfully');
            }

        }
    ?>

<body class="body">
<div class="container">
        <h2 class="name">Update</h2><br>

        <form action="admin_update_movie.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>">
        </div>
        <div class="form-group">
            <label for="year_r">Year Released</label>
            <input type="text" name="year_r" class="form-control" value="<?php echo $row['year_released'] ?>">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" name="duration" class="form-control" value="<?php echo $row['duration'] ?>">
        </div>

        <input type="submit" class="btn btn-success" name="update_movie" value="UPDATE">

        </form>

    </div>
</body>

<?php include("footer.php"); ?>