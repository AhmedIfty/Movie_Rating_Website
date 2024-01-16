<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>
<?php include("navber_user.php"); ?>

<!-- <link rel="stylesheet" href="./user.css">
<body class="user-bg"> -->
    <div class="container">
        <h2 class="name">Movies</h2><br>
        <div> 
            <table class="table table-hover table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Title </th>
                    <th>Year Released </th>
                    <th>Duration </th>
                    <th>Genre </th>
                    <th>Rating </th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
        </div>
                <?php
                    
                    $view_query = "SELECT * FROM content WHERE type='movie'";                
                    $result = mysqli_query($conn, $view_query);

                    if (!$result){
                        die("Query Failed".mysqli_error());
                    }
                    else{
                        while($row=mysqli_fetch_assoc($result)){
                            ?>

                        <tr>
                            
                            <td><a href="details_page.php?id=<?php echo $row['content_id']; ?>" class="text-decoration-none"> 
                                <?php echo $row['title']; ?></a></td>
                            <td> <?php echo($row['year_released']) ?> </td>
                            <td> <?php echo($row['duration']) ?> </td>

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
            
                            $result_avg = mysqli_query($conn, $avg_query);
                            $row_avg=mysqli_fetch_assoc($result_avg);
                            echo($row_avg['avg_rating']);
                            
                            ?>
                            </td>
                            <td><a href="details_page.php?id=<?php echo $row['content_id']; ?>" class="btn btn-success">Details</td>
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

    </div>

    <?php include("../footer.php"); ?>

</body>