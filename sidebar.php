<div id="sidebar" class="col-md-4">
	<div class="widget wid-categories">
		<div class="heading">
			<h4>Nhà xuất bản</h4>
		</div>
		<div class="content">
			<ul>
				<?php
				require 'inc/myconnect.php';
				//lay san pham theo id
				$layidrandom = "SELECT ID,Ten  from nhaxuatban";
				$kq = $conn->query($layidrandom);
				if ($kq->num_rows > 0) {
					// output data of each row
					while ($d = $kq->fetch_assoc()) {

				?>
						<li><a href="category.php?manhasx=<?php echo $d["ID"] ?>"><?php echo $d["Ten"] ?></a></li>
				<?php
					}
				}
				?>
			</ul>
		</div>
	</div>
	<div class="widget wid-product">
		<div class="heading">
			<h4>Sách mới nhất</h4>
		</div>
		<div class="content">
			<?php
			require 'inc/myconnect.php';
			$query = "SELECT * from sanpham ORDER BY date DESC limit 4;";
			$rs = $conn->query($query);
			if ($rs->num_rows > 0) {
				// output data of each row
				while ($row = $rs->fetch_assoc()) {

			?>
					<div class="product">
						<a href="product.php?id=<?php echo $row["ID"] ?>"><img src="images/<?php echo $row["HinhAnh"] ?>" style="width:80px;height:100px" /></a>
						<div class="wrapper">
							<h5><a href="product.php?id=<?php echo $row["ID"] ?>"><?php echo $row["Ten"] ?></a></h5>
							<div class="price"><?php echo $row["Gia"] ?>.000 VNĐ</div>
						</div>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>
</div>