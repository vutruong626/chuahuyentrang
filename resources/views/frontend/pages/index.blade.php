@extends('frontend.master')
@section('content')

<!--main js file start-->
<div class="ne_slider_bottom_img_main_wrapper">
    <div class="container">
        <!-- slider cut -->
        @include('frontend.main-page.header')
        <!-- slider cut -->

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="ne_wn_img_main_wrapper yellow ne_wn_img_main_wrapper_index_2_banner_slider1">
                    <div class="ne_wn_img_overlay2"></div>
                    <div class="prs_webseri_video_sec_icon_wrapper ">
                        <ul>
                            <li>
                                <a class="test-popup-link button" rel='external'
                                    href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'>
                                    <img src="images/content/play_index.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h2>new</h2>
                    <div class="ne_wn_social_inner_wrapper">
                        <h3><a href="#">Award of the year</a></h3>
                        <ul class="ne_wn_social1_wrapper">
                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i>
                                    &nbsp;25 OCT, 2017</a>
                            </li>
                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i>
                                    &nbsp;07 : 00 am</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div
                    class="ne_wn_img_main_wrapper yellow ne_wn_img_main_wrapper_index_2_banner_slider2 ne_index_ii_banner">
                    <div class="ne_wn_img_overlay2"></div>
                    <div class="prs_webseri_video_sec_icon_wrapper ">
                        <ul>
                            <li>
                                <a class="test-popup-link button" rel='external'
                                    href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'>
                                    <img src="images/content/play_index.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h2>new</h2>
                    <div class="ne_wn_social_inner_wrapper">
                        <h3><a href="#">The clock is ticking </a></h3>
                        <ul class="ne_wn_social1_wrapper">
                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-calendar"></i>
                                    &nbsp;25 OCT, 2017</a>
                            </li>
                            <li data-animation="animated fadeInLeft"><a href="#"><i class="fa fa-clock-o"></i>
                                    &nbsp;07 : 00 am</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--resent news Start-->
<div class="ne_recent_news_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="ne_recent_left_side_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="ne_busness_main_slider_wrapper" style="margin-top: 0px;">
                                        <div class="ne_recent_heading_main_wrapper">
                                            <h2>TIN MỚI</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="ne_businees_slider_wrapper">
                                        <div class="owl-carousel owl-theme">
                                            @foreach($news as $vtnews)
                                            <div class="item">
                                                <div class="ne_re_left_top_main_wrapper">
                                                    <div class="ne_re_left_img_main_wrapper">
                                                        <img src="{{asset('storage/'.$vtnews->image)}}" alt="img">
                                                        <h2>{{$vtnews->title}}</h2>
                                                    </div>
                                                    <div
                                                        class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                        <h3><a href="#">{{$vtnews->seo_title}}</a></h3>
                                                        <ul class="ne_re_social1_wrapper">
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                        class="fa fa-calendar"></i>
                                                                    &nbsp;{{$vtnews->created_at}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="ne_busness_main_slider_wrapper">
                                        <div class="ne_recent_heading_main_wrapper">
                                            <h2>PHẬT SỰ</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="ne_sport_slider_wrapper">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        @foreach($phat_su1 as $vt_phat_su1)
                                                        <div class="ne_re_left_top_main_wrapper">
                                                            <div
                                                                class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                <img src="{{asset('storage/'.$vt_phat_su1->image)}}"
                                                                    alt="img">
                                                                <h2>{{$vt_phat_su1->title}}</h2>
                                                            </div>
                                                            <div class="ne_re_left_img_cont_main_wrapper">
                                                                <h3><a href="#">{{$vt_phat_su1->seo_title}}</a></h3>
                                                                <ul class="ne_re_social1_wrapper">
                                                                    <li data-animation="animated fadeInLeft"><a
                                                                            href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;{{$vt_phat_su1->created_at}}</a>
                                                                    </li>

                                                                </ul>
                                                                <p>{!! $vt_phat_su1->excerpt !!}</p>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        @foreach($phat_su6 as $vt_phat_su6)
                                                        <div class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top"
                                                            style="margin-bottom: 15px;">
                                                            <div class="ne_re_bottom_img">
                                                                <img src="{{asset('storage/'.$vt_phat_su6->image)}}"
                                                                    alt="rs_img">
                                                            </div>
                                                            <div class="ne_re_bottom_img_cont">
                                                                <h3 style="line-height: 20px;"><a
                                                                        href="#">{{$vt_phat_su6->seo_title}}</a></h3>
                                                                <p><a href="#"><i class="fa fa-calendar"></i>
                                                                        &nbsp;{{$vt_phat_su6->created_at}}</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_banner_adver_main_wrapper">
                                <a href="#">
                                    <img src="images/content/adverti_img.jpg" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="ne_busness_main_slider_wrapper">
                                        <div class="ne_recent_heading_main_wrapper">
                                            <h2>PHẬT GIÁO & ĐỜI SỐNG</h2>
                                        </div>
                                    </div>
                                </div>
                                @foreach($PG_DS as $vt_PG_DS)
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper1">
                                        <div class="ne_gt_left_img_main_wrapper">
                                            <img src="{{asset('storage/'.$vt_PG_DS->image)}}" alt="img">
                                            <h2>{{$vt_PG_DS->title}}</h2>
                                        </div>
                                        <div class="ne_gt_left_img_cont_main_wrapper">
                                            <h3><a href="#">{{$vt_PG_DS->seo_title}}</a></h3>
                                            <ul class="ne_re_social1_wrapper">
                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                            class="fa fa-calendar"></i>
                                                        &nbsp;{{$vt_PG_DS->created_at}}</a>
                                                </li>
                                            </ul>
                                            <p>{!!$vt_PG_DS->excerpt!!}</p>

                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="ne_busness_main_slider_wrapper">
                                                <div class="ne_recent_heading_main_wrapper">
                                                    <h2><i class="fas fa-dharmachakra"></i> PHẬT GIÁO & TUỔI TRẺ</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="ne_sport_slider_wrapper ne_sport_slider_wrapper_travels">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t1.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Proin gravida nibh
                                                                                vel velit auctor.</a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t2.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">
                                                                                Hands on with the Apple </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t3.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Google shifting threatens
                                                                            </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t4.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Tesla just lost its head
                                                                            </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t5.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Faangs diverge prospect</a>
                                                                        </h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t6.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">
                                                                                Beats something today</a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t1.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Proin gravida nibh
                                                                                vel velit auctor.</a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t2.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">
                                                                                Hands on with the Apple </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t3.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Google shifting threatens
                                                                            </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t4.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Tesla just lost its head
                                                                            </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t5.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Faangs diverge prospect</a>
                                                                        </h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t6.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">
                                                                                Beats something today</a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t1.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Proin gravida nibh
                                                                                vel velit auctor.</a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t2.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">
                                                                                Hands on with the Apple </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t3.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Google shifting threatens
                                                                            </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t4.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Tesla just lost its head
                                                                            </a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t5.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">Faangs diverge prospect</a>
                                                                        </h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div
                                                                    class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                    <div class="ne_tr_bottom_img">
                                                                        <img src="images/content/t6.jpg" alt="rs_img">
                                                                    </div>
                                                                    <div class="ne_tr_bottom_img_cont">
                                                                        <h3><a href="#">
                                                                                Beats something today</a></h3>
                                                                        <p><a href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2017</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="ne_indx_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper" style="padding: 0px 0px;">
                                <!-- <div class="ne_recent_heading_main_wrapper font_18px">
                                    <h2>Advertising</h2>
                                </div> -->
                                <div class="ne_sidebar_advertize_main_wrapper">
                                    <a href="#">
                                        <img src="{{asset('images/huyentrang-vt/Phuoc-Nguyen.jpg')}}" alt="img">
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                <div class="ne_recent_heading_main_wrapper font_18px">
                                    <h2>Thông báo</h2>
                                </div>
                                <div class="ne_sidebar_cate_list_wrappper">
                                    <ul>
                                        @foreach($notification as $vt_notification)
                                        <li style="font-size: 14px;"><a
                                                href="{{route('detail_notification',$vt_notification->slug)}}"><i
                                                    class="fa fa-bell"></i>
                                                &nbsp;&nbsp;{{$vt_notification->title}}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                <div class="ne_recent_heading_main_wrapper font_18px">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper">
                                    <div class="ne_pc_bottom_img">
                                        <img src="{{asset('images/content/pc1.jpg')}}" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">Etiam dignissim aliquet sed.</a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                    <div class="ne_pc_bottom_img">
                                        <img src="{{asset('images/content/pc2.jpg')}}" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">Google shifting threatens aliquet</a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                    <div class="ne_pc_bottom_img">
                                        <img src="images/content/pc3.jpg" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">
                                                Beats did some thing today</a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                    <div class="ne_pc_bottom_img">
                                        <img src="images/content/pc4.jpg" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">
                                                Hands on with the Apple </a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                    <div class="ne_pc_bottom_img">
                                        <img src="images/content/pc5.jpg" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">Etiam dignissim velit sed.</a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                <div class="ne_recent_heading_main_wrapper font_18px">
                                    <h2>Latest Articles</h2>
                                </div>
                                <div
                                    class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2 bab">
                                    <div class="ne_wn_img_overlay"></div>

                                    <div class="ne_wn_social_inner_wrapper">
                                        <h3><a href="#">Award of the year</a></h3>
                                        <ul class="ne_wn_social1_wrapper">
                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                        class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                            </li>
                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                        class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">
                                    <div class="ne_pc_bottom_img">
                                        <img src="images/content/pc6.jpg" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">Etiam dignissim aliquet velit sed.</a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">
                                    <div class="ne_pc_bottom_img">
                                        <img src="images/content/pc7.jpg" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">Beats did some thing today</a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">
                                    <div class="ne_pc_bottom_img">
                                        <img src="images/content/pc8.jpg" alt="rs_img">
                                    </div>
                                    <div class="ne_pc_bottom_img_cont">
                                        <h3><a href="#">Etiam dignissim velit sed.</a></h3>
                                        <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                <div class="ne_recent_heading_main_wrapper font_18px">
                                    <h2>latest reviews</h2>
                                </div>
                                <div class="ne_lr_main_section_wrapper">
                                    <div class="ne_lr_img_wrapper">
                                        <img src="images/content/lr1.jpg" alt="img">
                                    </div>
                                    <div class="ne_lr_img_cont_wrapper">
                                        <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="ne_lr_star_right_section hidden-md">
                                            <h4>5.0</h4>
                                        </div>
                                        <div class="ne_lr_img_cont_heading_wrapper">
                                            <h3><a href="#">Velebrity Fashion</a></h3>
                                            <p>NewsX is a Creative and Unique</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ne_lr_main_section_wrapper ne_lr_main_section_wrapper2">
                                    <div class="ne_lr_img_wrapper">
                                        <img src="images/content/lr2.jpg" alt="img">
                                    </div>
                                    <div class="ne_lr_img_cont_wrapper">
                                        <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                        </div>
                                        <div class="ne_lr_star_right_section hidden-md">
                                            <h4>4.5</h4>
                                        </div>
                                        <div class="ne_lr_img_cont_heading_wrapper">
                                            <h3><a href="#">Easy teriyaki </a></h3>
                                            <p>NewsX is a Creative and Unique</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ne_lr_main_section_wrapper ne_lr_main_section_wrapper2">
                                    <div class="ne_lr_img_wrapper">
                                        <img src="images/content/lr3.jpg" alt="img">
                                    </div>
                                    <div class="ne_lr_img_cont_wrapper">
                                        <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                            <i class="fa fa-star-half"></i>
                                        </div>
                                        <div class="ne_lr_star_right_section hidden-md">
                                            <h4>3.5</h4>
                                        </div>
                                        <div class="ne_lr_img_cont_heading_wrapper">
                                            <h3><a href="#">Faangs diverge </a></h3>
                                            <p>NewsX is a Creative and Unique</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--resent news End-->
<!-- prs patner slider Start -->
<div class="prs_patner_main_section_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_pn_slider_wraper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="images/content/p1.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="images/content/p2.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="images/content/p3.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="images/content/p4.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="images/content/p5.jpg" alt="patner_img">
                            </div>
                        </div>
                        <div class="item">
                            <div class="prs_pn_img_wrapper">
                                <img src="images/content/p6.jpg" alt="patner_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection