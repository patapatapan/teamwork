@extends('layouts.master')

{{--@php
	echo url()->current()
@endphp--}}

@section('content')
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item">
				<div class="hero-text">
					<div class="ht-cata">Nature</div>
					<h2>Photo Studio</h2>
					<p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative lifestyle photo studio making emotional photography.</p>
					<a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
				</div>
				<div class="hi-bg set-bg" data-setbg="img/slider-1.jpg"></div>
			</div>
			<div class="hero-item">
				<div class="hero-text">
					<div class="ht-cata">Nature</div>
					<h2>Photo Studio</h2>
					<p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative lifestyle photo studio making emotional photography.</p>
					<a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
				</div>
				<div class="hi-bg set-bg" data-setbg="img/slider-2.jpg"></div>
			</div>
			<div class="hero-item">
				<div class="hero-text">
					<div class="ht-cata">Nature</div>
					<h2>Photo Studio</h2>
					<p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative lifestyle photo studio making emotional photography.</p>
					<a href="#" class="ht-btn">See More <i class="arrow_right"></i></a>
				</div>
				<div class="hi-bg set-bg" data-setbg="img/slider-3.jpg"></div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
@endsection