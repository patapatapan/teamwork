@extends('layouts.master')

@section('title', '會員資訊')

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
	<span class="text-c1c1c1 font-weight-bold">兔給樂</span>
@endsection

@section('header2')
	<span class="text-c1c1c1 font-weight-bold">兔給樂</span>
@endsection

@section('content')
  		<!-- Member section -->
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
      <div class="row text-c1c1c1">
        <div class="col-4 ">
        <h4 class="text-c1c1c1 mb-3">個人資料</h4>
<div class="form-group row gutters-1 mb-1">
                            <label class="col-4">姓名</label>
                            <div class="col"></div>
                        </div>
                        <div class="form-group row gutters-1 mb-1">
                            <label class="col-4">電話</label>
                            <div class="col"></div>
                        </div>
                        <div class="form-group row gutters-1 mb-1">
                            <label class="col-4">地址</label>
                            <div class="col"></div>
                        </div>
                        <div class="form-group row gutters-1 mb-1">
                            <label class="col-4">信箱</label>
                            <div class="col"></div>
                        </div>
                        <div class="row mt-4"><div class="col"><a  href="./password" class="btn btn-outline-c1c1c1 w-100">變更密碼</a></div><div class="col"><a href="./modify" class="btn btn-outline-c1c1c1 w-100">修改資料</a></div></div>
        </div>
        <div class="col ml-2">
          <div class="row">
            <div class="col mb-3"><h4 class="text-c1c1c1">購買紀錄</h4></div>
<div class="col text-right">系統會顯示您一年內購買的紀錄</div>
          </div>
<table class="table text-c1c1c1">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">標題</th>
      <th scope="col">人數</th>
      <th class="text-rightd" scope="col">總價</th>
    </tr>
  </thead>
  <tbody class="border-bottom">
    <tr>
      <th scope="row">1</th>
      <td>輕遊東京~川越小江戶‧漫步輕井澤.草津湯田.溫泉四日</td></td>
      <td>4</td>
      <td  class="text-right">22,900</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>星想念~浪漫輕井澤.幸運達摩DIY體驗.冰川神社.輕旅行5日</td>
      <td>2</td>
      <td class="text-right">28,700</td>
    </tr>
  </tbody>
</table>

        </div>
      </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Member section end -->
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
