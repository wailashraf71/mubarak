@extends('layouts.app')

@section('spa')
    <div class="bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="error-section">
                        <div class="error-section-content">
                            <h1 class="display-3">404 <br> Page Not Found</h1>
                            <p> The page you are looking for does not exist!</p>
                            <a href="{{route('home')}}" class="btn btn-secondary btn-lg">Back to homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
