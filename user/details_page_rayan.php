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
    <h2 class="text-white text-center rounded pb-2 bg-black detail fs-1 fw-bold" style="width: 10rem;"><u>Details</u></h2><br>
    <h2 class="text-white rounded p-2 bg-black fs-1 fw-bold" style="width: 50rem;">Name:</h2>
    <h3 class="text-white rounded p-2 bg-black fs-4 fw-bold" style="width: 20rem;">Genera:</h3>
    <h4 class="text-white rounded p-2 bg-black fs-6 fw-bold" style="width: 10rem;">Rating:</h4>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info mt-2 mb-5 p-3 fs-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Rate
    </button>
    <a href="watchlist.php?id=<?php echo $_GET['id'] ?>" class="btn btn-outline-warning mb-5 mt-2 fs-3 p-3 fw-bold">Add to Watchlist</a>
    
    <div class="review">
        <h3 class="text-warning mt-5"><u>Reviews:</u></h3>
        <!-- <div class=""> -->
        <div class="card" style="width: 80rem;">
            <div class="card-body bg-black text-white">
                <h5 class="card-title">Username</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ipsum, aut consequatur voluptas debitis vel libero quam natus recusandae ratione enim tempora culpa labore veritatis placeat ea corporis provident nobis quas perferendis laudantium, repellendus, molestias facilis? Omnis nemo, nisi eligendi, quisquam neque possimus repellat cupiditate reprehenderit iure dolorum, amet excepturi?</p>
            </div>
        </div>
    </div>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    

</body>
<?php
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']."</h6>";
    }
?>

<?php include("../footer.php"); ?>

