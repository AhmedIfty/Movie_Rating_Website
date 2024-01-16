<?php include('dbcon.php'); ?>
<?php session_start(); ?>
<?php
if(isset($_POST['login'])){
    $username=$_POST['uname'];    
    $password=$_POST['password'];   
}

$query = "SELECT * FROM `users` WHERE `user_name`='$username' AND `password`='$password'";
$result= mysqli_query($conn,$query);

if(!$result){
    die("query failed".mysqli_error());
}
else{
    $row=mysqli_num_rows($result);
    
    if($row==1){
        $_SESSION['uname']=$username;

        $id_querry = "SELECT * FROM Users WHERE user_name = '$username' AND password = '$password'";
        $id_result = mysqli_query($conn,$id_querry);
        $id_row = mysqli_fetch_assoc($id_result);
        $user_id = $id_row['user_id'];
        $_SESSION['user_id']=$user_id;

        header('location:../user/user_movie.php');
    }
    else{
        header('location:login_page.php?message=sorry your username or email or password is invalid');
    }

}
?>


