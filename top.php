<?php 
include "head.php"
?>
<?php
$title ="Shop huy";
$name ="Điện thoai";
?>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=617487565124105&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<!-- <select class="language">
						<option value="English" selected>VietNam</option>
					</select>
					<select class="currency">
						<option value="USD" selected>VNĐ</option>
					</select> -->
				</div>
				<div class="col-xs-6">
					<ul class="top-link">
						<?php
							 // require "login.php";
							      if(!isset($_SESSION['txtus'])) // If session is not set then redirect to Login Page
							       {
							           printf(' <li><a href="account.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
										<li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Liên hệ</a></li>');
							       }
							       else{
							       	echo '<li><span class="glyphicon glyphicon-user"></span> Xin chào ' ; echo '<span style="color:Tomato;"><b>' . $_SESSION['HoTen'] . '</b></span></li>' ;
							       	echo '<li><span class="glyphicon glyphicon-log-out"></span><a href="dangxuat.php"> Đăng xuất!</a></li>';
							       }

							?>
						
					</ul>
				</div>
			</div>
		</div>
    </nav>
    </body>
</html>
