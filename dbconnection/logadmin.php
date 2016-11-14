

<?php

include_once './connection.php';

session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $email = strip_tags($email);
    $email = stripslashes($email);
    //$email = mysqli_escape_string($email);

    $password = $_POST['password'];
    $password = strip_tags($password);
    $password = stripslashes($password);
    //$password = mysqli_escape_string($password);

    $sql = "select * from user where email='$email' limit 1";
    $run = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($run);

    $id = $row['iduser'];
    $fname = $row['f_name'];
    $lname = $row['l_name'];
    $dbemail = $row['email'];
    $dbpassword = $row['password'];


    if ($dbpassword == $password) {
        $_SESSION['iduser'] = $id;
        $_SESSION['f_name'] = $fname;
        header("Location:../admin.php");
    } 
    
    else {
        header("Location:../adlog.php");
    }
} 
     
     
    /*if($adminpassword == $password){
         $_SESSION['f_name'] = $username;
         $_SESSION['iduser'] = $id;
         header("Location:../admin.php");
         
     }else{
         
         header("Location:../adlog.php");*/
     
    


/*session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    //$adminusername = strip_tags($adminusername);
    //$adminusername = stripslashes($adminusername);
    //$adminusername= mysqli_real_escape_string($con,$adminusername);
    // $adminpassword = $_POST['password'];
    //  $adminpassword = strip_tags($adminpassword);
    // $adminpassword = stripslashes($adminpassword);
    //  $adminpassword =mysqli_real_escape_string($con,$adminpassword);

    echo $email;
    echo $pass;

    $selectpass = "select * from user where email='$email' and password='$pass'";
    $result = mysqli_query($con, $selectpass);
    $quary = mysqli_query($con,$selectpass);
    //$row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
   
    $id = $row['iduser'];
    $fname = $row['f_name'];
    $lname = $row['l_name'];
    $email = $row['email'];
    $password = $row['password'];

    echo $count;



//    if ($count == 1) {
//        $_SESSION['f_name'] = $fname;
//        $_SESSION['iduser'] = $id;
//        header("Location:../admin.php");
//    } else {
//        header("Location:../adlog.php");
//    }
} 
     
     
    /*if($adminpassword == $password){
         $_SESSION['f_name'] = $username;
         $_SESSION['iduser'] = $id;
         header("Location:../admin.php");
         
     }else{
         
         header("Location:../adlog.php");*/
     
    


