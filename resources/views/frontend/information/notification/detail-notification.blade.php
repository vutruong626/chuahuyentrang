@extends('frontend.master')
@section('content')

<!-- prs gallery wrapper Start -->
<div class="prs_gallery_main_section_wrapper prs_gallery_main_section_wrapper_inner_photo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_gallery">
                    <div class="ne_recent_heading_main_wrapper">
                        <h2>Thông báo</h2>
                    </div>
                </div>
                <div class="ne_gallery_photo_social_wrapper">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ne_re_left_top_main_wrapper ne_re_left_top_main_wrapper_innerphoto_single_img">
                    <div class="ne_re_left_img_cont_main_wrapper">
                        
                        <p>{!! $notification->body !!}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
@endsection