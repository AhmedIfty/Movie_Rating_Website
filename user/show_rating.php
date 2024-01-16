<?php session_start(); ?>
<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>  
<?php include("navber_user.php"); ?>

    <?php
        if(isset($_GET['message'])){
            echo "<h6>".$_GET['message']."</h6>";
        }
    ?>

    <div class="container">
    <h2 class="name">My ratings</h2><br>
    <table class="table table-hover table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Title </th>
                <th>Year released </th>
                <th>Raing </th>
                <th>Review </th>
                <th>Date and Time </th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
                
                $user_id = $_SESSION['user_id']; 
                

                $view_query = "SELECT content.title, content.year_released, rating.rating, 
                rating.review, rate.time_added, rate.rating_id
                FROM Content INNER JOIN rating ON Content.content_id = rating.content_id
                INNER JOIN rate ON rating.rating_id = rate.rating_id
                WHERE rating.user_id = $user_id";

               
                $result = mysqli_query($conn, $view_query);

                if (!$result){
                    die("Query Failed".mysqli_error());
                }
                else{
                    while($row=mysqli_fetch_assoc($result)){
                        ?>

                    <tr>                        
                        <td> <?php echo $row['title']; ?> </td>
                        <td> <?php echo($row['year_released']) ?> </td>
                        <td> <?php echo($row['rating']) ?> </td>
                        <td> <?php echo($row['review']) ?> </td>
                        <td> <?php echo($row['time_added']) ?> </td>
                        <td><a href="delete_rating.php?id=<?php echo $row['rating_id'] ?>" 
                            class="btn btn-danger">Delete</td>
                    </tr>

                <?php
                    }
                }

            ?>


        </table>
        </div>


<?php include("../footer.php"); ?>