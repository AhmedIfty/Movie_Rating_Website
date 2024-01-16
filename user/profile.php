<?php session_start(); ?>
<?php include("user_header.php"); ?>
<?php include("../db_connect.php"); ?>  
<?php include("navber_user.php"); ?>

    <?php
    $user_id = $_SESSION['user_id'];
    $view_query = "SELECT * FROM users WHERE user_id='$user_id' ";                
    $result = mysqli_query($conn, $view_query);
    $row=mysqli_fetch_assoc($result);

    $user_name = $row['user_name'];
    $email = $row['email'];
    $password = $row['password'];

    ?>
    <div class="container">
    <h2 class="name">User Profile</h2><br> 
    
    <h3 class="text-white rounded p-2 ms-3 fs-4 fw-bold">Username: <?php echo $user_name ?></h3>
    <h3 class="text-white rounded p-2 ms-3 fs-4 fw-bold">Email: <?php echo $email ?></h3>
    <a href="profile_update.php" class="btn btn-success">Update</a>

    </div>

    <?php
        if(isset($_GET['update_msg'])){
            echo "<h6>".$_GET['update_msg']."</h6>";
        }
    ?> 

<?php include("../footer.php"); ?>