@extends('layouts.welcomeapp')

@section('title')
<title>Tag {{ $tag->name }}</title>
@endsection

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

        <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img class="logo-dark" src="{{ asset('images/logo/cmsblog100.png') }}" alt="logo">
                <img class="logo-light" src="{{ asset('images/logo/cmsblog-reg100.png') }}" alt="logo">
            </a>
        </div>

        <section class="navbar-mobile">
            <span class="navbar-divider d-mobile-none"></span>

            <ul class="nav nav-navbar">

                <li class="nav-item">
                    <a class="nav-link" href="#">Demos <span class="arrow"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Pages <span class="arrow"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">Blog <span class="arrow"></span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Shop <span class="arrow"></span></a>
                </li>

                <li class="nav-item nav-mega">
                    <a class="nav-link" href="#">Blocks <span class="arrow"></span></a>
                </li>

                <li class="nav-item nav-mega">
                    <a class="nav-link" href="#">UI Kit <span class="arrow"></span></a>
                </li>

            </ul>
        </section>
        <a href="{{ route('login') }}" class="btn btn-xs btn-round btn-info">Login</a>
    </div>
</nav><!-- /.navbar -->

<!-- Header -->
<header class="header text-center text-white"
    style="background-image: linear-gradient(-225deg, #926DDE 0%, #B8DCFF 48%, #6BBBFF 100%);">
    <div class="container">

        <div class="row">
            <div class="col-md-8 mx-auto">

                <h1>{{ $tag->name }}</h1>
                <p class="lead-2 opacity-90 mt-6" style="text-shadow: 1px 1px rgba(0,0,0,0.2);">Get Updated on the
                    latest blogs that you love...</p>

            </div>
        </div>

    </div>
</header><!-- /.header -->

<!-- Main Content -->
<main class="main-content">
    <div class="section bg-gray">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-xl-9">
                    <div class="row gap-y">

                        @forelse ($posts as $post)
                        <div class="col-md-6">
                            <div class="card border hover-shadow-6 mb-6 d-block">
                                <a href="{{ route('blog.show', $post->id) }}">
                                    <img class="card-img-top" src="{{ asset('storage/'.$post->image) }}"
                                        alt="Card image cap">
                                </a>
                                <div class="p-6 text-center">
                                    <p>
                                        <a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">
                                            {{ $post->category->name }}
                                        </a>
                                    </p>
                                    <h5 class="mb-0">
                                        <a class="text-dark" href="{{ route('blog.show', $post->id) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-center">
                            No results found for query {{ request()->query('search') }}
                        </p>
                        @endforelse

                    </div>

                    <!-- Pagination with Laravel -->
                    {{ $posts->withQueryString()->links() }}

                </div>

                <!--Sidebar-->
                @include('partials.sidebar')

            </div>
        </div>
    </div>
</main>

@include('partials.footer')

@endsection
