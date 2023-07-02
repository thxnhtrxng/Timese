<?php session_start();?>
 <?php 

    $admin = $_POST['ten'];$_SESSION["a"]= $admin;
    $pass = $_POST['pass'];
    $con = new mysqli('localhost','root','','signin',3306);
 //bỏ hết kí hiệu đặc biệt
   /* $ten = stripcslashes($ten);
    $ten = mysqli_real_escape_string($con,$ten);
    $pass = stripcslashes($pass);
    $pass = mysqli_real_escape_string($con,$pass);*/
//prepear statements(chuẩn bị câu lệnh trước )
$stmt =$con->prepare("SELECT * FROM users WHERE email = ? AND matkhau = ?");

$stmt ->bind_param("ss",$admin,$pass);

$stmt->execute();
$stmt->store_result();

if($stmt->num_rows()==1){ 
    /*
    $sql ="select * from nguoidung where ten = '$ten' and mat_khau = '$pass'";
    $kq = mysqli_query($con,$sql);
    $count = mysqli_num_rows($kq);

    if( $count > 0 ){*/
        #echo 'dung';
    
        header("Location:../html/where.html");
        
    }else{
        header("Location../html/Index.html");
    }
$con->close();


?>