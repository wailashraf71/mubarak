@extends('layouts.app')

@section('style')
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .logo-img{
            width: 40px;
        }
    </style>
@endsection

@section('spa')
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="{{route('home')}}"><img class="logo-img" src="{{asset('images/logo.png')}}" alt="logo"></a><span class="splash-description mt-3">Please enter your admin credentials.</span></div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('admin.loginAdmin') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" value="{{ old('email') }}" id="username" type="email" placeholder="Email" autocomplete="on">
                        @if ($errors->has('email') || session()->has('error'))
                            <div class="text-danger"><div class="mt-1">{{ $errors->first('email') }} {{session()->get('error')}}</div>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <div class="text-danger"><div class="mt-1">{{ $errors->first('password') }}</div></div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>

@endsection
