@vite ('resources/css/app.css')

    <nav class="nav md:shadow-sm  z-10 fixed flex sm:justify-between md:justify-evenly lg:justify-around lg:z-100 inset-x-0 opacity-100 bg-[#fff] lg:py-2 md:py-1">
        <div class="sm:hidden md:flex">
            <a href="/" style="text-decoration: none;color:black"><x-weblgo></x-weblgo></a>
        </div>
        <div class="links sm:hidden md:flex font-semibold md:align-baseline md:items-center md:px-10">

            <a href="#home" class="ml-5">Home</a>
            <a href="#about-us" class="ml-5">About</a>
            <a href="#testi" class="ml-5">testimonials</a>
            <a href="#" class="ml-5">Contact us</a>
        </div>
        <div class="cta-nav sm:hidden md:flex md:items-center md:py-0 px-4 bg-[#025fff] text-white rounded-[5px]">

            <a href="#">
                <button class="  sm:px-[38px] sm:py-[7px]  bg-[#025fff] mt-0 text-white rounded-md ">Login</button>
            </a>
        </div>
    </nav>
    {{-- mobile nav testing --}}
    <div class="mobLogo sm:flex decoration-0 sm:justify-center sm:py-2 md:hidden">
        <a href="/"><x-weblgo></x-weblgo></a>

    </div>
