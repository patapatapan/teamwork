@extends('layouts.master')

@section('title', '變更密碼')

@section('style')
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
  </style>
@endsection

@section('header')
	<span class="text-white font-weight-bold">兔給樂</span>
@endsection

@section('header2')
	<span class="text-white font-weight-bold">兔給樂</span>
@endsection

@section('content')
  	<!-- Password section -->
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
                <form class="contact-form" action="./tw/user/password-go" method="post" novalidate="">
                    <input type="hidden" name="token" value="513d853f28c9c38e796754f2480458fc">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">密碼<sup class="required">*</sup></label>
                        <div class="col-sm">
                            <input class="form-control" type="password" name="password_current" minlength="8" placeholder="輸入目前密碼" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">新密碼<sup class="required">*</sup></label>
                        <div class="col-sm">
                            <input class="form-control" type="password" name="password_new" minlength="8" placeholder="輸入新密碼" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">密碼確認<sup class="required">*</sup></label>
                        <div class="col-sm">
                            <input class="form-control" type="password" name="password_confirmed" minlength="8" placeholder="請再次輸入一次" required="">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary btn-block mb-5 mt-4" type="submit" name="save" value="save">確認修改</button>
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
	<!-- Password section end -->
@endsection

@section('script')
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
@endsection

