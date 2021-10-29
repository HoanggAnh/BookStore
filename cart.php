<?php
ob_start();
?>
<?php
 require "login.php";
      if(!isset($_SESSION['txtus'])) // If session is not set then redirect to Login Page
       {
           header("Location:search-unavailable.php");  
       }

?>
<?php 
	include "header.php";
	include "navh.php";
	include "navbar.php";
	?>
	

	<?php 
	if(is_countable($_SESSION['cart']) == 0)
	{
		header('Location: empty-cart.php');
	}
	?>

<hr style=" border: 1.5px solid">
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				
			<div class="cart">
			<p><?php
			$ok=1;
			 if(isset($_SESSION['cart']))
			 {
				 foreach($_SESSION['cart'] as $key => $value)
				 {
					 if(isset($key))
					 {
						$ok=2;
					 }
				 }
			 }
			
			 if($ok == 2)
			 {
				echo "<p style='font-size: 2rem'> Have ".count($_SESSION['cart']). " Books In Cart </p>";
			 }
			else
			{
				echo   "<p>There are no books in the cart.</p>";
			}
			
			$sl = count($_SESSION['cart']);
			?>
			</p>			
			</div>
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

			<div class="row">
			<form name="form5" id="ff5" method="POST" action="remove-cart.php">
				<!-- <div class="product well"> -->
					<div class="col-md-3">
						<div class="image">
							<img src="images/<?php  echo $s["HinhAnh"]?>" style="width:250px;height:250px; margin-top:20px; margin-bottom:20px" />
						</div>
					</div>
					<div class="col-md-9">
						<div class="caption">
							<div class="name"><h3><a href="product.php?id=<?php  echo $s["ID"]?>"><?php  echo $s["Ten"]?></a></h3></div>
							<div class="info">	
								<ul>
									<li>Publishing House: <?php  echo $s["Tennhasx"]?></li>
								</ul>
							</div>
							<?php
                                 if($s["KhuyenMai"] == true)
								 {                                      
								?>
								<div class="price"><?php  echo $s["giakhuyenmai"]?>.000 VND</div>
								<?php 
								}
								?>
								<?php
                                 if($s["KhuyenMai"] == false)
								 {
								?>
								<div class="price"><?php  echo $s["Gia"]?>.000 VND</div>
								<?php 
								}
								?>

							<label>Quantity: </label> 
							<input class="form-inline quantity" style="margin-right: 80px;width:50px" min="1" max ="99" type="number" name ="qty[<?php echo $s["ID"] ?>]" value="<?php echo $_SESSION['cart'][$s["ID"]]?>"> 
						     <div>
								<input type="submit" name="update" style="margin-top:31px"  value="Update" class="btn btn-2" />
							</div>
							<hr>
							<input type="submit" name="remove" value="Delete" class="btn btn-default pull-right" style="margin-bottom:5px">	
							<input type="hidden" name="idsprm" value="<?php echo $s["ID"] ?>" /> 
							<?php
                                 if($s["KhuyenMai"] == true)
								 {                                      
								?>
									<label style="color:red">Total: <?php ;
							    echo  $_SESSION['cart'][$s["ID"]] * $s["giakhuyenmai"]?>.000  </label> 
								<?php 
								}
								?>
								<?php
                                 if($s["KhuyenMai"] == false)
								 {
								?>
									<label style="color:red">Total: <?php ;
							    echo  $_SESSION['cart'][$s["ID"]] * $s["Gia"]?>.000  </label> 
								<?php 
								}
								?>
						
						</div>
					</div>

					<div class="clear"></div>
				<!-- </div>	 -->
			</form>
			<?php
                                 if($s["KhuyenMai"] == true)
								 {                                      
								?>
											<?php 
				              $total +=$_SESSION['cart'][$s["ID"]] * $s["giakhuyenmai"]?>
								<?php 
								}
								?>
								<?php
                                 if($s["KhuyenMai"] == false)
								 {
								?>
								<?php 
				              $total +=$_SESSION['cart'][$s["ID"]] * $s["Gia"]?>
								<?php 
								}
								?>
		
			</div>
			<?php 
				}
			}
			?>
				
			<div class="row" style="margin-bottom:50px">
			<a href="rm-cart.php" class="btn btn-2" style="margin-bottom:31px">Clean the cart</a>
				<div class="col-md-4 col-md-offset-8 ">
					<center><a href="index.php" class="btn btn-1" style="margin-left:-76px">Choose another books</a></center>
				</div>
			<div class="row">
				<div class="pricedetails">
					<div class="col-md-4 col-md-offset-8">
						<table style="margin-right:31px">
							<h5>Price Details</h5>
							<tr>
								<td>Type of Books: </td>
								<td><?php echo $sl ?></td>
							</tr>
							<tr style="border-top: 1px solid #333">
								<td><h5>Total</h5></td>
								<td><?php echo $total ?>.000</td>
							</tr>
						</table>
						<center><a href="dathang.php" class="btn btn-1">Order</a></center>
					</div>
				</div>
			</div>
		</div> 
	</div>	
	</div>
	<?php 
	include "footer.php"
	?>
</body>
</html>
<?php ob_end_flush(); ?>

