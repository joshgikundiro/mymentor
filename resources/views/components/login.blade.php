<div class=" my-4  justify-center sm:flex-col sm:my-0 sm:w-full md:flex md:flex-col lg:flex lg:flex-row  lg:w-[70%] lg:mx-auto"
    id="signup">
    {{-- <form action="{{ url('register') }}" method="POST" class="lg:d-flex  lg:flex-column lg:gap-2 lg:flex-col"> --}}
    <form action="" method="POST" class=" sm:flex sm:flex-col md:p-5 bg-[#f9f9f9] lg:w-50 ">
        @csrf
        <div class="row">
            <div class="h2 p-4" style="font-family: var(--sans-1);font-weight:600;font-size:var(--font-25)">
                Mentee Login</div>
            <div class="col ">
                <label for="">Email</label>
                <input type="text" class="form-control" placeholder="ex: joedeepdoe@gmail.com" aria-label="Email"
                    name="email" required>
            </div>

        </div>
        <div class="row">

        </div>
        <div class="row">

            <div class="col">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
            </div>
            <input type="submit"
                class=" bg-[#025fff] sm:py-2 sm:rounded-md text-white font-bold col-4 mt-3 sm:w-full buttony "
                value="Login">
        </div>
    </form>
    <div
        class="lg:col flex flex-col md:bg-[#025fff] lg:flex-col sm:flex-col sm:w-full sm:mx-auto  sm:justify-center lg:justify-center content-center">

        <div class="h2 mt-10 text-center sm:self-baseline md:mx-auto  sm:text-[#000] md:text-[#fff]"
            style="font-family: var(--font-3); font-size:var(--font-31);">
            Join the mentorship journey today!
        </div>
        <p class="p-3 lg:text-light fw-bold text-center sm:text-[#000] md:text-[#fff]">Already signed up ?</p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal"><button
                class=" btn btn-primary sm:text-color1 sm:w-full font-bold md:text-[#fff] lg:w-52 lg:mx-14 "
                style="background:none; border:1px solid #fff;">Sign up</button></a>

        <x-signup-modal>
            <x-slot:modeltitle>
                Register to myMentor as
            </x-slot:modeltitle>
            <x-slot:option1>
                mentor
            </x-slot:option1>
            <x-slot:option2>
                mentee
            </x-slot:option2>
            <x-slot:cta>
                Submit
            </x-slot:cta>

        </x-signup-modal>
    </div>

</div>
