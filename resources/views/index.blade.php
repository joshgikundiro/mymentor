@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebMentor | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="app.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/bootstrap-icons.svg">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    {{-- fonts link --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLY --}}


    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>


</head>


<body class="antialiased ">
    <div class="container-fluid flex flex-col">
        {{-- ⭐success alert⭐ --}}
        @if (session('message'))
            <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- end  --}}


        <div class="sm:container-fluid   sm-px-0 md:flex md:flex-col relative md:gap-10">
            <x-navbar></x-navbar>

            <div class="row  myhome md:h-[100vh] bg-[#f7fafc]">
                {{-- remember that you removed .pt-5 --}}
                <div
                    class=" container-fluid md:w-full colrev sm:w-full sm:flex sm:flex-col-reverse sm:gap-10 lg:w-full  lg:flex lg:flex-row lg:gap-24">
                    <div class="welcome sm:flex sm:flex-col lg:flex lg:flex-col " id="home">
                        <div class="hello-section w-full sm:justify-center lg:mt-20 sm:mt-4 ">

                            <div class="hello-txt  sm:flex  sm:justify-center lg:self-start ">
                                Welcome to Web Mentor
                            </div>
                            <div class="hello-txt-2 md:self-center lg:self-start">
                                Unlock your potential!
                            </div>
                        </div>
                        <div class="welcome-quote sm:text-justify sm:flex lg:flex lg:flex-col sm:text-[16px] l">
                            “It’s been true in my life that when I’ve needed a mentor, the right person shows up.”
                            <span class="quoteOwner sm:self-center lg:self-start md:self-center">–Ken Blanchard</span>
                        </div>
                        <div class="cta2 sm:flex sm:justify-center lg:justify-center md:gap-4 ">
                            <a href="/register">
                                <x-btn-pri>
                                    <x-slot:content>
                                        Get Started
                                    </x-slot:content>
                                </x-btn-pri>
                            </a>
                           

                            <a href="/logins"><button
                                    class="button sm:border-solid sm:border-2 sm:border-[#025fff]  text-[#025fff] sm:px-[42px] rounded-md sm:py-[5px] sm:mt-28 hover:text-[#fff]">Login</button></a>
                        </div>
                    </div>
                    {{-- the beginning of the carousel --}}
                    <div id="carouselExampleCaptions" class="carousel slide sm:h-22" data-bs-ride="carousel">

                        <div class="carousel-indicators md:absolute md:top-[450px]">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img src="./img/3.jpg" class="" alt="...">
                                <div class="carousel-caption sm:absolute sm:top-40 md:top-[22rem] ">
                                    <h5>First slide label</h5>
                                    <p class="repre ">Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/1.JPG" class="" alt="...">
                                <div class="carousel-caption sm:absolute sm:top-40 md:top-[22rem] ">
                                    <h5>Second slide label</h5>
                                    <p class="repre">Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/2.JPG" class="" alt="...">
                                <div class="carousel-caption sm:absolute sm:top-40 md:top-[22rem] ">
                                    <h5>Third slide label</h5>
                                    <p class="repre">Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/4.jpg" class="" alt="...">
                                <div class="carousel-caption sm:absolute sm:top-40 md:top-[22rem] ">
                                    <h5>Third slide label</h5>
                                    <p class="repre">Some representative placeholder content for the third slide.</p>
                                </div> {{-- end of contact us page --}}
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- <hr class=" lg:mx-auto lg:mt-5 sm:hidden" style="width: 25%; position: relative; "> --}}
        </div>
        <div class=" sm:container-fluid md:container-fluid about pt-4 lg:flex lg:flex-col" id="about-us">
            {{-- <div id="about"> --}}
            <span class="text-[18px] font-bold lg:w-80 self-center sm:flex sm:justify-center lg:mb-10 ">Empowering
                Growth Together</span>
            {{-- </div> --}}
            <div
                class="boxes sm:flex sm:flex-col md:grid md:content-around md:gap-x-10 md:grid-cols-2 lg:flex lg:flex-row lg:content-center ">
                <div class="cardy sm:max-w-sm lg:w-96 sm:flex-row ">
                    <i class="fa-solid fa-check-double sm:basis-1/4"></i>
                    At WebMentor, our mission is to empower individuals to reach their full potential through meaningful
                    mentorship connections.

                </div>

                <div class="cardy sm:max-w-sm lg:w-96 sm:flex-row lg:flex-col">
                    <i class="bi bi-link-45deg sm:basis-1/4"></i>
                    We link dedicated professionals who are passionate about mentorship and its transformative impact.

                </div>
                <div class="cardy sm:max-w-sm lg:w-96 sm:flex-row ">
                    <i class="fa-solid fa-handshake sm:basis-1/4"></i>
                    Whether you're looking to share your expertise as a mentor or seeking guidance as a mentee, Join us
                    on this exciting journey.

                </div>
                <div class="cardy sm:max-w-sm lg:w-96 sm:flex-row ">
                    <i class="bi bi-quote sm:basis-1/4"></i>
                    We believe that knowledge and experience should be shared, a platform that brings mentors and
                    mentees together is here.
                </div>
            </div>
        </div>
        {{-- <div class="why-us flex flex-row sm:flex-col bg-[#025fff] gap-3 "> --}}
        <div class="why-us flex lg:flex-row sm:w-full sm:relative sm:flex-col">
            <div class="left-us sm:flex sm:gap-10 sm:w-full sm:flex-col">
                <div class="areya  sm:text-[18px] sm:font-bold lg:text-[31.25px] ">
                    Are you ...
                </div>
                <div
                    class="img sm:flex sm:w-full sm:overflow-x-scroll lg:overflow-x-hidden md:justify-center md:gap-10">

                    <img src="./img/mentee.png" alt="..." class="lg:w-60 lg:h-60 relative">
                    <img src="./img/mentor.png" alt="..." class="lg:w-60 lg:h-60 relative">
                </div>
            </div>
            <div class="right-us sm:flex sm:flex-col sm:w-full sm:gap-5   ">
                <div class=" sm:text[-18px] sm:font-bold  lg:text-[31.25px] mt-3 "><i class="bi bi-dash-lg "></i>Why
                    us ?</div>
                <p class="sm:w-full sm:text-justify sm:text-[16px] whether ">Whether you are an aspiring professional
                    seeking
                    mentorship or a
                    seasoned expert ready to share your
                    wisdom, our platform connects mentors and mentees in a seamless and enriching experience.</p>
                <ul class="ul-flex sm:text-[16px]">
                    <li><i class="bi bi-check-circle-fill gap-2"></i>Our user-friendly interface ensures a hassle-free
                        experience for you!</li>
                    <li><i class="bi bi-check-circle-fill gap-2"></i>Build meaningful relationships with mentors and
                        mentees
                    </li>
                    <li><i class="bi bi-check-circle-fill gap-2"></i>Access a pool of experienced mentors eager to
                        share
                        their knowledge</li>
                    <li><i class="bi bi-check-circle-fill gap-2"></i>Discover mentors who align perfectly with your
                        interests
                        and goals.</li>
                    <div class="sm:flex sm:justify-center content-center lg:justify-start">

                        <a href="/register">
                            <x-btn-primary>

                                <x-slot:content>
                                    Register now
                                </x-slot:content>

                            </x-btn-primary>
                        </a>
                    </div>

                </ul>

            </div>
        </div>
        {{-- signup page --}}


    </div>
    {{-- end of signup page --}}
    <div class=" mt-10">
        <x-testimony />
    </div>
    <x-footer></x-footer>
    {{-- </div> --}}

    {{-- </div> --}}

    {{-- </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>



</body>

</html>
