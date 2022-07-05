@extends('layouts.blog_layout')
@section('content')
<main class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h1 class="edica-page-title" data-aos="fade-up">About Us</h1>
                <section class="edica-about-intro py-5">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="150">
                            <h2 class="intro-title pb-3 pb-md-0 mb-4 mb-md-0">Quick & Easy Process <span>with best features</span></h2>
                        </div>
                        <div class="col-md-6 intro-content" data-aos="fade-left" data-aos-delay="150">
                            <p><span class="first-letter">L</span>orem ipsum, or lipsum as it is   sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century.</p>
                        </div>
                    </div>
                </section>
                <section class="edica-about-vision py-5">
                    <div class="row">
                        <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="200">
                            <img src="{{asset('assets/images/about-vision.png')}}" alt="vision" class="img-fluid">
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <h2 class="vision-title" data-aos="fade-left">Our Vision</h2>
                            <p class="vision-text" data-aos="fade-left">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                        </div>
                    </div>
                </section>
                <section class="edica-about-counter py-5 d-md-flex justify-content-between" id="counter" data-aos="fade-up">
                    <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                        <h3 class="counter-count"><span class="count" data-count="50">0</span>K+</h3>
                        <p class="count-label">Daily Visitors</p>
                    </div>
                    <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                        <h3 class="counter-count"><span class="count" data-count="10">0</span>K+</h3>
                        <p class="count-label">Downloads</p>
                    </div>
                    <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                        <h3 class="counter-count">0.02%</h3>
                        <p class="count-label">Uninstallation</p>
                    </div>
                    <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                        <h3 class="counter-count"><span class="count" data-count="15">0</span>K+</h3>
                        <p class="count-label">Pro User</p>
                    </div>
                    <div class="counter-card mb-3 pb-1 pb-md-0 mb-md-0">
                        <h3 class="counter-count"><span class="count" data-count="8">0</span>K+</h3>
                        <p class="count-label">Reviews</p>
                    </div>
                </section>
                <section class="edica-about-goal py-5 mb-5">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column justify-content-center" data-aos="fade-right">
                            <h2 class="goal-title">Our Goal</h2>
                            <p class="goal-text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. The passage is at attributed to an unknown typesetters in 1the 5th century who is thought scrambled with all parts of Cicero’s De. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs</p>
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <img src="{{asset('assets/images/about-goal.png')}}" alt="goal" class="img-fluid">
                        </div>
                    </div>
                </section>
                <section class="edica-about-clients pb-5 mb-5">
                    <h2 class="clients-title mb-5" data-aos="fade-up">Top clients</h2>
                    <div class="row py-4" data-aos="fade-up">
                        <div class="col-6 col-md-2 mb-4 mb-md-0">
                            <img src="{{asset('assets/images/Partner_1@2x.png')}}" alt="client logo" class="img-fluid" width="140px">
                        </div>
                        <div class="col-6 col-md-2 mb-4 mb-md-0">
                            <img src="{{asset('assets/images/Partner_2@2x.png')}}" alt="client logo" width="140px" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-2 mb-4 mb-md-0">
                            <img src="{{asset('assets/images/Partner_3@2x.png')}}" alt="client logo" width="140px" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-2 mb-4 mb-md-0">
                            <img src="{{asset('assets/images/Partner_4@2x.png')}}" alt="client logo" width="140px" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-2 mb-4 mb-md-0">
                            <img src="{{asset('assets/images/Partner_5@2x.png')}}" alt="client logo" width="140px" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-2 mb-4 mb-md-0">
                            <img src="{{asset('assets/images/Partner_6@2x.png')}}" alt="client logo" width="140px" class="img-fluid">
                        </div>
                    </div>
                </section>
                <section class="edica-about-faq py-5 mb-5">
                    <h2 class="faq-title" data-aos="fade-up">Frequently Asked Queries</h2>
                    <p class="faq-section-text" data-aos="fade-up" data-aos-delay="100">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out printed graphic or web designs. </p>
                    <div class="accordion" id="edicaAboutFaqCollapse" role="tablist" aria-multiselectable="true">
                        <div class="card" data-aos="fade-up" data-aos-delay="200">
                            <div class="card-header" role="tab" id="edicaAboutFaq1">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent1" aria-expanded="true" aria-controls="edicaAboutFaqContent1">
                                        Which license do I need?
                                    </a>
                                </h5>
                            </div>
                            <div id="edicaAboutFaqContent1" class="collapse in" role="tabpanel" aria-labelledby="edicaAboutFaq1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit reiciendis quas quos ipsa hic cumque debitis, facere illum facilis alias quae, labore totam, voluptatibus aspernatur corrupti! Enim quo dolores quos.
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-header" role="tab" id="edicaAboutFaq2">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent2" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                        How do I get access to a theme?
                                    </a>
                                </h5>
                            </div>
                            <div id="edicaAboutFaqContent2" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque aut exercitationem dolor porro maiores fugiat enim vitae laboriosam, obcaecati earum doloremque quas sit tempora in veritatis? Nihil earum excepturi rerum.
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-delay="400">
                            <div class="card-header" role="tab" id="edicaAboutFaq3">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent3" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                        How do I see previous orders?
                                    </a>
                                </h5>
                            </div>
                            <div id="edicaAboutFaqContent3" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq3">
                                <div class="card-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad commodi ut saepe dolor ipsam hic nisi, accusamus fugit molestiae reiciendis dolores aspernatur incidunt officiis, explicabo assumenda? Pariatur itaque nostrum error.
                                </div>
                            </div>
                        </div>
                        <div class="card" data-aos="fade-up" data-aos-delay="500">
                            <div class="card-header" role="tab" id="edicaAboutFaq4">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent4" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                        Support related issues for the template?
                                    </a>
                                </h5>
                            </div>
                            <div id="edicaAboutFaqContent4" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq4">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quos, fuga nemo quasi temporibus assumenda illo provident corporis, dolores rem ipsum odit animi voluptatem reiciendis accusamus maiores perspiciatis necessitatibus a?
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<section class="edica-footer-banner-section" data-aos="fade-up">
    <div class="container">
        <div class="footer-banner">
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
