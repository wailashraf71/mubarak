@extends('layouts.web')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <!-- ======= Intro Section ======= -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"
                         style="background-image: url('https://images.pexels.com/photos/434709/pexels-photo-434709.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">

                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Mubarak Int. Construction</h2>
                                <p class="animate__animated animate__fadeInUp">Mubarak Int. Construction is a customer-focused general
                                    contractor dedicated to providing a comprehensive range of construction and
                                    civil engineering services to clients. Team relationships are
                                    established with each customer in order to help them meet their business
                                    objectives.</p>
                                <a href="#services"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Supplying Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                         style="background-image: url('https://images.pexels.com/photos/544965/pexels-photo-544965.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">

                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Our Approach</h2>
                                <p class="animate__animated animate__fadeInUp">Combining knowledge and expertise with the latest design software and manufacturing equipment, we enable our clients to build efficient, high-quality buildings, faster.
                                    <br> we apply in- depth building and design experience to ensure you a rewarding and personalized process from start to finish.</p>
                                <a href="#features"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                         style="background-image: url('https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">

                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Vision</h2>
                                <p class="animate__animated animate__fadeInUp">We are genuinely passionate about your vision, and deeply engaged in how you will live in your home. The real magic of our work is aligning your goals to building realities and budget.</p>
                                <a href="{{url('/contact')}}"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Say hello!</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item"
                         style="background-image: url('https://images.pexels.com/photos/1216589/pexels-photo-1216589.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Partnership</h2>
                                <p class="animate__animated animate__fadeInUp">We focus on building enduring relationships by delivering an enjoyable and personalized custom building experience to each of our clients. As a family-owned firm, we strive to serve as trusted partners and advisors from our first discussions until well after construction is complete.</p>
                                <a href="{{url('/about-us#partners')}}"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Our Partners</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item"
                         style="background-image: url('https://images.pexels.com/photos/280221/pexels-photo-280221.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Awards & Recognition</h2>
                                <p class="animate__animated animate__fadeInUp">Our firm has received multiple awards for the quality of our work, spanning craftsmanship, historical restoration, interior design, sustainable building, and teamwork. We’re proud of what we’ve accomplished in collaboration with our clients and project partners and honored that our work has been distinguished for excellence within the industry.</p>
                                <a href="{{url('/certificates')}}"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">Our Certificates</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Intro Section -->

    <br>

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">

            <header class="section-header wow fadeInUp">
                <h3>Supplying Department</h3>
                <p>Our supplying dept has supplied KBR in Babylon & Baghdad with Mechanical & Electrical materials, building equipments. our department has supplied KBR with flooring covering and all floors covering material. Drinking water to the Iraqi Market. MIG have the capacity to supply all requirements to all potential clients includes but not limited to:</p>
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-building-house"></i></div>
                    <h4 class="title text-dark">Construction building Materials</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-bath"></i></div>
                    <h4 class="title text-dark">Bathroom fitting and accessories</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-cog"></i></div>
                    <h4 class="title text-dark">Mechanical & Electrical fixtures & Fittings</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-wind"></i></div>
                    <h4 class="title text-dark">Air conditioning systems</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-square-rounded"></i></div>
                    <h4 class="title text-dark">Marble & Ceramic</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="ion-ios-settings-strong"></i></div>
                    <h4 class="title text-dark">Security and safety system</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-home-circle"></i></div>
                    <h4 class="title text-dark">Office equipment & Furniture</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-traffic-cone"></i></div>
                    <h4 class="title text-dark">Construction Equipment</h4>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bx bx-power-off"></i></div>
                    <h4 class="title text-dark">Electrical Transformer & Cables</h4>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->
    <br>
    <br>
    <!-- ======= Features Section ======= -->

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>More Info</h3>
            </header>

            <br>
            <div class="row">
                <div class="image col-lg-6"
                     style='background-image: url("https://images.unsplash.com/photo-1565008447742-97f6f38c985c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80");'
                     data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-list-check"></i>
                        <h4>Our Philosophy</h4>
                        <p>Our philosophy is to provide extensive details a meticulous specification to our
                            project before commencement of construction. This approach along with our
                            thorough project management enables us to control the cost of the project, the
                            quality of the work, and the time for the construction. Our service extends from
                            the design of few items to a complete turnkey project. All together we offer
                            complete design services with competitive prices.</p>
                    </div>
                    <div class="icon-box mt-5" style="padding-top: 20px" data-aos="zoom-in" data-aos-delay="150">
                        <i class='bx bx-compass'></i>
                        <h4>Our Relationships</h4>
                        <p>MIG have a very good Relationship with many of Iraqi and Foreign
                            companies . The Relationship Its has basis on commitment of the covenants , honesty,
                            and accepting the opinions of others to reach the intended targets .</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <br>
    <br>
    <br>
    <br>

    <section id="partners">
        <br>
        <br>
        <br>
        <br>
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Showcase</h3>
            </header>
            <br>
            <div class="owl-carousel owl-theme home-images">
                <img src="{{asset('images/showcase/1.jpg')}}" alt="">
                <img src="{{asset('images/showcase/2.jpg')}}" alt="">
                <img src="{{asset('images/showcase/3.jpg')}}" alt="">
                <img src="{{asset('images/showcase/4.jpg')}}" alt="">
                <img src="{{asset('images/showcase/5.jpg')}}" alt="">
                <img src="{{asset('images/showcase/6.jpg')}}" alt="">
                <img src="{{asset('images/showcase/7.jpg')}}" alt="">
            </div>

            <br>
            <br>
            <br>
        </div>
    </section><!-- End Our Clients Section -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


@endsection
