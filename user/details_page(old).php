<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?> 
<?php include("navber_user.php"); ?>
<?php include("rating_modal.php"); ?>

<div class="container">
    <h2>Details</h2><br>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Rate
    </button>    

    <a href="watchlist.php?id=<?php echo $_GET['id'] ?>" class="btn btn-success">Add to Watchlist</a>

    


<?php
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']."</h6>";
    }
?>

<?php include("../footer.php"); ?>

