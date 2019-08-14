@extends('frontend.master')
@section('content')
<!-- ne inner title start -->
<div class="ne_inner_title_main_section">
    <div class="ne_inner_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">
                <div class="ne_ts_inner_wrapper ne_ts_title_inner_wrapper">
                    <div class="ne_tran_label_wrapper">
                        <h3>Trending</h3>
                    </div>
                    <div class="ne_tranding_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="ne_ts_inner_content">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                    <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ne_ts_inner_content">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                    <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ne_ts_inner_content">
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh</p>
                                    <h3 class="hidden-sm"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2017</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ne_inner_title_nev_wrapper">
                    <ul>
                        <li><i class="fa fa-home"></i> <a href="#">Home</a>&nbsp;&nbsp; ></li>
                        <li><i class="fa fa-folder-open"></i> Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ne inner title End -->
<div class="ne_cu_map_main_wrapper">
    <div class="container">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1165.0156591956145!2d106.64781661377503!3d10.839603863041752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175299e922e9179%3A0x94d9116527e0e45e!2zQ2jDuWEgSHV54buBbiBUcmFuZw!5e0!3m2!1sen!2s!4v1565758258567!5m2!1sen!2s"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="ne_map_content_wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_contact_heading">
                        <div class="ne_recent_heading_main_wrapper">
                            <h2>some line for news express</h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                                amet mauris.This is version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                aliquet. ean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                                nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                                amet mauris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ne_map_contact_form_left_wrapper">
            <div class="gc_map_add_wrapper gc_map_add_wrapper1">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <h3>974 Quang Trung, Phường 8, Gò Vấp, Hồ Chí Minh, Vietnam</h3>
                </div>
            </div>
            <div class="gc_map_add_wrapper">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <p>0918993459
                        <br>(+84) 918-993-459</p>
                </div>
            </div>
            <div class="gc_map_add_wrapper">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <p><a href="#">support@example.com</a>
                        <br><a href="#">hello@example.com</a>
                    </p>
                </div>
            </div>
            <div class="gc_map_add_wrapper">
                <div class="gc_map_location_icon_wrapper"> <i class="fa fa-map-marker"></i>
                </div>
                <div class="gc_map_location_icon_cont_wrapper">
                    <p><a href="#">support@example.com</a>
                        <br><a href="#">hello@example.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="ne_map_contact_form_right_wrapper">
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1">
                            <input type="text" name="full_name" placeholder="First Name" class="require">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1 ne_map_form_input3">
                            <input type="text" name="full_name" placeholder="Last Name" class="require">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1 ne_map_form_input2">
                            <input type="email" name="email" placeholder="Email" class="require" data-valid="email"
                                data-error="Email should be valid.">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ne_map_form_input1 ne_map_form_input2">
                            <textarea rows="6" name="message" placeholder="..Message.." class="require"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="response"></div>
                        <div class="ne_map_form_input1">
                            <button type="button" class="submitForm">send us</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
       
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="ne_contect_map_slidermain_wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ne_busness_main_slider_wrapper ne_busness_main_slider_wrapper_responsive">
                            <div class="ne_recent_heading_main_wrapper">
                                <h2>XEM VĂN PHÒNG KHÁC CỦA CHÚNG TÔI</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="ne_contact_map_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="ne_cont_map_slider_content">
                                        <div class="ne_cont_map_img">
                                            <img src="images/content/contact/map1.jpg" alt="img">
                                        </div>
                                        <div class="ne_cont_map_img_content">
                                            <p><i class="fa fa-phone"></i> &nbsp;+61 3 8376 6284</p>
                                            <p><i class="fa fa-location-arrow"></i> &nbsp;<a
                                                    href="#">info@newsexpress.com</a>
                                            </p>
                                            <h5>4 Mount Road, Mount Eden, Auckland
                                                (Westport)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_cont_map_slider_content">
                                        <div class="ne_cont_map_img">
                                            <img src="images/content/contact/map2.jpg" alt="img">
                                        </div>
                                        <div class="ne_cont_map_img_content">
                                            <p><i class="fa fa-phone"></i> &nbsp;+61 3 8376 6284</p>
                                            <p><i class="fa fa-location-arrow"></i> &nbsp;<a
                                                    href="#">info@newsexpress.com</a>
                                            </p>
                                            <h5>4 Mount Road, Mount Eden, Auckland
                                                (Westport)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ne_cont_map_slider_content">
                                        <div class="ne_cont_map_img">
                                            <img src="images/content/contact/map3.jpg" alt="img">
                                        </div>
                                        <div class="ne_cont_map_img_content">
                                            <p><i class="fa fa-phone"></i> &nbsp;+61 3 8376 6284</p>
                                            <p><i class="fa fa-location-arrow"></i> &nbsp;<a
                                                    href="#">info@newsexpress.com</a>
                                            </p>
                                            <h5>4 Mount Road, Mount Eden, Auckland
                                                (Westport)</h5>
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
<!-- prs patner slider End -->
@endsection