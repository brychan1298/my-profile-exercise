<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/profile.css">
    <script src="js/profile.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-dark bg-opacity-50">
        <div class="container">
            <h2 class="navbar-brand">
                <a href="#carousel" class="text-decoration-none text-light">Brychan's Profile</a>
            </h2>
            <div class="collapse navbar-collapse ms-5" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu1">
                    <li class="nav-item px-5 ">
                        <a class="nav-link text-light" aria-current="page" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link text-light" href="#education">Education</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link text-light" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link text-light" href="#project">Projects</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link text-light" href="#hobby">Hobby</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carousel" class="carousel slide carousel-fade">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x400/?web-programming" class="d-block w-100" alt="...">
                <div class="carousel-caption bg-danger-subtle text-start">
                    <p>Hi, You!</p>
                    <h1>Enjoy my Profile</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x400/?web-programming" class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption d-none d-md-block">
                    <h1>Tugas BIO X ML</h1>
                    <p class="fs-3">Mengerjakan project BIO X ML(TBC Prediction) Bersama teman-teman Cawu 4</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/100x400/?web" class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption d-none d-md-block .bg-danger-subtle">
                    <h1>Tugas Pancasila</h1>
                    <p class="fs-3">Mengerjakan project CB:Kewarganegaraan Bersama teman-teman Cawu 4</p>
                </div> --}}
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container pt-5" id="profile">
        <div class="row shadow p-3 bg-white rounded d-flex align-items-center">
            <div class="col-lg-6 d-flex justify-content-left align-items-center">
                <div class="ms-5">
                    <img src="img/profile-2.jpeg" alt="profile" class="img rounded-circle img-thumbnail float-start"
                        style="height: 150px;width:150px;object-fit:contain">
                </div>
                <div class="m-4">
                    <div class="d-flex">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <h6 class="my-auto d-block ms-2">
                            Brychan Artanto
                        </h6>
                    </div>
                    <div class="d-flex mt-3">
                        <span class="material-symbols-outlined">
                            cake
                        </span>
                        <h6 class="my-auto d-block ms-2">
                            02 November 2003
                        </h6>
                    </div>
                    <div class="d-flex mt-3">
                        <span class="material-symbols-outlined">
                            school
                        </span>
                        <h6 class="my-auto d-block ms-2">
                            Binus University Student
                        </h6>
                    </div>
                    <div class="d-flex mt-3">
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                        <h6 class="my-auto d-block ms-2">
                            Rumah Talenta Bca
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h4>Hi, I'm Brychan Artanto</h4>

                <p>
                    As mentioned above, my name is Brychan Artanto. I am 19 years old as of the time of writing this
                    because I was born on November 2, 2023. I come from Pontianak, Kalimantan Barat to Sentul to achieve
                    higher education. As a student at Bina Nusantara University, I have the motivation to see the world
                    from a better perspective. For example, from the inside of the earth or even from outside the earth
                    itself.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6 p-5">
                <b>
                    <h2 class="text-warning mx-5 px-5 pt-5 pb-2 about-me">About Me</h2>
                </b>
                <p class="fs-3 mx-5 px-5">
                    Some things you should know about Brychan Artanto
                </p>
                <p class="fs-6 mx-5 px-5 pb-5 text-muted">
                    a young man who tries to enjoy his life but suddenly realizes that he is living in the real world
                    where happiness is fake. Nah, just kidding, I've actually had a lot of fun in life, now I'm at the
                    stage to fight for life to be even better.
                </p>

            </div>
            <div class="col-lg-6">
                <img src="img/image.png" alt="" class="w-50 m-auto d-block bg-secondary rounded-circle">
            </div>
        </div>


        <div class="pt-5" id="education">
            <h1 class="">Education</h1>
            <div class="row">
                <div class="col-lg-6 d-flex border-bottom float-start align-items-start mt-2 p-4 border-end">
                    <img src="img/taman-kanak-kanak.jpeg" alt="" class="img-fluid rounded-circle"
                        style="width: 100px;height:100px;object-fit:contain;">
                    <div class="ms-3">
                        <h5><b>TK Barunawati Pontianak</b></h5>
                        <small class="text-secondary">
                            2008 - 2009
                        </small>
                        <p>
                        <div class="100">
                            Entered kindergarten in 2008 or at the age of 5 years. Here I learn to interact with
                            children my age.
                            At this stage, I learned the basics of life with good kindergarten teachers
                        </div>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex border-bottom float-start align-items-start mt-2 p-4">
                    <img src="img/ph.jpeg" alt="" class="img-fluid rounded-circle"
                        style="width: 100px;height:100px;object-fit:contain;">
                    <div class="ms-3">
                        <h5><b>SD Pelita Harapan</b></h5>
                        <small class="text-secondary">
                            2009 - 2015
                        </small>
                        <p>
                        <div class="100">
                            A year in Kindergarten, I leveled up to elementary school. Here I met more new friends. At
                            this stage I learn general and basic things in school lessons. 6 years in elementary school,
                            I formed my way of thinking
                        </div>
                        </p>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-6 d-flex border-bottom float-start align-items-start p-4 border-end">
                    <img src="img/bruder.jpeg" alt="" class="img-fluid rounded-circle"
                        style="width: 100px;height:100px;object-fit:contain;">
                    <div class="ms-3">
                        <h5><b>SMP Bruder Pontianak</b></h5>
                        <small class="text-secondary">
                            2015 - 2018
                        </small>
                        <p>
                        <div class="100">
                            6 years have passed, now I enter junior high school. As one of the most famous schools in
                            Pontianak, I meet lots of people here. As a teenager, I know more about this world.
                        </div>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex border-bottom float-start align-items-start  p-4">
                    <img src="img/imma.jpeg" alt="" class="img-fluid rounded-circle"
                        style="width: 100px;height:100px;object-fit:contain;">
                    <div class="ms-3">
                        <h5><b>SMK Kristen Immanuel Pontianak</b></h5>
                        <small class="text-secondary">
                            2018 - 2021
                        </small>
                        <p>
                        <div class="100">
                            After graduating from junior high school, I decided to enter a vocational high school so
                            that I could immediately enter the world of practice. Here I first got to know about
                            programming and coding. From here, the real journey of life begins.
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 border-bottom p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <img src="img/bca.png" alt=""
                                class="img-thumbnail rounded-circle d-block mx-auto d-block"
                                style="width: 100px;height:100px;object-fit:contain;">

                            <img src="img/binus.png" alt=""
                                class="img-thumbnail rounded-circle d-block mx-auto d-block"
                                style="width: 100px;height:100px;object-fit:contain;">
                        </div>


                        <div class="col-lg-9">
                            <h5><b>PPTI BCA x BINUS University</b></h5>
                            <small class="text-secondary">
                                2021 - Now
                            </small>
                            <p>
                            <div class="100">
                                After looking around for scholarships, I finally found the PPTI BCA scholarship and in
                                short, I was accepted. The next stage for me is this college. More and more new things I
                                can learn and experience will continue to grow.
                            </div>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

        <div class="row mt-5" id="skill">
            <div class="col-lg-12">
                <div class="">
                    <h1>
                        Skills
                    </h1>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-7">
                <p class="fs-5 text-lg-start text-muted">
                    My journey with web programming started during my vocational high school years.
                    Back then, I was introduced to the basics of HTML and CSS and found it fascinating
                    how a few lines of code could produce such beautiful and functional websites. As I
                    progressed through my studies, I became more interested in the backend development
                    aspect of web programming, and I started learning programming languages like PHP and
                    JavaScript. I also began experimenting with frameworks like Laravel and React, which
                    allowed me to build more complex and interactive web applications. Although my journey
                    with web programming had its fair share of challenges, such as debugging and dealing with
                    compatibility issues, I never lost my passion for it.
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 tes">
                <div class="col-lg-12 shadow p-3 mb-5 bg-white rounded tes">
                    <h3 class="text-center border-bottom pb-3">
                        Web Programming
                    </h3>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="img/html.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>HTML 5</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="img/css-3.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>CSS 3</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="img/js.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Javascript</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/bootstrap.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Bootstrap</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/php.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>PHP</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/laravel.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Laravel</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="row mt-5">
            <div class="col-lg-4 tes">
                <div class="col-lg-12 shadow p-3 mb-5 bg-white rounded">
                    <h3 class="text-center border-bottom pb-3">
                        Software Programming
                    </h3>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="img/C.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>C</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="img/cplus.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>C++</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="img/csharp.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>C#</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/java.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Java</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/python.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Python</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/R.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>R</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7">
                {{-- <h2>My story in Software Programming</h2> --}}
                <p class="fs-5 text-right text-muted">
                    My journey with software programming started back in vocational high school.
                    At first, I didn't think much of it, but as study more into the subject,
                    I found myself captivated by the logic and creativity required to write code.
                    I spent countless hours poring over textbooks and practicing programming languages,
                    slowly but surely mastering the basics. As I progressed, I started to take on more
                    challenging projects, including building my own websites and creating simple games.
                    Despite the occasional frustration and setbacks, I found immense satisfaction in the
                    process of problem-solving and bringing my ideas to life through programming.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-7">
                <p class="fs-5 text-start text-muted">
                    My journey with designing, both web and video, started during my vocational high school years. I
                    initially only saw it as a way to complete my assignments, but as I delved deeper into it, I found
                    that I had a natural flair for design. I was fascinated by how a few design elements could
                    completely change the look and feel of a website or video. I started to experiment with various
                    design tools such as Photoshop, Illustrator, and Premiere Pro, and I found that I loved the creative
                    process of bringing my ideas to life.
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 tes">
                <div class="col-lg-12 shadow p-3 mb-5 bg-white rounded">
                    <h3 class="text-center border-bottom pb-3">
                        Designing
                    </h3>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="img/figma.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Figma</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="img/canva.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Canva</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="img/ps.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Photoshop</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/filmora.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Filmora</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/adobe.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Adobe XD</b>
                                </p>
                            </div>
                            <div class="col-lg-4 text-center mt-3">
                                <img src="img/axure.png" alt="" class="img-fluid w-75 mx-auto d-block">
                                <p>
                                    <b>Axure</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5" id="project">
            <h1>Projects</h1>
            <div class="col-lg-12 row align-items-center pt-5 mb-5">
                <div class="col-lg-5">
                    <p class=" fs-3 text-uppercase text-justify mx-5 mt-5 p-2 border-bottom border-3 border-dark">
                        In this section, I want show you what i have done with all sorts of skills I've learned
                    </p>
                    <p class="mx-5 p-2 text-muted">
                        Projects that I shown are several projects or tasks that have been done since Vocational High
                        School. of course these projects could not be completed without the help of my group friends
                    </p>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <img src="img/mulmed.jpeg" alt="" class="w-75">
                        <img src="img/tretan.jpeg" alt="" class="w-50 mt-5 float-end me-5">
                    </div>
                    <div>
                        <img src="img/SE.jpeg" alt="" class="w-75">
                    </div>

                </div>
            </div>

            <div class="col-lg-8 mt-5">
                <section>
                    <div class="container py-5">
                        <div class="main-timeline-2">
                            <div class="timeline-2 left-2">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <img src="img/zinfo.png" class="card-img-top w-25 bg-primary"
                                            alt="Responsive image">
                                        <h4 class="mt-3">Zinfo (Website to search for events, Software Engineering's
                                            Project)</h4>
                                        <small class="text-muted">
                                            October 2022 - February 2023
                                        </small>
                                        <div>
                                            Technology used:
                                            <small>
                                                HTML, CSS, Javascript, PHP, MySQL
                                            </small>
                                        </div>
                                        <div class="">
                                            <a href="https://github.com/brychan1298/zinfo"
                                                class="d-flex align-items-center text-decoration-none">
                                                https://github.com/brychan1298/zinfo
                                                <span class="material-symbols-outlined ms-1">
                                                    logout
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-2 right-2">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <img src="img/heroin.png" class="card-img-top w-25 bg-primary"
                                            alt="Responsive image">
                                        <h4 class="mt-3">HeroIn (Face Recognition Website for Indonesia's National
                                            Heroes, Artificial Inteligence's Project)</h4>
                                        <small>
                                            June 2022 - October 2022
                                        </small>
                                        <div>
                                            Technology used:
                                            <small>
                                                Python, Flask, OpenCV, HTML, CSS
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-2 left-2">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <img src="img/medics.png" class="card-img-top w-25 bg-primary"
                                            alt="Responsive image">
                                        <h4 class="mt-3">Medics (Hospital ERP System, High School's Project)</h4>
                                        <small>
                                            January 2020 - June 2021
                                        </small>
                                        <div>
                                            Technology used:
                                            <small>
                                                Laravel 7, Bootstrap 4, Jquery, MySQL
                                            </small>
                                        </div>
                                        <div class="">
                                            <a href="https://github.com/brychan1298/medics"
                                                class="d-flex align-items-center text-decoration-none">
                                                https://github.com/brychan1298/medics
                                                <span class="material-symbols-outlined ms-1">
                                                    logout
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <div class="col-lg-4 mt-5">
                <div class="col-lg-12 shadow p-3 mb-5 bg-white rounded">
                    <h3>Current Project</h3>
                    <div class="d-flex mt-4 justify-content-between">
                        <div class="">
                            <h5>Web Programming Project</h5>
                            <small>Client: <b>Anderies</b>, Topic: -</small><br>
                            <small>Status: <label class="text-danger">On Process</label></small>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                <path
                                    d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex mt-4 justify-content-between">
                        <div class="">
                            <h5>User Experience Project</h5>
                            <small>Client: <b>Azani Cempaka Sari</b>, Topic: <b>Smart Home App</b></small><br>
                            <small>Status: <label class="text-danger">User Story</label></small>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                <path
                                    d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex mt-4 justify-content-between">
                        <div class="">
                            <h5>Data Mining</h5>
                            <small>Client: <b>Ivan Halim Parmonangan</b>, Topic: <b>Divorce Dataset</b></small><br>
                            <small>Status: <label class="text-danger">Collect Dataset</label></small>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                <path
                                    d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                            </svg>
                        </div>
                    </div>
                    <div class="d-flex mt-4 justify-content-between">
                        <div class="">
                            <h5>Research Methodology</h5>
                            <small>Client: <b>Said Achmad</b>, Topic: <b>Divorce Prediction</b></small><br>
                            <small>Status: <label class="text-danger">Collect Dataset</label></small>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                <path
                                    d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5" id="hobby">
        <h1>What i like to do?</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/haikyuu.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="flip-card-front text-light bg-dark bg-opacity-50">
                            <div class="m-auto d-block shifted fs-1">Volleyball</div>
                        </div>
                        <div class="flip-card-back p-5 fs-6">
                            <h2 class="border-bottom border-1 border-dark pb-1">Why I Love Volley?</h2>
                            <p class="text-start pt-2">
                                My first time watching haikyuu anime. I feel the power of the anime coursing through my
                                veins. So I decided to go to the complex court and play volleyball with lots of people
                                and I got KOed. Of course I didn't give up and continued to play volleyball until it
                                became my hobby until now.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/anime.png" class="card-img-top" alt="...">
                        </div>
                        <div class="flip-card-front text-light bg-dark bg-opacity-50">
                            <div class="m-auto d-block shifted fs-1">Watching</div>
                        </div>
                        <div class="flip-card-back p-5 fs-6">
                            <h2 class="border-bottom border-1 border-dark pb-1">Why I Love Watching?</h2>
                            <p class="text-start pt-2">
                                Other thing that i love so much to do is <b>Watching</b>. Whatever show, i'd love to
                                watch itu especially <b>Anime</b>. watching movies, anime, youtube, and other things in
                                my opinion is very relaxing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="img/sleep.jpeg" class="card-img-top" alt="...">
                        </div>
                        <div class="flip-card-front text-light bg-dark bg-opacity-50">
                            <div class="m-auto d-block shifted fs-1">Sleep</div>
                        </div>
                        <div class="flip-card-back p-5 fs-6">
                            <h2 class="border-bottom border-1 border-dark pb-1">Why I Love Sleep?</h2>
                            <p class="text-start pt-2">
                                As a Cawu 5's BINUS University Student. I realized that the most important thing as a
                                College Student is <b>Sleep</b>. No matter how hard things get, you can always get to
                                sleep especially when you get so much project waiting to be done.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted py-3">
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Technology
                        </h6>
                        <p>
                            <a class="text-reset text-decoration-none">Laravel</a>
                        </p>
                        <p>
                            <a class="text-reset text-decoration-none">Bootstrap</a>
                        </p>
                        <p>
                            <a class="text-reset text-decoration-none">Jquery</a>
                        </p>
                        <p>
                            <a class="text-reset text-decoration-none">Blade</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Section
                        </h6>
                        <p>
                            <a href="#profile" class="text-reset">Profile</a>
                        </p>
                        <p>
                            <a href="#education" class="text-reset">Education</a>
                        </p>
                        <p>
                            <a href="#skill" class="text-reset">Skills</a>
                        </p>
                        <p>
                            <a href="#project" class="text-reset">Project</a>
                        </p>
                        <p>
                            <a href="#hobby" class="text-reset">Hobby</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>brychan58@gmail.com
                        </p>
                        <p class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-instagram me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>brycha.n
                        </p>
                        <p class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-telephone-fill me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>0821-5731-8364
                        </p>
                        <p class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-facebook me-2" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>Brychan Artanto
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Website's Background
                        </h6>
                        <p>
                            This website is a warm-up assignment for Web Programming lessons in Cawu 4 of my lecture. My
                            lecturer asked us to create a website profile using Laravel and a CSS framework. So that
                            this simple web was created, I hope that in the future I can create even better works using
                            Laravel.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a> --}}
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 300) {
                    $(".navbar").addClass("shadow p-3 mb-5 bg-dark rounded");
                    $(".navbar").removeClass("bg-opacity-50");
                } else {
                    $(".navbar").addClass("bg-opacity-50");
                    $(".navbar").removeClass("shadow p-3 mb-5 rounded");
                }
            })
        })
    </script>
</body>

</html>
