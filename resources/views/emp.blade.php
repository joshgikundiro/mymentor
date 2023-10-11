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
    <div class="flex justify-center ">
        <a href="/"><x-weblgo /></a>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500;600;700&display=swap')
    </style>
    <div class=" my-4 md:px-5  sm:flex-col sm:my-0 sm:w-full md:flex md:flex-col lg:flex lg:flex-row  lg:w-[70%] lg:mx-auto"
        id="signup">

        <form action="/addimage" method="POST" class=" sm:flex sm:flex-col bg-[#f7f7f7] px-5 md:p-5 gap-2" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="h2 p-4" style="font-family: var(--sans-1);font-weight:600;font-size:var(--font-25)">
                    Create
                    account</div>
                <div class="col">
                    <label for="name" class="mb-2">Full names</label>
                    <input type="text" class="form-control" placeholder="Ex: Joe" aria-label="full names"
                        name="name" required>
                </div>

            </div>

                <div class="col   ">
                    <label for="" class="mb-2">Email</label>
                    <input type="text" class="form-control" placeholder="ex: joedeepdoe@gmail.com" aria-label="Email"
                        name="email" required>
                </div>
                <div class="col  ">
                    <label for="" class="mb-2">Make a post</label>

                    <input type="text" class="form-control" placeholder="Enter username" aria-label="post"
                        name="post" required>
                </div>


            <div class="row">
                <div class="col  ">
                    <label for="" class="mb-2">Upload post thumb</label>
                    <input type="file" class="form-control" id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="image">
                </div>
            </div>

            <input type="submit" class=" bg-[#025fff]  py-2 rounded-md text-white font-bold col-4 mt-3 w-72 lg:w-full "
                value="Submit" style="font-family: 'archivo',sans-serif">



        </form>
        <div
            class="lg:col flex flex-col lg:w-80 md:bg-[#025fff] lg:flex-col sm:flex-col sm:w-full sm:mx-auto  sm:justify-center lg:justify-center content-center">

            <div class="h2 mt-10 text-center sm:self-baseline md:mx-auto  sm:text-[#000] md:text-[#fff]"
                style="font-family: var(--font-3); font-size:var(--font-31);">
                Join the mentorship journey today!
            </div>
            <p class="p-3 lg:text-light fw-bold text-center sm:text-[#000] md:text-[#fff]"
                style="font-family:'archivo',sans-serif">Already signed up ?</p>
            <div class="flex justify-center">

                <a href="/login" class=" btn-outline-success">
                    <button
                        class=" w-40 rounded-md py-2  text-[#025fff]  font-bold lg:w-52 lg:mx-14 md:text-white md:border-2 md:border-[#fff] "
                        style="background:none; border:1px solid #25f;font-family:'archivo',sans-serif">Login</button></a>
            </div>
        </div>

    </div>

    <x-footer />
</body>

</html>
