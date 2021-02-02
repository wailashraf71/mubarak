@extends('layouts.app')

@section('spa')
    <div class="dashboard-main-wrapper">
        <!-- navbar -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand header" href="{{route('admin.dashboard')}}"><img
                        src="{{asset('images/logo.png')}}" style="width: 40px" alt="" class="img-fluid"><span
                        class="logo">  Al-Mubarak Group </span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off mr-2"></i>Logout</a>

                    </ul>
                </div>
            </nav>
        </div>

        <!-- sidebar menu area end -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item"><a
                                    class="nav-link {{ request()->segment(2) === null ? 'active' : null }}"
                                    href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-user-circle"></i>
                                    <span>Dashboard</span></a></li>
                            <li class="nav-item pt-1"><a
                                    class="nav-link {{ request()->segment(2) === 'projects' ? 'active' : null }}"
                                    href="{{route('admin.projects.index')}}"><i class="fas fa-fw fa-table"></i>
                                    <span>Projects</span></a>
                            </li>
                            <li class="nav-item pt-1"><a
                                    class="nav-link {{ request()->segment(2) === 'settings' ? 'active' : null }}"
                                    href="{{route('admin.settings.index')}}"><i class="fas fa-fw fa-cogs"></i>
                                    <span>Settings</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- main content area start -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content ">
                @if(session()->has('message'))
                    <div class="alert alert-success" style="font-size: 16px">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger" style="font-size: 16px">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Al-Hujen Group. All right reserved.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
@endsection

@section('scripts')
    @yield('script')
@endsection
