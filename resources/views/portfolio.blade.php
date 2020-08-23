<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Portfolio Page</title>
        <script src="{{ asset('js/fontawesome.min.js') }}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
            type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/cms-icon.png') }}" />
        <link rel="stylesheet" href="{{ asset('css/fonts/fontawesome.min.css') }}">

    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Orlando Ruiz</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                        src="{{ asset('images/img_avatar.jpg') }}" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li> --}}
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <div class="d-flex flex-row-reverse mr-5">
                <a class="btn btn-light btn-lg text-primary mt-3" href="{{ route('welcome') }}"><i
                        class="fas fa-angle-left"></i><i class="fas fa-home"></i></a>
            </div>
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Orlando
                        <span class="text-primary">Ruiz</span>
                    </h1>
                    <div class="subheading mb-5">
                        3101 54th Ave N · St. Petersburg, FL 33714 · (727) 278-5469 ·
                        <a href="mailto:name@email.com">oruiz622@outlook.com</a>
                    </div>
                    <p class="lead mb-5">I am an Engineer and developer offering enthusiasm and understanding of
                        various programming languages and proficient knowledge in electrical and computer
                        engineering. Looking to join an organization where the opportunity for growth and
                        personal development is embraced.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/oruiz622/"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/oruiz622"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/people/Orlando-Ruiz/100054505155678"><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Website Created with PHP</h3>
                            <div class="subheading mb-3">https://kidscharm.org</div>
                            <p>Custom blog and cms website created with vanilla PHP, javascript, and css. No frameworks.
                                ReCaptcha authorization.
                                Full administration area and dashboard with content management system. Ajax pagination
                                and
                                MySql implemented with PDO.
                            </p>
                        </div>
                        <div class="flex-shrink-0">
                            <li class="text-primary list-inline-item"><i class="fab fa-php"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-html5"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-css3-alt"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-js-square"></i></li>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Site Created with React and Gatsbyjs</h3>
                            <div class="subheading mb-3">https://gatsby-react-backroads.netlify.app</div>
                            <p>Example site, under construction, React, Gatsby, React Hooks, Sass, and GraphQL.
                                Completely
                                responsive for multiple screen sizes and phones.</p>
                        </div>
                        <div class="flex-shrink-0">
                            <li class="text-primary list-inline-item"><i class="fab fa-react"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-node-js"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-sass"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-js-square"></i></li>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Express, Nodejs, Google OAuth Site</h3>
                            <div class="subheading mb-3">https://blooming-wildwood-33882.herokuapp.com </div>
                            <p> Created with Nodejs and Express application with Mongodb and Oauth google
                                authentication. Json webtokens are used for user authorization</p>
                        </div>
                        <div class="flex-shrink-0">
                            <li class="text-primary list-inline-item"><i class="fab fa-node-js"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-sass"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-npm"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-js-square"></i></li>

                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Laravel CMS Blog</h3>
                            <div class="subheading mb-3">http://cms.local</div>
                            <p>Full content management system and blog made with Laravel, Blade, Sass, and Javascript.
                                Trix editing and Disqus commenting system.
                            </p>
                        </div>
                        <div class="flex-shrink-0">
                            <li class="text-primary list-inline-item"><i class="fab fa-laravel"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-php"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-sass"></i></li>
                            <li class="text-primary list-inline-item"><i class="fab fa-js-square"></i></li>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><a
                                    href="https://daytonastate.smartcatalogiq.com/2019-2020/College-Catalog/Program-Guides/BS-Degree/Engineering-Technology-Electrical-Engineering-Technology-Concentration-B-S-Degree">Daytona
                                    State College</a></h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Electrical Engineering - Electrical Engineering Concentration</div>
                            <p>ABET Accredited</p>
                            <p>GPA: 3.62</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2017 - May 2020</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Hillsborough Community College</h3>
                            <div class="subheading mb-3">A.A. Engineering</div>
                            <p>GPA: 3.8</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2001 - May 2004</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Software and Web Development</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                        <li class="list-inline-item"><i class="fab fa-mdb"></i></li>
                    </ul>

                    <div class="subheading mb-3">Programming Languages and Tools</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Front-end Development - PHP, Asp.Net Core, Expressjs
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Client-Side Development - Reactjs, Vuejs, Angularjs, Blazor, Javascript and Ajax
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Web Design - Bootstrap, Materializecss, Foundation Css, Sass
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            C#, WPF, and Xamarin Forms
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Java 8, Android Studio
                        </li>
                    </ul>
                </div>


                <div class="resume-section-content">
                    <div class="subheading mb-3">Electrical Engineering and Design</div>


                    <div class="subheading mb-3">Tools</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Digital electronics and Quartus 2.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Autocad Inventor and Autocad Electrical.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Digital Systems: Finite State Machines and Algorithmic State Machines.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Computer Design and Architecture.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Network Analysis - Transient analysis of first and second-order circuits and Higher-order
                            circuits.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Power Systems: Analysis of electrical power systems.
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Electricity and Electronics
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Linear Integrated Circuits
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Feedback Control Systems
                        </li>
                    </ul>
                </div>


            </section>









            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from work I enjoy spending time with my family, playing the guitar, and working out. I am
                        always interested in
                        learning new ideas and technologies. At the end of the day I unwind by watching whatever is on
                        TV or listening to music.
                    </p>
                    <p class="mb-0">In the winter I enjoy visiting my mother in Colorado. A trip to the mountains is
                        always refreshing.</p>
                </div>
            </section>
            <hr class="m-0" />
            {{-- <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Google Analytics Certified Developer
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            Mobile Web Specialist - Google Certification
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2009
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            Place - University of Colorado Boulder - Emerging Tech Competition 2008
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            Place - James Buchanan High School - Hackathon 2006
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            Place - James Buchanan High School - Hackathon 2005
                        </li>
                    </ul>
                </div>
            </section> --}}
        </div>
        <!-- Bootstrap core JS-->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/portfolio.js') }}"></script>
    </body>

</html>
