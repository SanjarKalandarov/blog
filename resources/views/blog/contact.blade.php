@extends('layouts.blog_layout')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Contact</h1>
                    <section class="edica-contact py-5 mb-5">
                        <div class="row">
                            <div class="col-md-8 contact-form-wrapper">
                                <h5 data-aos="fade-up">Contact form</h5>
                                <div class="row">
                                    <div class="form-group col-md-6" data-aos="fade-up">
                                        <label for="name">NAME</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your full name">
                                    </div>
                                    <div class="form-group col-md-6" data-aos="fade-up">
                                        <label for="phone">PHONE</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <label for="email">EMAIL</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                                    </div>
                                    <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                        <label for="subject">SUBJECT</label>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                        <label for="message">MESSAGE</label>
                                        <textarea name="message" id="message" rows="9" class="form-control">Textarea field</textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning btn-lg" data-aos="fade-up" data-aos-delay="300">Send Message</button>
                            </div>
                            <div class="col-md-4 contact-sidebar" data-aos="fade-left">
                                <h5>Contact us</h5>
                                <p>Need assistance? Our customer service is here to assist you Monday through Friday from 9 am EST to 10 pm EST.</p>
                                <p>56 Livingston Street,<br> Brooklyn, NY 11201</p>
                                <div class="embed-responsive embed-responsive-1by1 contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12090.496282731767!2d-73.98517381282224!3d40.74829681924569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259041366262b%3A0xfdac298467953648!2sMurray%20Hill%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1588137209658!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
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
