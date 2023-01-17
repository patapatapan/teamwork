@extends('layouts.master')

@section('content')
<section class="blog-single-section">
		<div class="blog-single-header set-bg" data-setbg="img/blog/big.jpg">
			<div class="container">
        {{-- 資料匯入 --}}
				<div class="fb-cata">{{$cgy->title}}</div>
				<h2>{{$sit->title}}</h2>
				<div class="bs-metas">
					<div class="bs-meta">By Colorlib</div>
					<div class="bs-meta">{{$sit->created_at->locale('zh_TW')}}</div>
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
								<img src="{{Voyager::image($sit->getFirstPic())}}" alt="">
							</a>
						</div>
						<div class="col-md-6">
							<a class="fresco" href="img/blog/bg-2.jpg" data-fresco-group="blog-gallery">
								<img src="{{Voyager::image($sit->getFirstPic())}}" alt="">
							</a>
							<div class="row">
								<div class="col-sm-6">
									<a class="fresco" href="img/blog/bg-3.jpg" data-fresco-group="blog-gallery">
										<img src="{{Voyager::image($sit->getFirstPic())}}" alt="">
									</a>
								</div>
								<div class="col-sm-6">
									<a class="fresco" href="#" data-fresco-group="blog-gallery">
										<img src="{{Voyager::image($sit->getFirstPic())}}" alt="">
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
								<span>分享:</span>
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
				<div class="blog-item recent-blog set-bg" data-setbg="{{Voyager::image($rand_sit->getFirstPic())}}">
					<div class="blog-text ml-auto">
						<div class="bi-cata">{{$rand_cgy->title}}</div>
						<h6><a href="{{url('blog_single/'.$rand_sit->id)}}">{{$rand_sit->content_small}}</a></h6>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="blog-item recent-blog set-bg" data-setbg="{{Voyager::image($rand_sit2->getFirstPic())}}">
					<div class="blog-text">
						<div class="bi-cata">{{$rand_cgy2->title}}</div>
						<h6><a href="{{url('blog_single/'.$rand_sit2->id)}}">{{$rand_sit2->content_small}}</a></h6>
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
@endsection

