@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar side-menu">
            <section class="sider-menu">
                <img  src="{{ asset('images/Profile-pic.png') }}" alt="Profile Picture" class="profile-pic">
                <div class="profile-info">
                    <p>John Doe</p>
                    <p>john.doe@example.com</p>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item menu-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="{{url('/properties')}}">Properties</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">Agents</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link" href="#">Analytics</a>
                    </li>
                </ul>
            </section>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
