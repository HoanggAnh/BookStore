<?php
$Fullname = "" ;
$Email = "" ;
$Password= "";
$kqdk ="";
$ConfirmPassword ="";

if(isset($_POST['process-register']))
{
    require 'config.php';
    $Firstname  = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $ConfirmPassword = $_POST['repass'];
    if($ConfirmPassword != $Password  )
    {
        $kqdk = "Mật khẩu nhập lại không chính xác";
    }
    else
    {
        $sql="INSERT INTO  loginuser (email,matkhau,hoten,DienThoai) 
        VALUES ('$Email','$Password' ,'$Fullname','$dt') ";
        // echo  $mk;
        if (mysqli_query($conn, $sql)) {
            $Fullname = "" ;
            $Email = "" ;
            $dt= "";
            $Password= "";
            $ConfirmPassword ="";
            $kqdk = "Đăng ký thành công";
        } else {
            $kqdk = "Đăng ký không thành công xin hay kiểm tra lại thông tin";
        }
    }

    
    mysqli_close($conn);
}
?>