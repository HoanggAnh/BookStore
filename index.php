<?php
include 'header.php';
include 'config.php';
?>
<main style="background-color: #f7f7ff">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <img src="images/logobook.png" alt="" class="img-fluid logo">
            <!-- NAVBAR -->
    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link-c active" aria-current="page" href="#!">
            <div>
              <i class="fas fa-home fa-lg mb-1"></i>
            </div>
             Home
          </a>
        </li>
        <li class="nav-item dropdown text-center mx-2 mx-lg-1">
          <a class="nav-link-c dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            <div>
              <i class="fas fa-book fa-lg mb-1"></i>
            </div>
             Nhà xuất bản
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">NXB Trẻ</a></li>
            <li><a class="dropdown-item" href="#">NXB Tổng hợp HCM</a></li>
            <li><a class="dropdown-item" href="#">NXB Thế Giới</a></li>
          </ul>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
        <a class="nav-link-c active" href="#!">
            <div>
            <i class="fas fa-shopping-cart fa-lg mb-1"></i>
            </div>
             Giỏ hàng
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
        <a class="nav-link-c active" href="#!">
            <div>
              <i class="fas fa-envelope fa-lg mb-1"></i>
            </div>
             Liên hệ
          </a>
        </li>
      </ul>
      </div>
    <!-- Collapsible wrapper -->


    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

      <!-- Right links -->
      
      <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
         <!-- Search form -->
      <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
        <input type="search" class="form-control" placeholder="Nhập tên sách..." aria-label="Search" />
        <button class="btn btn-outline-white" type="button" data-mdb-ripple-color="dark"><i class="fas fa-search"></i>
          Tìm kiếm
        </button>
      </form>

        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="fas fa-shopping-cart fa-lg mb-2"></i>
              <span class="badge rounded-pill badge-notification bg-dark">10</span>
            </div>
          </a>
      </ul>
      <!-- Right links --> 
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
     
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
    <h2>Sách đang khuyến mãi</h2>
    <hr>



    <h2>Sản phẩm mới </h2>
    <hr>
    

  </div>
</div>








</main>



<?php
include 'footer.php';
?>