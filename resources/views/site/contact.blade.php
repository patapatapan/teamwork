@extends('layouts.master')  {{--繼承master元素--}}

@section('title', '聯絡表單')   {{--填洞(title)--}}

@section('content')  {{--填洞(content)--}}
  <!-- Contact section -->
  <section class="contact-section">
    <div class="contact-warp set-bg" data-setbg="img/blog/big.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="contact-info">
              <h4>Information</h4>
              <div class="ci-item"><i class="icon_phone"></i>(12)-100-100-100</div>
              <div class="ci-item"><i class="icon_mail"></i>Info.colorlib@gmail.com</div>
            </div>
            <div class="contact-info">
              <h4>Address</h4>
              <div class="ci-item"><i class="icon_pin"></i>Iris Watson, Mary land, United State, New York City</div>
            </div>
          </div>
          <div class="col-lg-7">
            <form class="contact-form">
              <label for="y-name">Your Name:</label>
              <input type="text" id="y-name">
              <label for="y-email">Email Address:</label>
              <input type="text" id="y-email">
              <label for="y-msg">Leave A Message:</label>
              <textarea id="y-msg"></textarea>
              <button class="site-btn">Send Us Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact section end -->
@endsection