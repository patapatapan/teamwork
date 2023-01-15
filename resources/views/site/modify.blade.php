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
<style>
  .text-c1c1c1{
color:#c1c1c1 !important
  }

  .btn-outline-c1c1c1 {
    color: #c1c1c1!important;
    border-color: #c1c1c1;
}
 .btn-outline-c1c1c1:hover {
    color: #a8a8a8!important;
    border-color: #a8a8a8;
}
.form-control {
    border: 1px solid rgba(255, 255, 255, 0.4);
    background: rgba(255, 255, 255, 0.1);
    color:#fff;
}
</style>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="./index" class="site-logo">
				<img src="img/logo.png" alt=""><span class="text-c1c1c1 font-weight-bold">兔給樂</span>
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
			<img src="img/logo.png" alt=""><span class="text-c1c1c1 font-weight-bold">兔給樂</span>
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
        <div class="text-center text-nowrap text-c1c1c1">
            <a href="./member" class="text-active text-c1c1c1">會員首頁</a>
            <span class="mx-1 mx-sm-3 text-c1c1c1">|</span>
            <a href="./password" class="text-c1c1c1">變更密碼</a>
            <span class="mx-1 mx-sm-3 text-c1c1c1">|</span>
            <a href="./modify" class="text-c1c1c1">修改資料</a>
        </div>
        <hr class="border-light mb-5">
        <div class="container">
        <div class="row justify-content-center text-c1c1c1">
            <div class="col-lg-7">
                                <p><a class="btn btn-outline-c1c1c1 btn-sm text-white" href="./member"> < 返回會員中心</a></p>
                <hr class="my-3">
                <form class="contact-form" action="" method="post" novalidate="">

                    <input type="hidden" name="token" value="">
                    <div class="form-group row  text-c1c1c1">
                        <label class="col-sm-3 col-form-label">手機號碼</label>
                        <div class="col-sm">
                            <input class="form-control" name="photo" value="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">姓名<sup class="required">*</sup></label>
                        <div class="col-sm">
                            <input class="form-control" name="name" value="" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">性別<sup class="required">*</sup></label>
                        <div class="col-sm">
                            <select class="form-control custom-select" name="sex" required="">
                                <option value="男">男</option>
                                <option value="女">女</option>
                                <option value="其他">其他</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">生日</label>
                        <div class="col-sm">
                           <input class="form-control" name="date" value="" required="">
                        </div>
                    </div>

                                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">電子信箱<sup class="required">*</sup></label>
                        <div class="col-sm">
                            <input class="form-control" type="email" name="email" value="" placeholder="請輸入正確的電子信箱" required="">
                        </div>
                    </div>
                                        <div class="form-group">
                        <button class="btn btn-primary btn-block mt-4" name="save" value="save">修改</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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

