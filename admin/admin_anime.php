<?php include("admin_header.php"); ?>
<?php include("navbar_admin.php"); ?>
<?php include("../db_connect.php"); ?>
<?php include("admin_modal_anime.php"); ?>
<style>
    .body{
    background-image: url(./image/img\ 1.jpeg);
    }
</style>
<body class="body">
<div class="container">
    <h2 class="name">Anime</h2><br>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary" type="button" 
    data-bs-toggle="modal" data-bs-target="#exampleModal">Add Anime</button>
    </div>

    <h5></h5>
    
    <table class="table table-hover table-bordered table-striped">
        <thead class="table-dark">
            <tr>
            <th>Title </th>
                <th>Year Released </th>
                <!-- <th>Duration </th> --> <!-- not needed in case of series and anime -->
                <th>Seasons </th>
                <th>Genre</th>
                <th>Rating </th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
                
                $view_query = "SELECT * FROM content WHERE type='anime'";                
                $result = mysqli_query($conn, $view_query);

                if (!$result){
                    die("Query Failed".mysqli_error());
                }
                else{
                    while($row=mysqli_fetch_assoc($result)){
                        ?>

                    <tr>
                        
                        <td><a href="details_page.php?id=<?php echo $row['content_id']; ?>" class="text-decoration-none"> <?php echo $row['title']; ?></a></td>
                        <td> <?php echo($row['year_released']) ?> </td>
                        <td> <?php echo($row['seasons']) ?> </td>
                        <td>
                            <?php 
                            $content_id = $row['content_id'];
                            $genre_query = "SELECT * FROM `genre` WHERE content_id = $content_id" ;
                            $result_genre = mysqli_query($conn, $genre_query);

                            while($row_genre=mysqli_fetch_assoc($result_genre)){
                                echo($row_genre['genre_name']);
                                echo(" ");
                            }
                            ?>
                        </td>

                        <td>
                        <?php
                            $content_id = $row['content_id'];
                            $avg_query = "SELECT ROUND(AVG(rating), 2) AS avg_rating FROM rating WHERE content_id = $content_id " ;
                            // $avg_query ="SELECT CASE WHEN AVG(rating) = ROUND(AVG(rating)) THEN CAST(ROUND(AVG(rating)) AS avg_rating) ELSE ROUND(AVG(rating), 2) 
                            // END AS avg_rating FROM rating WHERE content_id = $content_id;";
                            $result_avg = mysqli_query($conn, $avg_query);
                            $row_avg=mysqli_fetch_assoc($result_avg);
                            echo($row_avg['avg_rating']);
                            
                            ?>
                        </td>
                        <td><a href="admin_update_anime.php?id=<?php echo $row['content_id']; ?>" class="btn btn-success">Update</td>
                        <td><a href="admin_delete_anime.php?id=<?php echo $row['content_id']; ?>" class="btn btn-danger">Delete</td>
                    </tr>

                        <?php
                    }
                }

            ?>


        </table>

        
        <?php
            if(isset($_GET['message'])){
                echo "<h6>".$_GET['message']."</h6>";
            }
        ?>
        <?php
            if(isset($_GET['insert_msg'])){
                echo "<h6>".$_GET['insert_msg']."</h6>";
            }
        ?>
        <?php
            if(isset($_GET['update_msg'])){
                echo "<h6>".$_GET['update_msg']."</h6>";
            }
        ?> 
        <?php
            if(isset($_GET['delete_msg'])){
                echo "<h6>".$_GET['delete_msg']."</h6>";
            }
        ?>          

</div>
</body>
<?php include("../footer.php"); ?>