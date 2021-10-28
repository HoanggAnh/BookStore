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
          <a class="nav-link-c active" aria-current="page" href="index.php">
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
            Publishing House
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu active" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">NXB Trẻ T</a></li>
            <li><a class="dropdown-item" href="#">NXB Tổng hợp HCM</a></li>
            <li><a class="dropdown-item" href="#">NXB Thế Giới</a></li>
          </ul>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
        <a class="nav-link-c active" href="cart.php">
            <div>
            <i class="fas fa-shopping-cart fa-lg mb-1"></i>
            </div>
             Cart Row
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
        <a class="nav-link-c active" href="contact.php">
            <div>
              <i class="fas fa-envelope fa-lg mb-1"></i>
            </div>
            Contact
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
      <!-- <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
        <input type="search" class="form-control" placeholder="Enter a book name..." aria-label="Search" />
        <button class="btn btn-outline-white" type="button" data-mdb-ripple-color="dark"><i class="fas fa-search"></i>
          Search
        </button>
      </form> -->

      <form class="form-search d-flex input-group w-auto ms-lg-3 my-3 my-lg-0" method="GET" action="search.php">  
					<input type="text" style = "border:none !important; padding: 0" class="input-medium search-query" name="txttimkiem" placeholder="  Enter a book name..." required>  
					<button type="submit" name="tk" class="btn btn-outline-white" data-mdb-ripple-color="dark" ><i class="fas fa-search"></i> Search</button>  
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