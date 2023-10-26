<div class="gap-4 justify-center lg:flex lg:mx-auto lg:w-[33%] md:flex md:flex-col my-4 sm:flex-col sm:my-0 sm:w-full"
    id="signup">
    <form action="/session" method="POST" class=" sm:flex sm:flex-col md:p-5 bg-[#f9f9f9] lg:w-50 ">
        @csrf
        <div class="row">
            <div class="h2 p-4 flex justify-center" style="font-family: var(--sans-1);font-weight:600;font-size:var(--font-25)">
               Login  </div>
            <div class="col ">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="ex: joedeepdoe@gmail.com" aria-label="Email"
                    name="email">
                @error('email')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    @enderror
                </div>

            </div>
            <div class="row">

            </div>
            <div class="row">

                <div class="col">
                    <label for="">Password</label>
                    <input class="form-control" type="password" name="password" id="">
                    @error('$password')
                        <div class="text-red-500  text-sm">
                            {{ $message }}
                        @enderror
                    </div>
                    <input type="submit"
                        class=" bg-[#025FFF] sm:py-2 sm:rounded-md text-white font-bold col-4 mt-3 sm:w-full buttony "
                        value="Login">

                </div>
    </form>
    <div
        class="lg:col flex flex-col md:bg-[#025FFF] lg:flex-col sm:flex-col sm:w-full sm:mx-auto  sm:justify-center lg:justify-center content-center">

        <div class="h2 mt-10 text-center sm:self-baseline md:mx-auto  sm:text-[#000] md:text-[#fff]"
            style="font-family: var(--font-3); font-size:var(--font-31);">
            Don't have account yet ?
        </div>
        <a href="/register" class="flex justify-center mb-2"><button
                class=" btn btn-primary sm:text-color1 sm:w-full font-bold md:text-[#fff] lg:w-52 lg:mx-14 "
                style="background:none; border:1px solid #fff;">Create account</button></a>

    </div>

</div>
