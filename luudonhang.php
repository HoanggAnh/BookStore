<?php 
require "inc/myconnect.php";
if(isset($_POST['Dat']))
			{
             if(isset($_SESSION['cart']))
            {

				foreach($_SESSION['cart'] as $key  => $value)
				{
					$item[]=$key;
				}
                $str= implode(",",$item);
			    $query = "SELECT s.ID,s.Ten,s.date,s.Gia,s.HinhAnh,s.KhuyenMai,s.giakhuyenmai,s.Mota, n.Ten as Tennhasx,s.Manhasx
				from sanpham s 
				LEFT JOIN nhaxuatban n on n.ID = s.Manhasx
				 WHERE  s.id  in ($str)";
				$result = $conn->query($query);
                $total= $_POST['total'];
                $totalkcodv = $_POST['totalkcodv'];
                $email =  $_SESSION['email'];
                $ngaygiao = $_POST['date'];
                $tenkh = $_SESSION['HoTen'] ;
                $diachi = $_POST['diachi'];
                $dienthoai =  $_SESSION['dienthoai'];
                $hinhthucthanhtoan = $_POST['hinhthuctt']; 
                $ma[] = $_POST["madv"];
                $madv = implode(",",$ma);
                 //neu ma  dich vu thi lua thanh tien cong voi tong gia dich vu
                if( $total != 0)
                {
                $sql1="INSERT INTO hoadon (emailkh,ngaygiao,tenkh,diachi,dienthoai,hinhthucthanhtoan,thanhtien)
                VALUES ('$email','$ngaygiao','$tenkh','$diachi','$dienthoai','$hinhthucthanhtoan','$total');";
               if ($conn->query($sql1) === TRUE) 
                {
                    foreach($result as $s)
                    {
                       $masp= $s["ID"];
                       if($s["KhuyenMai"] == true)
                       {    
                       $dongia= $s["giakhuyenmai"];
                       }
                       if($s["KhuyenMai"] == false)
                       {    
                       $dongia= $s["Gia"];
                       }
                       $sl= $_SESSION['cart'][$s["ID"]];
                       $thanhtien =  $sl* $dongia;
                      //tao mang hd de lua sodh cua sql1
                       $hd[] =  mysqli_insert_id($conn);
                       echo $madv;
                       //lua mang
                       $str= implode(",",$hd);
                       $sql2="INSERT INTO  chitiethoadon (sodh,masp,soluong,dongia,thanhtien,madv) 
                       VALUES ('$str','$masp' ,'$sl','$dongia','$thanhtien','$madv');";         
       
if ($conn->query($sql2) === TRUE) {
    header('Location: xacnhandonhang.php');
    // destroy the session 
    // session_destroy(); 
	unset($_SESSION['cart']);
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
                }
                }

               }
                //neu ma khong chon dich vu thi lua thanh tien bnan dau
               else
               {
                $sql1="INSERT INTO hoadon (emailkh,ngaygiao,tenkh,diachi,dienthoai,hinhthucthanhtoan,thanhtien)
                VALUES ('$email','$ngaygiao','$tenkh','$diachi','$dienthoai','$hinhthucthanhtoan','$totalkcodv');";
               if ($conn->query($sql1) === TRUE) 
                {
                    foreach($result as $s)
                    {
                       $masp= $s["ID"];
                       if($s["KhuyenMai"] == true)
                       {    
                       $dongia= $s["giakhuyenmai"];
                       }
                       if($s["KhuyenMai"] == false)
                       {    
                       $dongia= $s["Gia"];
                       }
                       $sl= $_SESSION['cart'][$s["ID"]];
                       $thanhtien =  $sl* $dongia;
                      //tao mang hd de lua sodh cua sql1
                       $hd[] =  mysqli_insert_id($conn);
                       //lua mang
                       $str= implode(",",$hd);
                       $sql2="INSERT INTO  chitiethoadon (sodh,masp,soluong,dongia,thanhtien) 
                       VALUES ('$str','$masp' ,'$sl','$dongia','$thanhtien');";         
       
if ($conn->query($sql2) === TRUE) {
    header('Location: xacnhandonhang.php');
    // destroy the session 
    session_destroy(); 
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
                }
                }
               }
    }
}
			?>
