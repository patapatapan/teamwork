<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Cassi | Photo Studio HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/fresco.css') }}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>


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
				<img src="img/logo.png" alt="">
			</a>
			<div class="menu-switch" id="menu-canvas-close">
				<i class="icon_close"></i>
			</div>
		</div>
		<ul class="main-menu">
			<li><a href="{{asset('index')}}">首頁</a></li>
			<li><a href="{{asset('gallery')}}">Gallery</a></li>
			<li><a href="{{asset('blog')}}" class="active">Blog</a></li>
			<li><a href="{{asset('about')}}">About</a></li>
			<li><a href="{{asset('contact')}}">聯絡表單</a></li>
		</ul>
		<div class="menu-footer">
			<div class="footer-social">
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
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
			<img src="img/logo.png" alt="">
		</a>
		<div class="menu-switch" id="menu-canvas-show">
			<i class="icon_menu"></i>
		</div>
	</header>
	<!-- Header section end -->

    <section class="blog-single-section">
		<div class="blog-single-header set-bg" data-setbg="img/blog/big.jpg">
			<div class="container">
				<div class="fb-cata">{{$cgy->title}}</div>
				<h2>{{$sit->title}}</h2>
				<div class="bs-metas">
					<div class="bs-meta">By Colorlib</div>
					<div class="bs-meta">February 21, 2019</div>
					<div class="bs-meta">No Comments</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 m-auto blog-content">
					<p>{{$sit->content_small}}</p>
					<div class="row blog-gellery">
						<div class="col-md-6">
							<a class="fresco" href="img/blog/bg-1.jpg" data-fresco-group="blog-gallery">
								<img src="img/blog/bg-1.jpg" alt="">
							</a>
						</div>
						<div class="col-md-6">
							<a class="fresco" href="img/blog/bg-2.jpg" data-fresco-group="blog-gallery">
								<img src="img/blog/bg-2.jpg" alt="">
							</a>
							<div class="row">
								<div class="col-sm-6">
									<a class="fresco" href="img/blog/bg-3.jpg" data-fresco-group="blog-gallery">
										<img src="img/blog/bg-3.jpg" alt="">
									</a>
								</div>
								<div class="col-sm-6">
									<a class="fresco" href="img/blog/bg-4.jpg" data-fresco-group="blog-gallery">
										<img src="img/blog/bg-4.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<p>{{$sit->content}}</p>
					<div class="row pt-5">
						<div class="col-lg-6 mb-4">
							<div class="post-cata">Mountain</div>
							<div class="post-cata">Nature</div>
						</div>
						<div class="col-lg-6 mb-5 text-left text-md-right">
							<div class="post-share">
								<span>Share:</span>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row pt-5 m-0">
			<div class="col-md-6 taxt-left text-md-right p-0">
				<div class="blog-item recent-blog set-bg" data-setbg="img/blog/recent-post-1.jpg">
					<div class="blog-text ml-auto">
						<div class="bi-cata">City</div>
						<h6><a href="blog-single.html">What are the odds of someone doing extraordinary things if that person lost their sight.</a></h6>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="blog-item recent-blog set-bg" data-setbg="img/blog/recent-post-2.jpg">
					<div class="blog-text">
						<div class="bi-cata">Nature</div>
						<h6><a href="blog-single.html">What are the odds of someone doing extraordinary things if that person lost their sight.</a></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 m-auto blog-content">
					<h4 class="comment-title">Leave A Comment</h4>
					<form class="comment-form">
						<div class="row">
							<div class="col-lg-4">
								<input type="text" placeholder="Name">
							</div>
							<div class="col-lg-4">
								<input type="text" placeholder="E-mail">
							</div>
							<div class="col-lg-4">
								<input type="text" placeholder="Phone">
							</div>
							<div class="col-lg-12">
								<textarea placeholder="Comment"></textarea>
								<button class="site-btn">Post Comment</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="footer-social">
			<a href="#">Facebook</a>
			<a href="#">Twitter</a>
			<a href="#">Instagram</a>
		</div>
		<div class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
