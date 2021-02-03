@extends('layouts.web')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Projects</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('projects')}}">Projects</a></li>
                    <li>{{$project->title}}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
        <div class="container">
            <div class="portfolio-description">
                <h2>{{$project->title}}</h2>
                <p>
                    {{$project->description}}
                </p>
            </div>
            <div class="portfolio-details-container">

                <img src="{{@Storage::disk('public')->url('images/projects/'. $project->image)}}"
                     class="img-fluid" style="width: 100% !important;" alt="">
            </div>

            <br>
            <br>
            <br>
        </div>
    </section><!-- End Portfolio Details Section -->

@endsection
