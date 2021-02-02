@extends('layouts.dashboard')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4 class="header-title col"><i class="fa fa-cogs px-2"></i>Settings</h4>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="password"><i class="ti-lock"></i>Password for account: <strong class="text-dark">admin@almubarak.com</strong></label>
                    <input type="text" minlength="8" class="form-control" id="password" name="password" placeholder="Enter new password if you want to change the current one">
                </div>
                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save <i class="fa fa-save mx-1 font-weight-bolder" style="vertical-align: middle"></i></button>
            </form>
        </div>
    </div>


@endsection

@section('meta')
    <meta http-equiv="Pragma" content=”no-cache”>
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
@endsection
