			<div class="row">
			<div class="col-lg-12">
				<div class="heading"><h2>Sản phẩm mới nhất</h2></div>

				<div class="products">
				<?php
					require 'inc/myconnect.php';
					$result = mysqli_query($conn, 'select count(ID) as total from sanpham' );
					$row = mysqli_fetch_assoc($result);
					$total_records = $row['total'];		
					if($row['total'] == 0)
					{
					  header('Location: khongcosanpham.php');
					}					   
					$offset =1;
					// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
					$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
					$limit = 4;
					// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
					// tổng số trang
					$total_page = ceil($total_records / $limit);
					 
					// Giới hạn current_page trong khoảng 1 đến total_page
					if ($current_page > $total_page){
						$current_page = $total_page;
					}
					else if ($current_page < 1){
						$current_page = 1;
					}
					 
					// Tìm Start
					$start = ($current_page - 1) * $limit;
					
					$query="SELECT * from sanpham ORDER BY ID DESC LIMIT $start, $limit;";
					$rs = $conn->query($query);
					if ($rs->num_rows > 0) {
					// output data of each row
					while($row = $rs->fetch_assoc()) {

					?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="product">
							<div class="image"><a href="product.php?id=<?php echo $row["ID"]?>"><img src="images/<?php echo $row["HinhAnh"]?>" style="width:300px;height:300px"/></a></div>
							<div class="caption">
								<div class="name"><h3><a href="product.php?id=<?php echo $row["ID"]?>"><?php echo $row["Ten"]?></a></h3></div>
								<div class="price"><?php echo $row["Gia"] ?>.000 VNĐ</div>
							</div>
						</div>
		
					</div>
					<?php
	}
}
				?>
				</div>
				<div class="row text-center">
						<ul class="pagination">
						<?php 
						// PHẦN HIỂN THỊ PHÂN TRANG
			// BƯỚC 7: HIỂN THỊ PHÂN TRANG
			 
			// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
			for ($i = 1; $i <= $total_page; $i++){
				if ($i == $current_page){

					   ?>
					   <li class="active"><a href="#"><?php echo $i  ?></a></li>					   
						  <?php 
				}

			?>
			<?php
			if($i != $current_page){
			 ?>	
			 	  <li><?php echo '<a href="index.php?page='.$i.'">'.$i.'</a> '; ?></li>
			 <?php
			}
			  ?>	
						  <?php 
			}
						  ?>
						</ul>
					</div>
				
		
				</div>