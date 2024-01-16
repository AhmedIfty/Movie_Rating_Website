<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?> 
<?php include("navber_user.php"); ?>
<?php include("rating_modal.php"); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .review {
        margin-top: 100px !important;
        margin-bottom:20px !important;
    }
    .detail{
        margin-left: 550px !important;
    }
    .detail-bg{
        background-image: url(./img/image\ 2.jpeg) !important;
    }
</style>


<body class="detail-bg">
<div class="container">
    
    <h2 class="text-white text-center rounded pb-2 bg-black detail fs-1 fw-bold" style="width: 10rem;">Details</h2><br>
    
    <div class="card-body bg-black text-white">
        <?php
        $content_id = $_GET['id'];
        $view_query = "SELECT * FROM content WHERE content_id='$content_id'";                
        $result = mysqli_query($conn, $view_query);
        $row=mysqli_fetch_assoc($result);
        
        $avg_query = "SELECT ROUND(AVG(rating), 2) AS avg_rating FROM rating WHERE content_id = $content_id " ;
        $result_avg = mysqli_query($conn, $avg_query);
        $row_avg=mysqli_fetch_assoc($result_avg);
        
        ?>

        <h1 class="display-5 ms-3"><?php echo $row['title']; ?> (<?php echo($row['year_released']) ?>)</h1>

        <iframe class="ms-5" width="560" height="315" src="<?php echo $row['trailer'] ?>" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        <h4 class="text-white rounded p-2 bg-black ms-3 fs-4 fw-bold" style="width: 15rem;">Rating: <?php echo($row_avg['avg_rating']); ?>/10</h4>
        <h2 class="text-white rounded p-2 bg-black ms-3 fs-4 fw-bold"  style="width: 50rem;">Runtime: <?php echo($row['duration']) ?></h2>
        <h3 class="text-white rounded p-2 bg-black ms-3 fs-4 fw-bold" style="width: 20rem;"></h3>
        
                <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-info mt-2 mb-5 ms-3 p-3 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Rate</button>
        <a href="watchlist.php?id=<?php echo $_GET['id'] ?>" class="btn btn-outline-warning mb-5 mt-2 ms-3 fs-3 p-3 fw-bold">Add to Watchlist</a>
    
    </div>
    


<!-- UNFINISHED -->

    <!-- <div class="review">
        <h2 class="text-white text-center rounded pb-2 bg-black detail fs-1 fw-bold" style="width: 20rem;">User Reviews</h2><br>
        <!-- <h3 class="text-warning mt-5"><u>Reviews:</u></h3> -->
        <!-- <div class=""> -->

        <div class="card" style="width: 80rem;"> -->

        <?php
        $review_query = "SELECT * FROM rating WHERE content_id='$content_id'";                
        $result = mysqli_query($conn, $review_query);
        
        while($row=mysqli_fetch_assoc($result)){}
            
            

            ?>
            <!-- <div class="card-body bg-black text-white">
                <h5 class="card-title">Username</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ipsum, aut consequatur voluptas debitis vel libero quam natus recusandae ratione enim tempora culpa labore veritatis placeat ea corporis provident nobis quas perferendis laudantium, repellendus, molestias facilis? Omnis nemo, nisi eligendi, quisquam neque possimus repellat cupiditate reprehenderit iure dolorum, amet excepturi?</p>
            </div>

        }

        

            

        </div>
    </div> -->

<!-- UNFINISHED -->

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    

<!-- </body> -->

<?php
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']."</h6>";
    }
?>

<?php include("../footer.php"); ?>
</body>