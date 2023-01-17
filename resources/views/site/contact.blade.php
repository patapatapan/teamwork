@extends('layouts.master')
@section('title','聯絡我們')

@section('content')
<section class="contact-section">
		<div class="contact-warp set-bg" data-setbg="img/blog/big.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="contact-info">
							<h4>Information</h4>
							<div class="ci-item"><i class="icon_phone"></i>(02)22210335</div>
							<div class="ci-item"><i class="icon_mail"></i>teamwork.lily@gmail.com</div>
						</div>
						<div class="contact-info">
							<h4>Address</h4>
							<div class="ci-item"><i class="icon_pin"></i>No. 50, Sec. 2, Zhonghua Rd., Wanhua Dist., Taipei City , Taiwan</div>
						</div>
					</div>
					<div class="col-lg-7">
						<form class="contact-form" action="{{ asset('api/contact') }}" method="post">
							<label for="name">姓名:</label>
							<input type="text" id="name" name="name">
							<label for="email">電子信箱:</label>
							<input type="text" id="email" name="email">
							<label for="message">留言:</label>
							<textarea id="message" name="message"></textarea>
							<button class="site-btn">送出</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('script')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection
