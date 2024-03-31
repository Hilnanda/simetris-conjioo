@extends('user.layouts.app')
@section('title')
    Conjioo Hotel at Jakarta Airport
@endsection

@section('content-user')


    <!-- Hero Slider Begin -->
    <section class="hero-section set-bg" data-setbg="img/detail-superior.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Our Rooms</h1>
                    </div>
                </div>
                <!-- <div class="page-nav">
                    <a href="./index.html" class="left-nav"><i class="lnr lnr-arrow-left"></i> Home</a>
                    <a href="./services.html" class="right-nav">Services <i class="lnr lnr-arrow-right"></i></a>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    

    <!-- Facilities Section Begin -->
    <div class="facilities-section spad">
        <div class="container">
            <div class="facilities-content">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="facilities-img set-bg" data-setbg="img/room/superior.png"></div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Superior Room</h2>
                                <span><strong>Area 16 m²</strong>
                                    <br>
                                    <br>

                                    A minimalistic approach to for your comfortable stay, our superior room is perfect for a short stopover or even long stay.
                                </span><br><br>
                                <span class="mb-0">
                                    In your private bathroom: 
                                </span>
                                
                                <div class="row" style="margin-top: 7px;">
                                    <div class="col-md-6">
                                        &check; Free toiletries <hr class="hr-list">
                                        &check; Shower <hr class="hr-list">
                                        &check; Toilet <hr class="hr-list">
                                    </div>
                                    <div class="col-md-6">
                                        &check; Hairdryer <hr class="hr-list">
                                        &check; Toilet paper <hr class="hr-list">
                                    </div>
                                </div>
                                <br>
                                <span class="mb-0">
                                    View
                                </span>
                                <div class="row" style="margin-top: 7px;">
                                    <div class="col-md-6">
                                        &check; City View <hr class="hr-list">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2 fade-bottom">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <span class="mb-0">
                                    Room Facilities:
                                </span>
                                <div class="row" style="margin-top: 7px;">
                                    <div class="col-md-12">
                                        &check; Balcony view <hr class="hr-list">
                                        &check; Tea/Coffee maker <hr class="hr-list">
                                        &check; Air conditioning <hr class="hr-list">
                                        &check; Safety Box <hr class="hr-list">
                                        &check; Electric kettle <hr class="hr-list">
                                        &check; Smart TV <hr class="hr-list">
                                        &check; Telephone <hr class="hr-list">
                                        &check; Netflix and Satellite Channels <hr class="hr-list">
                                        &check; Iron <hr class="hr-list">
                                        &check; Wake-up service/Alarm clock <hr class="hr-list">
                                    </div>
                                </div>
                                <br>
                                <span class="mb-0">
                                    Smooking:
                                </span>
                                <div class="row" style="margin-top: 7px;">
                                    <div class="col-md-12">
                                        &check; Non Smoking <hr class="hr-list">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1 fade-bottom">
                        <div class="facilities-img set-bg" data-setbg="img/room/superior2.png"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Section End -->

    <!-- <div class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h1>Guestbook</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-item">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="testimonial-1" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris,
                                        bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna
                                        fermentum ornare.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="testimonial-2" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris,
                                        bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna
                                        fermentum ornare.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="testimonial-3" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris,
                                        bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna
                                        fermentum ornare.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-author-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a data-toggle="tab" href="#testimonial-1" role="tab" class="show active">
                                    <div class="author-pic">
                                        <img src="img/testimonial/author-1.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>John Doe <span>Berlin</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#testimonial-2" role="tab">
                                    <div class="author-pic">
                                        <img src="img/testimonial/author-2.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>John Doe <span>Berlin</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#testimonial-3" role="tab">
                                    <div class="author-pic">
                                        <img src="img/testimonial/author-3.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>John Doe <span>Berlin</span></h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    @include('user.includes.foot-instagram')

    

@endsection