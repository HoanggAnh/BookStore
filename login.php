<?php
include 'header.php';
include 'config.php';
?>

<main>
    <section class="vh-100 container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <span class="h1 fw-bold mb-0">E-Contacts</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;">

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 0.5px; color: #ff6b35;">Please login to your account</h3>
                            <!-- Interface LOGIN connect in here -->
                            <form action="index.php" method="post">
                                <div class="form-outline mb-4">
                                    <input type="email" name="textEmail" placeholder="Email address" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="txtPass" placeholder="Password" class="form-control form-control-lg" />
                                </div>

                                <div class="pt-1 mb-4">
                                <a href="home.php" class="btn">Login</a>
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                                <p>Don't have an account? <a href="sign-up.php" class="link-info"><button type="button" class="btn btn-outline-light btn-rounded">
                                            Sign up!
                                        </button></a></p>
                            </form>
                            <!-- End Interface LOGIN -->
                            <div class="clearfix"></div>
                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://i.pinimg.com/originals/37/0e/8d/370e8dadb8ab358874e3d09dceda1303.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://png.pngtree.com/background/20210709/original/pngtree-h5-ad-geometric-red-picture-image_960443.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.pinimg.com/originals/2c/80/61/2c806138e555507c468766814bccb7c0.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img3.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div> -->
                </div>
            </div>
    </section>
</main>

