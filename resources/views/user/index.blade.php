@extends('user.layouts.app')
@section('title')
    Conjioo Hotel at Jakarta Airport
@endsection

@section('content-user')

    <!-- Hero Slider Begin -->
    <div class="hero-slider">
        <div class="slider-item">
            <div class="single-slider-item set-bg video-background" data-setbg="{{ asset('img/slider1.mp4') }}">
				<video autoplay loop muted>
					<source src="{{ asset('img/slider1.mp4') }}" type="video/mp4">
					Your browser does not support the video tag.
				</video>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 >Conjioo Hotel <br>at Kuta Bali</h1><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-nav">
                                <a href="" class="single-slider-nav">
                                    <img src="img/jakarta.png" alt="" style="width:180px">
                                    <div class="nav-text active" style="text-align: center;">
                                        <p style="font-size: 15px;">Conjioo Hotel<br>Jakarta Airport</p>
                                    </div>
                                </a>
                                <a href="#" class="single-slider-nav">
                                    <img src="img/sumbawa.jpeg" alt="" style="width:168px;height:215px">
                                    <div class="nav-text" style="text-align: center;">
                                        <p style="font-size: 15px;">Conjioo Hotel <br>Sumbawa</p>
                                    </div>
                                </a>
                                <a href="#" class="single-slider-nav">
                                    <img src="img/kuta.jpeg" alt="" style="width:168px;height:215px">
                                    <div class="nav-text" style="text-align: center;">
                                        <p style="font-size: 15px;">Conjioo Hotel <br>Kuta</p>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Slider End -->

    <!-- Room Availability Section Begin -->
    <section class="room-availability spad">
        <div class="container">
            <!-- <div class="room-check">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-item">
                            <div class="room-pic-slider room-pic-item owl-carousel">
                                <div class="room-pic">
                                    <img src="img/room-slider/room-1.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="img/room-slider/room-2.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="img/room-slider/room-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="room-text">
                                <div class="room-title">
                                    <h2>Junior Suite</h2>
                                    <div class="room-price">
                                        <span>From</span>
                                        <h2>$252</h2>
                                    </div>
                                </div>
                                <div class="room-features">
                                    <div class="room-info">
                                        <i class="flaticon-019-television"></i>
                                        <span>Smart TV</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-029-wifi"></i>
                                        <span>High Wi-fii</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-003-air-conditioner"></i>
                                        <span>AC</span>
                                    </div>
                                    <div class="room-info">
                                        <i class="flaticon-036-parking"></i>
                                        <span>Parking</span>
                                    </div>
                                    <div class="room-info last">
                                        <i class="flaticon-007-swimming-pool"></i>
                                        <span>Pool</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="check-form">
                            <h2>Check Availability</h2>
                            <form action="#">
                                <div class="datepicker">
                                    <div class="date-select">
                                        <p>From</p>
                                        <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                                        <img src="img/calendar.png" alt="">
                                    </div>
                                    <div class="date-select to">
                                        <p>To</p>
                                        <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                                        <img src="img/calendar.png" alt="">
                                    </div>
                                </div>
                                <div class="room-quantity">
                                    <div class="single-quantity">
                                        <p>Adults</p>
                                        <div class="pro-qty"><input type="text" value="0"></div>
                                    </div>
                                    <div class="single-quantity">
                                        <p>Children</p>
                                        <div class="pro-qty"><input type="text" value="0"></div>
                                    </div>
                                    <div class="single-quantity last">
                                        <p>Rooms</p>
                                        <div class="pro-qty"><input type="text" value="0"></div>
                                    </div>
                                </div>
                                <div class="room-selector">
                                    <p>Room</p>
                                    <select class="suit-select">
                                        <option>Eg. Master suite</option>
                                        <option value="">Double Room</option>
                                        <option value="">Single Room</option>
                                        <option value="">Special Room</option>
                                    </select>
                                </div>
                                <button type="button">CHECK Availability <i class="lnr lnr-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="about-room">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2>“Comfort, convenience, and a home-like atmosphere, 
                            making it the perfect spot before your next adventure”.</h2>
                    </div>
                </div>
                <div class="about-para">
                    <div class="row">
                        <div class="col-lg-6 fade-right" >
                            <img src="img/lobby.png" alt="" style="border-radius: 20px">
                        </div>
                        <div class="col-lg-6 fade-left">
							<div class="mobile-hidden" style="border-radius: 20px">
								<p>“Just minutes from Jakarta’s Soekarno-Hatta Airport, Conjioo Hotel offers the perfect blend of comfort and convenience for every traveler. Whether you're here for a quick stopover or a relaxing staycation, our cozy rooms and warm hospitality will make you feel right at home.
                                    <br>
                                    <br>
                                    Unwind, recharge, and enjoy the comfort of home before continuing your next adventure at Conjioo Hotel – the ideal place for your journey.“</p>
							</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Availability Section End -->

    <!-- Facilities Section Begin -->
    <div class="facilities-section spad">
        <div class="container">
            <div class="facilities-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h1>Our Rooms</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 fade-bottom">
                        <div class="facilities-img set-bg" style="border-radius: 20px" data-setbg="img/room/deluxe.png"></div>
                    </div>
                    <div class="col-lg-6 p-0 fade-bottom">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Deluxe Double/Twin</h2>
                                <p><strong>Room Size 19 m²</strong><br>

                                    This twin/double room has a balcony, tea/coffee maker and electric kettle.</p>
                                <a href="{{ route('user.deluxe') }}" class="primary-btn fac-btn">Visit Room <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2 fade-bottom">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Premiere</h2>
                                <p><strong>Room Size 22 m²</strong><br>

                                    This double room has a balcony, tea/coffee maker and electric kettle.</p>
                                <a href="{{ route('user.premiere') }}" class="primary-btn fac-btn">Visit Room <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1 fade-bottom">
                        <div class="facilities-img set-bg" data-setbg="img/room/premiere.png" style="border-radius: 20px"></div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-6 p-0 fade-bottom">
                        <div class="facilities-img set-bg" data-setbg="img/room/superior.png" style="border-radius: 20px"></div>
                    </div>
                    <div class="col-lg-6 p-0 fade-bottom">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Superior Room</h2>
                                <p><strong>Area 16 m²</strong><br>

                                    A minimalistic approach to for your comfortable stay, our superior room is perfect for a short stopover or even long stay.</p>
                                <a href="{{ route('user.superior') }}" class="primary-btn fac-btn">Visit Room <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
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

    <!-- Follow Instagram Section Begin -->
    <section class="follow-instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Follow us on Instagram <a style="color: black;" href="https://www.instagram.com/conjioohoteljakarta/">@conjioohoteljakarta</a></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Instagram Section End -->

    <!-- Footer Room Pic Section Begin -->
    <div class="footer-room-pic">
        <div class="container-fluid">
            <div class="row">
                <img src="img/gallery/instagram1.jpg" alt="">
                <img src="img/gallery/instagram2.jpg" alt="">
                <img src="img/gallery/instagram3.jpg" alt="">
                <img src="img/gallery/instagram4.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Footer Room Pic Section End -->
@endsection