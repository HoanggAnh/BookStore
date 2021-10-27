<?php
include 'header.php';
?>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #323741">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <p style="color:#fcc39b; margin-left:20px; margin-bottom:0">FREE SHIPING FOR ORDERS OVER $50</p>
                <div class="navbar-nav ms-auto mb-2 mb-1g-0" style="margin-bottom:0 !important">
                    <ul class="top-link navbar-nav ms-auto mb-2 mb-1g-0" style="margin-bottom:0 !important">
                        <?php
                        // require "login.php";
                        if (!isset($_SESSION['txtus'])) // If session is not set then redirect to Login Page
                        {
                            printf(' <li class="nav-item"><a class="nav-link active" href="account.php"><span class="glyphicon glyphicon-log-in"></span><i class="fas fa-sign-in-alt"></i> Login</a></li>
										<li class="nav-item"><a class="nav-link active" href="contact.php"><span class="glyphicon glyphicon-envelope"></span><i class="fas fa-envelope"></i> Contact</a></li>');
                        } else {
                            echo '<li class="nav-item"><span class="glyphicon glyphicon-user"></span> Xin chào ';
                            echo '<span style="color:Tomato;"><b>' . $_SESSION['HoTen'] . '</b></span></li>';
                            echo '<li class="nav-item"><span class="glyphicon glyphicon-log-out"></span><a class="nav-link active" href="logout.php"> Log Out</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
    </nav>