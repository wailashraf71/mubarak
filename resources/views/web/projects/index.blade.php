@extends('layouts.web')

@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Projects</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Projects</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3 class="section-title">Our Projects</h3>
            </header>
            

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item *">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{@Storage::disk('public')->url('images/projects/'. json_decode($project->image)[0])}}" class="img-fluid" alt="">
                                <a href="{{@Storage::disk('public')->url('images/projects/'. json_decode($project->image)[0])}}" data-lightbox="portfolio" data-title="App 1"
                                   class="link-preview"><i class="ion ion-eye"></i></a>
                                <a href="{{url('/projects/' . $project->id)}}" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="{{url('/projects/' . $project->id)}}">{{$project->title}}</a></h4>
                                <p>{{$project->description}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

@endsection
