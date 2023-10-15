<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="app.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/bootstrap-icons.svg">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    {{-- fonts link --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
    <div class="flex justify-center ">
        <a href="/"><x-weblgo /></a>
    </div>
    <div class="gap-4 justify-center lg:flex lg:mx-auto lg:w-[33%] md:flex md:flex-col my-4 sm:flex-col sm:my-0 sm:w-full"
    id="signup">
    <form action="/mentorlogin" method="POST" class=" sm:flex sm:flex-col md:p-5 bg-[#f9f9f9] lg:w-50 ">
        @csrf
        <div class="row">
            <div class="h2 p-4" style="font-family: var(--sans-1);font-weight:600;font-size:var(--font-25)">
                Welcome back...</div>
            <div class="col ">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="ex: joedeepdoe@gmail.com" aria-label="Email"
                    name="email" required>
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
                        class=" bg-[#5cb85c] sm:py-2 sm:rounded-md text-white font-bold col-4 mt-3 sm:w-full buttony "
                        value="Login">
                </div>
    </form>
    <div
        class="lg:col flex flex-col md:bg-[#5cb85c] lg:flex-col sm:flex-col sm:w-full sm:mx-auto  sm:justify-center lg:justify-center content-center">

        <div class="h2 mt-10 text-center sm:self-baseline md:mx-auto  sm:text-[#000] md:text-[#fff]"
            style="font-family: var(--font-3); font-size:var(--font-31);">
            Don't have account yet ?
        </div>
        <a href="/register" class="flex justify-center mb-2"><button
                class=" btn btn-primary sm:text-color1 sm:w-full font-bold md:text-[#fff] lg:w-52 lg:mx-14 "
                style="background:none; border:1px solid #fff;">Create account</button></a>

    </div>

</div>

</body>
</html>
