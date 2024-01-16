<!-- admin_login_process.php -->
<?php
include('dbcon.php');
session_start();

if(isset($_POST['login'])){
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //echo $username;
}
$query = "SELECT * FROM `users` WHERE `user_name`='$username' AND `email`='$email' AND `password`='$password'";
$result= mysqli_query($conn,$query);

if(!$result){
    die("query failed".mysqli_error());
    // $error[] = 'user already exist!';
}
else{
    $row_num=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    if($row_num==1 && $row['type'] == 'admin'){
        $_SESSION['uname']=$username;
        header('location:../admin/admin_movie.php');
    }
    else{
        header('location:login_page.php?message=sorry your username or email or password is invalid');
    }
}
?>


       

</div>
</body>
</html>