@extends('layouts.master')

@section('title', '登入會員')

@section('header')
	<span class="text-white font-weight-bold">兔給樂</span>
@endsection

@section('header2')
	<span class="text-c1c1c1 font-weight-bold">兔給樂</span>
@endsection

@section('content')
	<!-- Login section -->
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
	<!-- Login section end -->
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
