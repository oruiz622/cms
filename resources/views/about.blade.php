@extends('layouts.welcomeapp')

@section('title')
<title>About Page</title>
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
                    <a class="nav-link" href="{{ route('portfolio') }}">My Portfolio <span class="arrow"></span></a>
                    <nav class="nav">
                        <a class="nav-link" href="{{ route('about') }}">About Me</a>
                    </nav>
                </li>
            </ul>
        </section>
        <a href="{{ route('login') }}" class="btn btn-xs btn-round btn-info">Login</a>
    </div>
</nav><!-- /.navbar -->

<!-- Header -->
<header class="header text-white h-fullscreen pb-80" style="background-image: url({{ asset('images/about.jpg') }});"
    data-overlay="9">
    <div class="container text-center">
        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
                <h1 class="display-1 mt-7 mb-8">About Me</h1>
                <h4>
                    <a class="display-4" href="{{ route('portfolio') }}">
                        Orlando Ruiz
                    </a>
                </h4>
                <p>
                    <img style="border-radius: 50%;" src="{{ asset('images/img_avatar.jpg') }}"
                        alt="Post My gravatar image">
                </p>
            </div>
            <div class="col-12 align-self-end text-center">
                <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
            </div>
        </div>
    </div>
</header><!-- /.header -->

<!-- Main Content -->
<div class="bg-dark text-white" style="background-image: url({{asset('images/sbg-img.jpg')}});">
    <div id="section-content">
        <main class="containter m-10">
            <p>My story begins in Germany. I was born in Landsthul in a military hospital. My father was in the army and
                my mother, who is from Metropolis, Illinois met my father in Belgium and married. My mother has 2
                children from a previous marriage and her and my father concieved my older brother while in Brussels. At
                only
                a few months old we moved to the United States. I found myself in Tampa, Florida at about 4 years
                old and attended Tinker Elementary on Macdill Air force base and Ballast Point Elementary. I graduated
                from Robinson Highschool with the class of 97. I wasn't sure what I wanted to do with my life so I moved
                to New York City 2 weeks before my 19th birthday. After a year I came back to Florida and attended
                Hillsborough Community College and received my Associate's in Engineering. At 31 I met the mother of
                my only child Amanda Kappenman, our daughter was born on November 22, 2013. When my daughter was 9
                months old I was diagnosed with Cancer. After 2 surgeries and 2 rounds of high dose chemo my cancer
                was in remission and I have been cancer free for about 5 years now. After a year of dealing with cancer
                I decided to go back to school and get my Bachelor's degree in Electrical Engineering. I attended
                Daytona State College and received my Bachelor's in Engineering Technology with a
                concentration in Electrical Engineering in May 2020. I currently live in Saint Petersburg,
                Florida and do freelance work for web development and remodel homes. I am actively pursuing
                employment for Web Development and Design.
            </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-background">
                Contact Me
            </button>
        </main>
    </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="modal-background" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-img" style="background-image: url({{asset('images/bg-img2.jpg')}});"
            data-overlay="5">
            <div class="modal-body text-white">
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <br />
                <h3 class="text-center">Contact Info</h3>
                <hr />
                <p class="lead">Orlando Ruiz<br>
                    3101 54th Ave N<br>
                    Saint Petersburg, FL 33714 <br>
                    Mobile: (727) 278-5469 <br>
                    Home: (727) 819-6511 <br>
                    email: oruiz622@outlook.com<br />
                    alt email: oruiz1771@outlook.com
                    <br />
            </div>
        </div>
    </div>
</div>
