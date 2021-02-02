@extends('layouts.web')
@section('content')

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2></h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Mubarak Int. Construction is a customer-focused general
                    contractor dedicated to providing <br> a comprehensive range of construction and
                    civil engineering services to private and public clients. </p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>Al AASAM Building, Baghdad, Iraq</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+7701234567">+964 780 195 6006</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">contact@mubarakint.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="{{route('storeMessage')}}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                   data-rule="email" data-msg="Please enter a valid email"/>
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
                @if(session()->has('error'))
                    <div class="alert alert-danger mt-5" style="font-size: 16px">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>

        </div>
    </section>

@endsection
