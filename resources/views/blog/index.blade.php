@extends('layouts.blog_layout')
@section('content')
    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up-right">
                        <h4 class="edica-landing-section-subtitle-alt">ABOUT US</h4>
                        <h2 class="edica-landing-section-title">1000+ customer using Our application.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipng elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim que minim veniam, quis nostrud exercitation.</p>
                        <ul class="landing-about-list">
                            <li>Powerful and flexible theme</li>
                            <li>Simple, transparent pricing</li>
                            <li>Build tools and full documention</li>
                        </ul>
                    </div>
                    <div class="col-md-6" data-aos="fade-up-left">
                        <img src="{{asset('assets/images/phone-copy.png')}}" width="468px" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-clients">
            <div class="container">
                <h4 class="edica-landing-section-subtitle-alt">PARTNER WITH US</h4>
                <div class="partners-wrapper">
                    <img src="{{asset('assets/images/Partner_1.png')}}" alt="client logo" data-aos="flip-right" data-aos-delay="250">
                    <img src="{{asset('assets/images/Partner_2.png')}}" alt="client logo" data-aos="flip-right" data-aos-delay="500">
                    <img src="{{asset('assets/images/Partner_3.png')}}" alt="client logo" data-aos="flip-right" data-aos-delay="750">
                    <img src="{{asset('assets/images/Partner_4.png')}}" alt="client logo" data-aos="flip-right" data-aos-delay="1000">
                    <img src="{{asset('assets/images/Partner_5.png')}}" alt="client logo" data-aos="flip-right" data-aos-delay="1250">
                    <img src="{{asset('assets/images/Partner_6.png')}}" alt="client logo" data-aos="flip-right" data-aos-delay="1500">
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-services">
            <div class="container">
                <h4 class="edica-landing-section-subtitle">Service We Offer</h4>
                <h2 class="edica-landing-section-title">What features you will <br> Get from App.</h2>
                <div class="row">
                    <div class="col-md-6 landing-service-card" data-aos="fade-right">
                        <img src="{{asset('assets/images/picture.svg')}}" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Live Video</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-left">
                        <img src="{{asset('assets/images/internet.svg')}}" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Secure and Reliable</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-right">
                        <img src="{{asset('assets/images/goal.svg')}}" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Fast. Instantly.</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-left">
                        <img src="{{asset('assets/images/chat-bubble.svg')}}" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Built-in Messenger</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-testimonials" data-aos="fade-up">
            <div class="container">
                <div id="edicaLandingTestimonialCarousel" class="carousel slide landing-testimonial-carousel" data-ride="carousel">
                    <div class="text-center py-4">
                        <img src="{{asset('assets/images/quote.svg')}}" alt="quote">
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item active">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="0">
                            <img src="{{asset('assets/images/oval-copy-3.png')}}" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="1">
                            <img src="{{asset('assets/images/oval-copy-4.png')}}" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="2" class="active">
                            <img src="{{asset('assets/images/oval.png')}}" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>

                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="3">
                            <img src="{{asset('assets/images/oval-copy.png')}}" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="4">
                            <img src="{{asset('assets/images/oval-copy-2.png')}}" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <h4 class="edica-landing-section-subtitle" data-aos="fade-up">Blog posts</h4>
                <h2 class="edica-landing-section-title" data-aos="fade-up">Check our app latest blog post <br> for more update.</h2>
                <div class="row">
                    <div class="col-md-4 landing-blog-post" data-aos="fade-right">
                        <img src="{{asset('assets/images/rectangle.png')}}" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-up">
                        <img src="{{asset('assets/images/rectangle-copy.png')}}" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-left">
                        <img src="{{asset('assets/images/rectangle-copy-2.png')}}" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-1 mb-4 mb-md-0" data-aos="fade-right">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-2" data-aos="fade-left">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">Download it now.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"> <img src="{{asset('assets/images/apple@1x.svg')}}" alt="ios" class="mr-2"> App Store</button>
                    <button class="btn btn-success"> <img src="{{asset('assets/images/android@1x.svg')}}" alt="android" class="mr-2"> Google Play</button>
                </div>
                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
            </div>
        </div>
    </section>
@endsection
