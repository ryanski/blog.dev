@extends('layouts.master')
@section('top-script')
@stop

@section('content')
		

	
   

        <!--
        Home Slider
        ==================================== -->
        <section id="home">     
            <div id="home-carousel" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <!--/.carousel-indicators-->

                <div class="carousel-inner">

                    <div class="item active"  style="background-image: url('img/slider/chilemountains.jpg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>WELCOME! <br>Take a look around.</h2>
                                <p>Click on my blog to here about my newest adventures around the globe, my coding challenges, and bartender hijinxes!</p>
                            </div>
                        </div>
                    </div>              

                    <div class="item" style="background-image: url('img/slider/buenosAires.jpg')">                
                        <div class="carousel-caption">
                            <div class="animated bounceInDown">
                                <h2>HELLO WORLD! <br>WE ARE KASPER,WE MAKE ART.</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('img/slider/codingbeer.jpg')">                 
                         <div class="carousel-caption">
                            <div class="animated bounceInUp">
                                <h2>HELLO WORLD! <br>WE ARE KASPER,WE MAKE ART.</h2>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.carousel-inner-->
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a class="sl-next" href="#home-carousel" data-slide="next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>

            </div>
        </section>
        <!--
        End #home Slider
        ========================== -->

        
        <!--
        #service
        ========================== -->
       {{--  <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown">
                            <h2>Services</h2>    
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="img/icons/monitor.png" class="media-object" alt="Monitor">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="img/icons/cog.png" alt="Cog">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="img/icons/ruler.png" alt="Ruler">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img src="img/icons/camera.png" alt="Camera">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>
                    </div>

                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section> --}}
        <!--
        End #service
        ========================== -->

        <!--
        #service-bottom
        ========================== -->
        
      {{--   <section id="service-bottom">
            <div class="container">
                    <div class="mobile-device">
                       <img data-wow-delay="0.2s" class="img-responsive black  wow fadeInLeftBig" src="img/icons/iphone-black.png" alt="iPhone Black">
                        <img data-wow-delay="0.5s" class="img-responsive white  wow fadeInLeftBig" src="img/icons/iphone-white.png" alt="iPhone White">
                    </div>
                <div class="service-features wow fadeInRight">
                    <h3>OUR DESIGNS COMES WITH...</h3>
                    <ul>
                        <li>Responsive Design</li>
                        <li>Modern And Clean Design</li>
                        <li>Clean Code</li>
                        <li>Browser Friendly</li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <!--
        End #service-bottom
        ========================== -->


        <!--
        #Portfolio
        ========================== -->
        
        <section id="portfolio">

            <div class="section-title text-center wow fadeInDown">
                <h2>Services</h2>    
                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
            </div>
            
            <nav class="project-filter clearfix text-center wow fadeInLeft"  data-wow-delay="0.5s">
                <ul class="list-inline">
                    <li><a href="javascript:;" class="filter" data-filter="all">All</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".app">App</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".photography">Photography</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".web">Web</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".print">Print</a></li>
                </ul>
            </nav>

            <div id="projects" class="clearfix">

                <figure class="mix portfolio-item app">
                    <img class="img-responsive" src="img/portfolio/portfolio-1.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-1.jpg" title="Title One" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item photography">
                    <img class="img-responsive" src="img/portfolio/portfolio-2.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-2.jpg" title="Title Two" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item web">
                    <img class="img-responsive" src="img/portfolio/portfolio-3.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-3.jpg" title="Title Three" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item print">
                    <img class="img-responsive" src="img/portfolio/portfolio-4.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-4.jpg" title="Title Four" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item app">
                    <img class="img-responsive" src="img/portfolio/portfolio-4.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-4.jpg" title="Title Five" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item photography">
                    <img class="img-responsive" src="img/portfolio/portfolio-1.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-1.jpg" title="Title Six" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item web app">
                    <img class="img-responsive" src="img/portfolio/portfolio-2.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-2.jpg" title="Title Seven" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item print web">
                    <img class="img-responsive" src="img/portfolio/portfolio-3.jpg" alt="Portfolio Item">
                    <a href="img/portfolio/portfolio-3.jpg" title="Title Eight" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Awesome Image</h3>
                        <span>Photography</span>
                    </figcaption>
                </figure>

            </div> <!-- end #projects -->

        </section>
        <!--
        End #Portfolio
        ========================== -->

        <!--
        #about
        ========================== -->
        <section id="about">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2>About Us</h2>    
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                    </div>
                    
                    {{-- <div class="about-us text-center wow fadeInDown">
                        <img src="img/about.png" alt="About Us" class="img-responsive">
                    </div> --}}
                </div>
            </div>
        </section>
        <!--
        End #about
        ========================== -->
        

        <!--
        #count
        ========================== -->
        
        {{-- <section id="count">
            <div class="container">
                <div class="row">
                    <div class="counter-section clearfix">

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-check-square fa-lg"></i>
                                </div>
                                <span data-to="120">0</span>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.8s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-users fa-lg"></i>                                    
                                </div>
                                <span data-to="152">0</span>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                    <i class="fa fa-clock-o fa-lg"></i>
                                </div>
                                <span data-to="2500">0</span>
                                <p>Working Hours</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.3s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                    <i class="fa fa-trophy fa-lg"></i>
                                </div>
                                <span data-to="150">0</span>
                                <p>Award Won</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> --}}
        <!--
        End #count
        ========================== -->

        <!--
        #about-us
        ========================== -->
       {{--  <section id="about-us">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-5 col-md-offset-1 wow fadeInLeft">

                        <div class="subtitle text-center">
                            <h3>Testimonials</h3>
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                        </div>

                        <div id="testimonial">

                            <div class="tst-item clearfix">
                                <div class="tst-single clearfix">
                                    <img src="img/client/1.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                                        <span>John Doe,CEO</span>
                                    </div>
                                </div>

                                <div class="tst-single clearfix">
                                    <img src="img/client/2.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                                        <span>John Doe,CEO</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tst-item">
                                <div class="tst-single clearfix">
                                    <img src="img/client/3.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                                        <span>John Doe,CEO</span>
                                    </div>
                                </div>
                                <div class="tst-single clearfix">
                                    <img src="img/client/1.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                                        <span>John Doe,CEO</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tst-item">
                                <div class="tst-single clearfix">
                                    <img src="img/client/2.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                                        <span>John Doe,CEO</span>
                                    </div>
                                </div>
                                <div class="tst-single clearfix">
                                    <img src="img/client/3.jpg" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                                        <span>John Doe,CEO</span>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end #testimonial -->
                    </div> <!-- end .col-md-5 -->

                    <div class="col-md-5 col-md-offset-1 wow fadeInRight">

                        <div class="subtitle text-center">
                            <h3>OUR SKILLS</h3>
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                        </div>

                        <div class="progress-bars">
                            
                            <span>HTML 5 - <small>95%</small></span>
                            <div class="progress"  data-progress="95">
                                <div class="bar"></div>
                            </div>
                            <span>CSS 3 - <small>93%</small></span>
                            <div class="progress"  data-progress="93">
                                <div class="bar"></div>
                            </div>
                            <span>PHP - <small>85%</small></span>
                            <div class="progress" data-progress="85">
                                <div class="bar"></div>
                            </div>
                            <span>mySQL - <small>87%</small></span>
                            <div class="progress kill-margin"  data-progress="87">
                                <div class="bar"></div>
                            </div>

                        </div>  <!-- progress-bars -->

                    </div>  <!-- end .col-md-5 -->

                </div>
            </div>
        </section> --}}
        <!--
        End #about-us
        ========================== -->

        <!--
        #quotes
        ========================== -->
        <section id="quotes">
            <div class="container">
                <div class="row wow zoomIn">
                    <div class="col-lg-12">
                        <div class="call-to-action text-center">
                            <p>“LIFE BEGINS AT THE END OF OUR COMFORT ZONE”</p>
                            <span>Someone wise</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #quotes
        ========================== -->

        <!--
        #pricing
        ========================== -->
        


        <!--
        #subscribe
        ========================== -->
       {{--  <section id="subscribe">
            <div class="container">
                <div class="row">

                    <div class="col-md-7 wow fadeInLeft">
                        <form action="#" method="post" class="subscription-form">
                            <i class="fa fa-envelope-o fa-lg"></i>
                            <input type="email" name="subscribe" class="subscribe" placeholder="YOUR MAIL" required="">
                            <input type="submit" value="SUBSCRIBE" id="mail-submit">
                        </form>
                    </div>

                    <div class="col-md-4 text-left wow fadeInRight">
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blan dit aliquet elit, eget tincidunt.</p>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--
        End #subscribe
        ========================== -->


        <!--
        #contact
        ========================== -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInDown">
                        <h2>Contact Us</h2>
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                    </div>
                    
                    <div class="col-md-8 col-sm-9 wow fadeInLeft">
                        <div class="contact-form clearfix">
                            <form action="index.html" method="post">
                                <div class="input-field">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                                </div>
                                <div class="input-field">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>
                                <div class="input-field message">
                                    <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                                </div>
                                <input type="submit" class="btn btn-blue pull-right" value="SEND MESSAGE" id="msg-submit">
                            </form>
                        </div> <!-- end .contact-form -->
                    </div> <!-- .col-md-8 -->

                    <div class="col-md-4 col-sm-3 wow fadeInRight">
                        <div class="contact-details">
                           {{--  <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p> --}}
                        </div> <!-- end .contact-details -->

                        <div class="contact-details">
                           {{--  <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p> --}}
                        </div> <!-- end .contact-details -->
                    </div> <!-- .col-md-4 -->

                </div>
            </div>
        </section>
       
       

@stop
@section('bottom-script')
@stop
