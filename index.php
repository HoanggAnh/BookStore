<?php
include 'header.php';
include 'navh.php';
include 'navbar.php';
include 'inc/config.php';
?>




<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style=" max-width: 80%; margin-left:130px">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/banner4.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="images/banner5.png" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="images/banner6.png" class="d-block w-100" alt="...">
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="heading">
				<h2>Books On Sale</h2>
				<hr>
			</div>

			<div class="products">
				<?php
				require 'inc/truyvan.php';
				if ($result->num_rows > 0) {
					// output data of each row
					while ($row = $result->fetch_assoc()) {

				?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="product">
								<div class="image"><a href="product.php?id=<?php echo $row["ID"] ?>"><img src="images/<?php echo $row["HinhAnh"] ?>" style="width:250px;height:250px" /></a></div>
								<div class="caption">
									<div class="name">
										<h3><a  style='color: #f3906c' href="product.php?id=<?php echo $row["ID"] ?>"><?php echo $row["Ten"] ?></a></h3>
									</div>
									<?php
									if ($row["KhuyenMai"] == true) {
									?>
										<div class="price" style="color: red; font-size: 2rem"><span style="font-size: 14px; color: grey"><?php echo $row["Gia"] ?>,000₫ <i class="fas fa-arrow-right"></i></span><?php echo $row["giakhuyenmai"] ?>,000₫ </div>
									<?php
									}
									?>
									<div class="g-plusone" data-size="medium" data-annotation="none" data-href="/product.php?id=<?php echo $row["ID"] ?>"></div>
								</div>
							</div>

						</div>
				<?php
					}
				}
				?>
			</div>


		</div>

	</div>
</div>

<?php
include "sanphammoinhat.php"
?>


</div>

</div>
</div>
</div>
<?php
include "footer.php"
?>
</body>

</html>