<?php
ob_start();

?>
<?php
require "login.php";
if (!isset($_SESSION['txtus'])) // If session == null thi tra ve trang login
{
	header("Location:account.php");
}

?>

<?php
include "header.php";
include "navh.php";
include "navbar.php";
?>

<hr style=" border: 1.5px solid">
<form name="form6" id="ff6" method="POST" action="<?php include 'luudonhang.php'?>">
	<div id="page-content" class="single-page">

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb" style="background-color: #323741">
						<li><a style="color:#fcc39b" href="index.php">Home</a></li>
						<li><a style="text-align:center; color:#fcc39b">Confirm</a></li>
					</ul>
				</div>
			</div>
			
			<div class="row">
		
			<div class="col-lg-6">
				    <div class="panel panel-default">
					<div class="panel-heading">Profile</div>
             <div class="panel-body">		 
			 <div class="col-md-8" style="margin-left: 130px;">
			 <label>Name : <?php echo  $_SESSION['HoTen']?></label>
			 <label>Mobile: <?php echo  $_SESSION['dienthoai']?></label>
			 <label>Email:<?php echo    $_SESSION['email']?></label>     
			 <label><input type="text"  class="form-control" placeholder="Nhập địa chỉ giao hàng   :" name="diachi"  required ></label>
			 <br/>

			<label><input type="date" class="form-control" placeholder="Ngày giao  :" name="date" id="datechoose"  required ></label>
			<label> Method of payment:<select class="selectpicker" name="hinhthuctt">
    										<option value="ATM">Card</option>
    										<option value="Live">Cash</option>
  											</optgroup>
										</select>
				</label>
	
			 </div>
			 
				   </div>		
					 		 
			</div>				
			<label>Service</label>
                    <select style="max-height:50px; margin-bottom: 20px" class="form-control select2" multiple="multiple" name="dichvu" id="dichvu" onchange ="laygiatheoiddichvu(this.value)"  data-placeholder="Chọn dịch vụ" >
						<?php
						 require "inc/config.php";
                         $sql="SELECT * from dichvu ";
                         $result = $conn->query($sql); 
                         if ($result->num_rows > 0) {
                          // xuat data cho moi don
                          while($row = $result->fetch_assoc()) {
                      ?>
                      <option value="<?php echo $row["madv"] ?>"><?php echo $row["tendv"] ?></option>
											<?php
													}
												}
											?>
                    </select>						
		</div>        
		<div class="col-lg-5">
		<div class="panel panel-default">
			<div class="panel-heading">Order Information</div>
             <div class="panel-body">		 
			 <div class="col-md-12">
			 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Book: </th>
        <th>Quantity: </th>
        <th>Total: </th>
      </tr>
    </thead>
    <tbody>
	<?php
			if(isset($_SESSION['cart']))
			{
				foreach($_SESSION['cart'] as $key  => $value)
				{
					$item[]=$key;
				}
				// echo $item;
				$str= implode(",",$item);
			    $query = "SELECT s.ID,s.Ten,s.date,s.Gia,s.HinhAnh,s.KhuyenMai,s.giakhuyenmai,s.Mota, n.Ten as Tennhasx,s.Manhasx
				from sanpham s 
				LEFT JOIN nhaxuatban n on n.ID = s.Manhasx
				 WHERE  s.id  in ($str)";
				$result = $conn->query($query);
				
				$total=0;
				foreach($result as $s)
				{
			?>
      <tr>
        <td><?php  echo $s["Ten"]?></td>
        <td><?php echo $_SESSION['cart'][$s["ID"]]?></td>
				<?php
               if($s["KhuyenMai"] == true)
								 {                                      
								?>
						 <td><?php  echo $s["giakhuyenmai"]?>.000 VNĐ</td>
								<?php 
								}
								?>
								<?php
                if($s["KhuyenMai"] == false)
								 {
								?>
								     <td><?php  echo $s["Gia"]?>.000 VNĐ</td>
								<?php 
								}
								?>
   
      </tr>
			<?php
               if($s["KhuyenMai"] == true)
								 {                                      
								?>
			  <?php 
				 $total +=$_SESSION['cart'][$s["ID"]] * $s["giakhuyenmai"]  ?>
								<?php 
								}
								?>
								<?php
                if($s["KhuyenMai"] == false)
								 {
								?>
								  <?php 
				 $total +=$_SESSION['cart'][$s["ID"]] * $s["Gia"]  ?>
								<?php 
								}
								?>

	  <?php 
				}
			}?>
    </tbody>
  </table>
  <table class="table">
    <thead>
      <tr>
        <th>Total:</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th  name="result"  style="color:red"><strong style="color:red" id="result" name="total"><?php echo  $total    ?>.000 VNĐ</strong></th>  
		<input type="hidden" id="thannhtien" name="totalkcodv" value="<?php echo  $total    ?>"/>     
		<input type="hidden" name="total" id="total" value="" />  
		<input type="hidden" name="madv" id="madv" value="" />  
      </tr>
    </thead>
    <tbody>
      <tr>
      </tr>
    </tbody>
  </table>
  </div>
	</div>            
	</div>
		</div>
		</div> 
		</div> 
					<div class="row">
			<div class="panel panel-default">	
			<div class="panel-heading">Book (<?php  echo count($_SESSION['cart'])?>)</div>
             <div class="panel-body">		
			 <?php

			require "inc/config.php";

			if(isset($_SESSION['cart']))
			{
				foreach($_SESSION['cart'] as $key  => $value)
				{
					$item[]=$key;
				}
				// echo $item;
				$str= implode(",",$item);
			    $query = "SELECT s.ID,s.Ten,s.date,s.Gia,s.HinhAnh,s.KhuyenMai,s.giakhuyenmai,s.Mota, n.Ten as Tennhasx,s.Manhasx
				from sanpham s 
				LEFT JOIN nhaxuatban n on n.ID = s.Manhasx
				 WHERE  s.id  in ($str)";
				$result = $conn->query($query);
				$total=0;
				foreach($result as $s)
				{
			?>
				<div class="product well">
					<div class="col-md-3">
						<div class="image" style=" float: right">
							<img src="images/<?php  echo $s["HinhAnh"]?>" style="width:250px;height:250px" />
						</div>
					</div>
					<div class="col-md-9">
						<div class="caption">
							<div class="name"><h3><a style="color:#f3906c" href="product.php?id=<?php  echo $s["ID"]?>"><?php  echo $s["Ten"]?></a></h3></div>
							<div class="info">	
								<ul>
									<li>Publishing House: <?php  echo $s["Tennhasx"]?></li>
								</ul>
							</div>
							<?php
							if($s["KhuyenMai"] == true)
								 {                                      
								?>
											<div class="price"><?php  echo $s["giakhuyenmai"]?>.000 VNĐ</div>
								<?php 
								}
								?>
								<?php
                if($s["KhuyenMai"] == false)
								 {
								?>
												<div class="price"><?php  echo $s["Gia"]?>.000 VNĐ</div>
								<?php 
								}
								?>
			
							<!-- <label>Số lượng: </label>  -->
							<input class="form-inline quantity"  type="hidden" name ="qty[<?php echo $s["ID"] ?>]" value="<?php echo $_SESSION['cart'][$s["ID"]]?>"> 
							<hr>
					
							<lable>Quantity :<?php echo $_SESSION['cart'][$s["ID"]] ?></lable>
							<input type="hidden" name="idsprm" value="<?php echo $s["ID"] ?>" />
							<?php
							if($s["KhuyenMai"] == true)
								 {                                      
								?>
								<input type="hidden" name="dongia" value="<?php echo $s["giakhuyenmai"] ?>" />
								<?php 
								}
								?>
								<?php
                if($s["KhuyenMai"] == false)
								 {
								?>
								      <input type="hidden" name="dongia" value="<?php echo $s["Gia"] ?>" />
								<?php 
								}
								?>
         
						</div>
					</div>

					<div class="clearfix"></div>
				</div>	

			<?php 
				 $total +=$_SESSION['cart'][$s["ID"]] * $s["Gia"]?>
				 	<?php 
				}
			}?>
			</div>
			</div>
			</div>	
			<input type="submit" name="Dat" value="Đặt hàng" class="btn btn-1" style="margin-left: 50%; margin-bottom: 50px  " /> 
			</div>
	</div>	
    </form>		
	<?php 
	include "footer.php"
	?>
</body>
</html>
<!-- Lấy ngày hiện tại -->
<script>
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;
    document.getElementById("datechoose").value = today;
</script>
  <script src="plugins/select2/select2.full.min.js"></script>
<script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
</script>
<!-- dung ajax de tinh tong tien khi chon ma dich vu -->
<!-- str la  gia tri madv khi thay doi select 2 -->
<script>
function laygiatheoiddichvu(str) {
  var xhttp;
	var div = document.getElementById("result");
	var thannhtien = document.getElementById("thannhtien");
	//truong hop id khong co gia tri thi tra ve tong tien ban dau
  if (str.length == 0) { 
		div.innerHTML  = thannhtien.value ;
		//truyen du lieu de hien thi len html
		div.innerHTML = div.innerHTML +".000 VNĐ";
		document.getElementById("total").value = thannhtien.value;
			// gian bien madv = value cua select 2
	var madv = $('.select2').select2("val");
	//truyen madv ve html co id la madv
	document.getElementById("madv").value = madv;
	console.log(madv);
    return;
  }
	//truong hop co gia tri thi lay thanh tien + tong gia dich vu
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		//gia bien sum = giatritrave
			var sum = this.responseText;
		//ep thanh kieu float de tinh thanh tien
		div.innerHTML = parseFloat(sum) + parseFloat(thannhtien.value) ;
		//truyen du lieu de hien thi len html
		div.innerHTML = div.innerHTML + ".000 VNĐ";
		//truyen madv ve html co id la total
		document.getElementById("total").value =   parseFloat(sum) + parseFloat(thannhtien.value);
		// console.log(sum);
    }
  };
	// gian bien madv = value cua select 2
	var madv = $('.select2').select2("val");
	//truyen madv ve html co id la madv
	document.getElementById("madv").value = madv;
	console.log(madv);
	//truyen madv ve file laygiadv.php de lay tonggia
  xhttp.open("GET", "laygiadv.php?madv="+madv, true);
  xhttp.send();   
}
</script>
<?php ob_end_flush(); ?>