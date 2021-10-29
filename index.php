<?php
include 'header.php';
include 'navh.php';
include 'navbar.php';
include 'inc/config.php';
?>



     
<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"  style=" max-width: 80%; margin-left:130px">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="images/banner4.png" class="d-block w-100"  alt="...">
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


<div class="container">
  <div class="row">
    <h2>Books on sale</h2>
    <hr>



    <h2>New Books</h2>
    <hr>
    

  </div>
</div>








</main>


<?php
include 'footer.php';
?>


