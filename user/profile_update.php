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

<body class="body">
<div class="container">
        <h2 class="name">Profile Update</h2><br>

        <form action="profile_update.php" method="post">
        <div class="form-group">
            <label for="title">Username</label>
            <input type="text" name="user_name" class="form-control" value="<?php echo $user_name ?>">
        </div>
        <div class="form-group">
            <label for="year_r">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
            <label for="duration">Password</label>
            <input type="text" name="password" class="form-control" value="<?php echo $password ?>">
        </div>

        <input type="submit" class="btn btn-success" name="update_profile" value="UPDATE">

        </form>

    </div>
</body>

<?php

        if(isset($_POST['update_profile'])){
            
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "UPDATE `users` set `user_name`='$user_name', `email`= '$email', `password`='$password' 
                WHERE `user_id`='$user_id'";
            $result = mysqli_query($conn, $query);

            if (!$result){
                die("query Failed".mysqli_error());
            }
            else{
                // header('location:profile.php?update_msg=Data updated successfully');
            }

        }
    ?>

<?php include("../footer.php"); ?>