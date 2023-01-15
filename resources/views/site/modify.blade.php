@extends('layouts.master')

@section('title', '修改資料')

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
  .form-control {
      border: 1px solid rgba(255, 255, 255, 0.4);
      background: rgba(255, 255, 255, 0.1);
      color:#fff;
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
    <!-- Modify section -->
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
	<!-- Modify section end -->
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

