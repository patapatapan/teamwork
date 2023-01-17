@extends('layouts.master')
@section('content')
    <style>
        .sitebtn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #0c18ff;
            color: aliceblue;
            text-align: center;
            line-height: 30px;
        }

        #sitebtn {
            text-decoration: none;
            font-size: 16px;
            font-family: arial;
            font-weight: 700;
        }

        .div img {
            height: 400px;
        }

        .slider_container {
            margin: 90px auto;
            width: 700px;
            height: 280px;
            position: relative;
            border: 20px none;
            border-color: #fff;
            border-bottom-width: 100px;
            box-shadow: #666 0 0 5px;

        }

        .slider_container div {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .slider_container div {
            -webkit-animation: round 20m linear infinite;
            animation: round 20s linear infinite;
        }

        @-webkit-keyframes round {
            4% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 0 - 1秒 淡入*/
            }

            20% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 1- 5秒靜止*/
            }

            24% {
                opacity: 0;
                filter: alpha(opacity=0);
                /* 5-6秒淡出*/
            }
        }

        @keyframes round {
            4% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 0 - 1秒 淡入*/
            }

            20% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 1- 5秒靜止*/
            }

            24% {
                opacity: 0;
                filter: alpha(opacity=0);
                /* 5-6秒淡出*/
            }
        }

        .slider_container div:nth-child(5) {
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
        }

        .slider_container div:nth-child(4) {
            -webkit-animation-delay: 4s;
            animation-delay: 4s;
        }

        .slider_container div:nth-child(3) {
            -webkit-animation-delay: 8s;
            animation-delay: 8s;
        }

        .slider_container div:nth-child(2) {
            -webkit-animation-delay: 12s;
            animation-delay: 12s;
        }

        .slider_container div:nth-child(1) {
            -webkit-animation-delay: 16s;
            animation-delay: 16s;
        }

        .slider_container span {
            color: rgb(255, 255, 255);
            position: absolute;
            left: 0%;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            top: 280px;
            width: 700px;
            height: 20px;
            font-size: 20px;
            text-align: right;
            line-height: 20px;
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        .slider_container:hover span {
            width: 100%;
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }

        .slider_container:hover div {
            -webkit-animation-play-state: paused;
            animation-play-state: paused;
        }

        //外層的響應式容器
        .embed-responsive {
            position: relative;
            display: block;
            height: 0;
            padding: 0;
            overflow: hidden;
            padding-bottom: 56.25%;
        }

        //被嵌入的內容
        .embed-responsive .embed-responsive-item {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0 none;
        }

        .rwd_slider_container_wrapper {
            width: 700px;
            max-width: 100%;
            box-sizing: border-box;
            padding: 20px;
            margin: 0 auto;
            border: none;
        }

        .rwd_slider_container {
            position: relative;
            display: block;
            height: 0;
            padding: 0;
            box-sizing: border-box;
            padding-bottom: calc(70% + 150px);
            border: none;
        }

        .rwd_slider_container .slider_container {
            box-shadow: none;
            margin: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            margin: 0;
            box-sizing: border-box;
            border: none;
            background-color: none;
        }

        .rwd_slider_container .slider_container div {
            width: 100%;
            line-height: 0;
        }

        .rwd_slider_container .slider_container span {
            top: 93%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            font-family: Arial, Helvetica, sans-serif;
        }

        @-webkit-keyframes round {
            4% {
                opacity: 1;
                filter: alpha(opacity=100);
                left: 0;
                /* 0 - 1秒 滑入*/
            }

            20% {
                opacity: 1;
                filter: alpha(opacity=100);
                left: 0;
                /* 1- 5秒靜止*/
            }

            24% {
                opacity: 1;
                filter: alpha(opacity=100);
                left: -100%;
                /* 5-6秒滑出*/
            }

            26% {
                opacity: 0;
                filter: alpha(opacity=0);
                left: -100%;
                /* 6-6.5秒變透明*/
            }

            28% {
                opacity: 0;
                filter: alpha(opacity=0);
                left: 100%;
                /* 6.5-7秒回到起始位置*/
            }
        }

        .slider_container:before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: -100%;
            opacity: 1;
            filter: alpha(opacity=100);
            width: 100%;
            height: 100%;
            background-image: url(bk-image.jpg);
            animation: bk 20s linear;
        }

        @keyframes bk {
            0% {
                left: 0;
                /* 初始位置*/
            }

            4% {
                left: -100%;
                /* 0 - 1秒 滑出*/
            }
        }

        @keyframes bk {
            0% {
                left: 0;
                /* 初始位置*/
            }

            4% {
                left: -100%;
                /* 0 - 1秒 滑出*/
            }
        }

    </style>
    <section class="blog-section">

        {{-- <div class="feature-blog set-bg" data-setbg="img/blog/big.jpg">
            <div class="container">
                <div class="fb-cata">Nature</div>
                <h2>The Function Of The Logo</h2>
                <p>Cassi – a creative lifestyle photo studio making emotional photography communicate a story. Creative
                    lifestyle photo studio making emotional photography.</p>
                <a href="#" class="site-btn">Read More <i class="arrow_right"></i></a>
            </div>
        </div> --}}


        {{-- 輪播畫面 --}}
        <div class="rwd_slider_container_wrapper">
            <div class="rwd_slider_container">
                <div class="slider_container">
                    @for ($i = 0; $i < count($articles); $i++)
                        <div>

                            {{-- <div class="label">{{$cgy[$i]->title}}</div> --}}

                            <img src="{{ Voyager::image($articles[$i]->pic) }}"
                                alt="{{ Voyager::image($articles[$i]->pic) }}"style="height:500px;width:700px;border-radius:8%" />

                            <span class="info">{{ $articles[$i]->title }}</span>

                            <a href="{{ asset('blog_single/' . $articles[$i]->id) }}" id="sitebtn"class="sitebtn">想看更多<i
                                    class="arrow_right"></i></a>

                        </div>
                    @endfor
                </div>
            </div>
        </div>



        @for ($x = 0; $x < ceil(count($bottom_cgies)/11); $x++)
            <div class="blog-post-items">
                @for ($i = $x; $i < $x + 4; $i++)
                    @if ($i == 0)
                        <div class="blog-col">
                        @elseif($i == 3)
                            <div class="blog-col bc-md">
                            @else
                                <div class="blog-col bc-sm">
                    @endif
                    <div class="blog-item set-bg" data-setbg="{{ Voyager::image($bottom_articles[$i]->pic) }}">
                        <div class="blog-text">
                            <div class="bi-cata">{{ $bottom_cgies[$i]->title }}</div>
                            <h6><a
                                    href="{{ asset('blog_single/' . $bottom_articles[$i]->id) }}">{{ $bottom_articles[$i]->title }}</a>
                            </h6>
                        </div>
                    </div>
            </div>
        @endfor

        @for ($i = 4 * ($x + 1); $i < 4 * ($x + 1) + 3; $i++)
            @if ($i == 4)
                <div class="blog-col">
                @elseif($i == 6)
                    <div class="blog-col bc-md">
                    @else
                        <div class="blog-col bc-big">
            @endif
            <div class="blog-item set-bg" data-setbg="{{ Voyager::image($bottom_articles[$i]->pic) }}">
                <div class="blog-text">
                    <div class="bi-cata">{{ $bottom_cgies[$i]->title }}</div>
                    <h6><a href="{{ asset('blog_single/' . $bottom_articles[$i]->id) }}">{{ $bottom_articles[$i]->title }}</a></h6>
                </div>
            </div>
            </div>
        @endfor


        @for (4 * ($x + 1) + 3; $i < 4 * ($x + 2) + 3; $i++)
            @if ($i == 7)
                <div class="blog-col">
                @elseif($i == 10)
                    <div class="blog-col bc-md">
                    @else
                        <div class="blog-col bc-sm">
            @endif
            <div class="blog-item set-bg" data-setbg="{{ Voyager::image($bottom_articles[$i]->pic) }}">
                <div class="blog-text">
                    <div class="bi-cata">{{ $bottom_cgies[$i]->title }}</div>
                    <h6><a href="{{ asset('blog_single/' . $bottom_articles[$i]->id) }}">{{ $bottom_articles[$i]->title }}</a></h6>
                </div>
            </div>
            </div>
        @endfor
        @endfor
        {{ $bottom_articles->links() }}
        {{-- <div class="blog-col bc-sm">
            <div class="blog-item set-bg" data-setbg="img/blog/2.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Nature</div>
                    <h6><a href="blog-single.html">Usually they involve, losing weight, quitting smoking.</a></h6>
                </div>
            </div>
        </div>
        <div class="blog-col bc-sm">
            <div class="blog-item set-bg" data-setbg="img/blog/3.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Tree</div>
                    <h6><a href="blog-single.html">Hypnosis quit smoking methods maintain caused.</a></h6>
                </div>
            </div>
        </div>
        <div class="blog-col bc-md">
            <div class="blog-item set-bg" data-setbg="img/blog/4.jpg">
                <div class="blog-text">
                    <div class="bi-cata">River</div>
                    <h6><a href="blog-single.html">Any time we start something new it is exciting and we are very.</a>
                    </h6>
                </div>
            </div>
        </div>




        <div class="blog-col">
            <div class="blog-item set-bg" data-setbg="img/blog/5.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Nature</div>
                    <h6><a href="blog-single.html">Every former smoker can tell you just how hard it is to stop smoking
                            cigarettes.</a></h6>
                </div>
            </div>
        </div>
        <div class="blog-col bc-big">
            <div class="blog-item set-bg" data-setbg="img/blog/6.jpg">
                <div class="blog-text">
                    <div class="bi-cata">City</div>
                    <h6><a href="blog-single.html">What are the odds of someone doing extraordinary things if that
                            person lost their sight.</a></h6>
                </div>
            </div>
        </div>
        <div class="blog-col bc-md">
            <div class="blog-item set-bg" data-setbg="img/blog/7.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Beach</div>
                    <h6><a href="blog-single.html">Speaking comes to most people as naturally as breathing.</a></h6>
                </div>
            </div>
        </div>




        <div class="blog-col">
            <div class="blog-item set-bg" data-setbg="img/blog/8.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Nature</div>
                    <h6><a href="blog-single.html">The purpose of all life is development and enrichment.</a></h6>
                </div>
            </div>
        </div>
        <div class="blog-col bc-sm">
            <div class="blog-item set-bg" data-setbg="img/blog/9.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Sea</div>
                    <h6><a href="blog-single.html">That nothing good could ever come from a bad childhood.</a></h6>
                </div>
            </div>
        </div>
        <div class="blog-col bc-sm">
            <div class="blog-item set-bg" data-setbg="img/blog/10.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Mountain</div>
                    <h6><a href="blog-single.html">Speaking comes to most people as naturally as</a></h6>
                </div>
            </div>
        </div>
        <div class="blog-col bc-md">
            <div class="blog-item set-bg" data-setbg="img/blog/11.jpg">
                <div class="blog-text">
                    <div class="bi-cata">Nature</div>
                    <h6><a href="blog-single.html">We’ve all heard how crucial it is to set intentions, goals and</a>
                    </h6>
                </div>
            </div>
        </div> --}}
        </div>
    </section>
@endsection
