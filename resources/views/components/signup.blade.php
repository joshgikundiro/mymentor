<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500;600;700&display=swap')
</style>
<div class=" my-4 md:px-5  sm:flex-col sm:my-0 sm:w-full md:flex md:flex-col lg:flex lg:flex-row  lg:w-[70%] lg:mx-auto"
    id="signup">
    {{-- <form action="{{ url('/signup') }}" method="POST" class="lg:d-flex  lg:flex-column lg:gap-2 lg:flex-col"> --}}
    <form action="" method="POST" class=" sm:flex sm:flex-col bg-[#f7f7f7] px-5 md:p-5 gap-2">
        @csrf
        <div class="row">
            <div class="h2 p-4" style="font-family: var(--sans-1);font-weight:600;font-size:var(--font-25)">
                Register as a mentee</div>
            <div class="col">
                <label for="name" class="mb-2">Full names</label>
                <input type="text" class="form-control" placeholder="Ex: Joe" aria-label="full names" name="fullName"
                    required>
            </div>

        </div>
        <div class="row">
            <div class="col   ">
                <label for="" class="mb-2">Email</label>
                <input type="text" class="form-control" placeholder="ex: joedeepdoe@gmail.com" aria-label="Email"
                    name="email" required>
            </div>
            <div class="col  ">
                <label for="" class="mb-2">Username</label>

                <input type="text" class="form-control" placeholder="Enter username" aria-label="username"
                    name="userName" required>
            </div>
        </div>
        <div class="row">
            <div class="col  ">
                <label for="" class="mb-2">Phone number</label>
                <input type="text" class="form-control" placeholder="Ex: +250781234567" aria-label="Phone number"
                    name="phoneNumber" required>
            </div>
            <div class="col  ">
                <label for="" class="mb-2">Address</label>
                <input type="text" class="form-control" placeholder="Ex: Kigali, Kicukiro" aria-label="Address"
                    name="address" required>
            </div>
        </div>
        <div class="row">

            <div class="col  ">
                <label for="" class="mb-2">Password</label>
                <input class="form-control" type="password" name="password" id="">
            </div>
        </div>
        <div class="row">
            <div class="col  ">
                <label for="" class="mb-2">Upload profile picture</label>
                <input type="file" class="form-control" id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="profilePicture">
            </div>
        </div>
        <div class="row">

            <div class="col  ">
                <label for="" class="mb-2">Role</label>
                <select class="form-select  aria-label="Default select example" name="role">
                    <option selected>Choose your profile type</option>
                    <option value="1">Mentor</option>
                    <option value="2">Mentee</option>
                </select>
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
