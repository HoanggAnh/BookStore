<?php
$Fullname = "" ;
$Email = "" ;
$Phonenumber = "";
$Password= "";
$kqdk ="";
$ConfirmPassword ="";

if(isset($_POST['process-register']))
{
    require 'config.php';
    $Fullname  = $_POST['Fullname'];
    $Email = $_POST['email'];
    $Phonenumber = $_POST['phonenumber'];
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
            $Phonenumber= "";
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