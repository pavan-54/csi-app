@extends('layout.app')
@section('content')

<body>

    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="slider_info">
                        <h3>CSI Club Every Where</h3>
                        <center><a href="#about_area" class="boxed_btn">Dive in</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about_area">
        <div class="about_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="single_about_info">
                            <h3>About Csi</h3>
                            <p>The seed for the Computer Society of India (CSI) was first shown in the year 1965 with a handful of IT enthusiasts who were a computer user group and felt the need to organize tteir activities. They also wanted to share their knowledge and exchange ideas on what they felt was a fast emerging sector. Today the CSI takes pride in being the largest and most professionally managed association of and for IT professionals in India. The purposes of the Society are scientific and educational directed towards the advancement of the theory and practice of computer science and IT.</p>
                            {{-- <a href="#" class="boxed_btn">View Events</a> --}}
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <div class="about_tutorials">
                            <div class="courses">
                                <div class="inner_courses">
                                    <div class="text_info">
                                        <span>15,000+</span>
                                        <p> Happy Members.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="courses-blue">
                                <div class="inner_courses">
                                    <div class="text_info">
                                        <span>780+</span>
                                        <p> Institutes.</p>
                                    </div>
    
                                </div>
                            </div>
                            <div class="courses-sky">
                                <div class="inner_courses">
                                    <div class="text_info">
                                        <span>25++</span>
                                        <p> Industries.</p>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="img/testmonial/author_img.png" alt="">
                                </div>
                                <p>
                                    I have been a member of the computer society of India and they have helped us out in many ways by arranging guest lectures and competitions that helped students a lot.

                                </p>
                                <span> - Devi ( Mlrit )</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->


    <!-- subscribe_newsletter_Start -->
    <div class="subscribe_newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter_text">
                        <h3>Subscribe Newsletter</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam alias esse aliquam natus quam dolore.</p>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="newsletter_form">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe_newsletter_end -->


    

</body>
@endsection