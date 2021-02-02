@extends('layouts.web')

@section('content')

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Certificates</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Certificates</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="team">
        <br>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Certificates</h3>
                <p>Check out our certificates.</p>
            </div>

            <br>
            <br>
            <div class="row">
                <div class="col-6 text-center"><img src="{{asset('assets/img/certificates/1.png')}}" alt=""></div>
                <div class="col-6 text-center"><img src="{{asset('assets/img/certificates/2.png')}}" alt=""></div>
            </div>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="col-6 text-center"><img src="{{asset('assets/img/certificates/3.png')}}" alt=""></div>
                <div class="col-6 text-center"><img src="{{asset('assets/img/certificates/4.png')}}" alt=""></div>
            </div>
            <br>
            <hr>
            <br>
            <div class="row">
                <div class="col-6 text-center"><img src="{{asset('assets/img/certificates/5.png')}}" alt=""></div>
            </div>
        </div>
    </section><!-- End Team Section -->

@endsection
