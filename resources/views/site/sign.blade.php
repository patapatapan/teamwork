@extends('layouts.master')

@section('title', '會員註冊')

@section('header')
	<span class="text-white font-weight-bold">兔給樂</span>
@endsection

@section('header2')
	<span class="text-white font-weight-bold">兔給樂</span>
@endsection

@section('content')
	<!-- Sign section -->
	<section class="contact-section">
		<div class="contact-warp set-bg" data-setbg="img/blog/sign_bg.jpg">
			<div class="container m-auto">
        <h4 class="text-white mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
</svg> 註冊會員 <a href="./login"  class=" btn btn-sm btn-outline-secondary ml-2">已有會員？</a></h4>
<form class="contact-form"><div class="row"><div class="col-6">
  <div class="mb-3">
							<label for="account">註冊手機</label>
							<input class="form-control" type="text" id="account" placeholder="輸入信箱">
  </div><div class="mb-3">
  <label for="password">再次輸入密碼</label>

  <input class="form-control" type="password" id="password" placeholder="輸入密碼">             </div>
  </div>
  <div class="col-6">
    <div class="mb-3">
							<label for="password">密碼</label>

  <input class="form-control" type="password" id="password" placeholder="輸入密碼">
              </div>
  <div class="mb-3">
  <label for="password">姓名</label>
  <input class="form-control" type="password" id="password" placeholder="輸入姓名">
  </div>

  <div class="mb-3">
  <label for="password">地址</label>
  <input class="form-control" type="password" id="password" placeholder="輸入姓名">
  </div>


</div>
</div><div class="row"><div class="col-6"></div><div class="col-6 text-right"><a class=" btn btn-primary" href="./member" >確定註冊</a></div>
						</form></div>
          </div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Sign section end -->
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



