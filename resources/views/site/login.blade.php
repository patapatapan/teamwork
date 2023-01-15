<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>登入會員</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="./index" class="site-logo">
				<img src="img/logo.png" alt=""><span class="text-white font-weight-bold">兔給樂</span>
			</a>
			<div class="menu-switch" id="menu-canvas-close">
				<i class="icon_close"></i>
			</div>
		</div>
		<ul class="main-menu">
			<li><a href="{{asset('index')}}" class="active">首頁</a></li>
			<li><a href="{{asset('gallery')}}">文章</a></li>
			<li><a href="{{asset('blog')}}">購物車</a></li>
			<li><a href="{{asset('contact')}}">登入</a></li>
      <li><a href="{{asset('contact')}}">聯絡我們</a></li>
		</ul>
		<div class="menu-footer">
			<div class="footer-social">
			</div>
			<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->

	<!-- Header section -->
	<header class="header-section">
		<a href="./index" class="site-logo">
			<img src="img/logo.png" alt=""><span class="text-white font-weight-bold">兔給樂</span>
		</a>
		<div class="menu-switch" id="menu-canvas-show">
			<i class="icon_menu"></i>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="contact-warp set-bg" data-setbg="img/blog/bg.jpg">
			<div class="container m-auto">
        <h4 class="text-white mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg> 登入會員</h4>
<div class="row"><div class="col-6"><form class="contact-form">
							<label for="account" >帳號</label>
							<input class="form-control" type="text" id="account" placeholder="輸入帳號" required>
							<label for="password">密碼</label>
              <div class="input-group mb-5">
  <input class="form-control" type="password" id="password" placeholder="輸入密碼" requiredrequired>
  <button class="btn btn-outline-light" type="button" id="button-addon2"><i class="fa fa-eye" onclick="showhide()" id="eye"></i></button>
</div>

              <div class="row"><div class="col"><button class="w-100 btn btn-primary">登入</button></div><div class="col"><a href="./sign" class="w-100 btn btn-secondary">註冊會員</a></div></div>

						</form></div>
          <div class="col-6"></div></div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="footer-social">
		</div>
		<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>
<script type="text/javascript">

var a=document.getElementById("eye");

var b=document.getElementById("password");



function showhide(){
       if(b.type=="password"){
             b.type='text';
           a.className='fa fa-eye-slash'
       }else{
           b.type='password';

           a.className='fa fa-eye'
       }
}

</script>
	</body>
</html>

