@extends('layouts.web')

@section('content')

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Services</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Our Services</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs Section -->



    <!-- ======= Infrastructure Section ======= -->
    <section id="infrastructure" class="about">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>CIVIL WORKS & INFRASTRUCTURE</h3>
                <p>Our company works on ( Turn key project ) </p>
            </div>
            <p class="text-center" style="font-size: 18px">
                Design , build , supervision and engineering the projects, airports, dams, roads, construction,
                pre-fabricated units, maintenance of buildings, and other projects. The infrastructure projects are everything related to water and Sewage distribution network
                of facilities , lifting and pumping stations, formwork and reinforcement work. </p>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img
                        src="{{asset('images/infrastructure.jpg')}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                     data-aos-delay="100">
                    <img
                        src="{{asset('images/infrastructure2.jpg')}}"
                        class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- End Infrastructure Section -->

    <!-- ======= Mechanical Section ======= -->
    <section id="mechanical" class="about">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Mechanical works</h3>
                <br>
            </div>
            <p class="text-center" style="font-size: 18px">
                MIG  has extensive experience in the mechanical work and specialist in supply, installation, Rehabilitation and calibration  of  Radial gates, Miter Gates,
                 sliding Gates, culvert Gates, Hydraulic operating systems, Monorail and gantry Crane,  Gates operating system, rail transfer Cart, water treatment plants, oil field sectors.
                MIG experience in the Fire stations and fire alarm systems  .
            </p>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-right" data-aos-delay="100">
                    <img
                        src="{{asset('images/mechanical.jpg')}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                     data-aos-delay="100">
                    <img
                        src="{{asset('images/mechanical2.jpg')}}"
                        class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End Mechanical Section -->

    <!-- ======= Electrical Section ======= -->
    <section id="electrical" class="about">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Electrical</h3>
                <p>Our company works on ( Turn key project )</p>
            </div>
            <p class="text-center" style="font-size: 18px">
                Design , build , supervision and engineering the projects, airports, dams, roads, construction,
                pre-fabricated units, maintenance of buildings, and other projects.
                The infrastructure projects are everything related to water and Sewage distribution network
                of facilities , lifting and pumping stations, formwork and reinforcement work . </p>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img
                        src="{{asset('images/electrical.jpg')}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                     data-aos-delay="100">
                    <img
                        src="{{asset('images/electrical2.jpg')}}"
                        class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End Electrical Section -->

    <!-- ======= Remotely Section ======= -->
    <section id="monitoring" class="about">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Remotely monitoring and operating system</h3>
                <p>We develop systems for our customers both as consultants and as turn-key system providers. Out systems give.</p>
            </div>
            <p class="text-center" style="font-size: 18px">
                We offer the ability to measure data such as position, water level, speed, temperature, wind etc - even in locations lacking power and communications facilities - through
                an advanced satellite system with global coverage.
                We supply customized solutions for your needs, covering everything from sensors to the user interface on your
                computer. We also offer installation of the equipment and deliver it to you ready to set up.
                MIG throw there partners can measure anything measurable anywhere, and present it to you instantly.
                Future System Smart Water resources management and operating System. Operating your equipment's from control office remotely.
            </p>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-left" data-aos-delay="100">
                    <img
                        src="{{asset('images/remotely.jpg')}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content" data-aos="fade-right"
                     data-aos-delay="100">
                    <img
                        src="{{asset('images/remotely2.jpg')}}"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Remotely Section -->

    <!-- ======= Supply Section ======= -->
    <section id="supply" class="about">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Supply</h3>
                <p>We develop systems for our customers both as consultants and as turn-key system providers. Out systems give.</p>
            </div>
            <p class="text-center" style="font-size: 18px">
                The procurement and supply department in our company works to supply the company and clients with all the raw materials it needs in its projects in the event that it is import,
                so the department opens bank credits for the factories and works on comprehensive insurance for the arrival of the goods in the event that they are received from the factory.
                MIG have a good cooperation with a big foreign companies to supply a Monorail and gantry Crane, steel sheet pile, water treatment plant, buildings row material, Road furniture, LV and HV transformer and control panel, rail transfer Cart.
            </p>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img
                        src="{{asset('images/supply.jpg')}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                     data-aos-delay="100">
                    <img
                        src="{{asset('images/supply2.jpg')}}"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Supply Section -->

    <!-- ======= Water Section ======= -->
    <section id="water-resources" class="about">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Remotely monitoring and operating system</h3>
                <p>We develop systems for our customers both as consultants and as turn-key system providers. Out systems give.</p>
            </div>
            <p class="text-center" style="font-size: 18px">
                Our water cycle approach to solving water resources challenges means that customers get solutions that look at the big picture and harness the power of their native water.
                For both surface water and sub-surface aquifers issues, we have provided a wide range of innovative solutions for water management, ranging from dams, irrigation and drainage systems, river engineering, advanced groundwater exploration, sustainable groundwater systems, wastewater systems, water data, planning and policy advice. Our dedicated water consultants operated across all sectors of the water industry, for all types of clients.
                We design and build a small dams ,barrage ,water canals , concrete lining water canals ,irrigation projects and water management project .
            </p>
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-left" data-aos-delay="100">
                    <img
                        src="{{asset('images/water.jpg')}}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content" data-aos="fade-right"
                     data-aos-delay="100">
                    <img
                        src="{{asset('images/water2.jpg')}}"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Water Section -->

    <br>
    <br>
    <br>
    <br>
@endsection
