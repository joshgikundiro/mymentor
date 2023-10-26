<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,700;1,600&display=swap');

    * {
        font-family: 'Archivo', sans-serif;


    }
</style>
@extends('dash')
@section('title', 'myMentor⭐welcome')
@section('content')

<div class="">
    <div
    class="bg-white  break-words lg:mt-20 max-w-md mb-6 md:max-w-2xl min-w-0 mt-16 mx-auto relative rounded-xl shadow-lg w-full">
    <div class="px-6 py-3">
            <h2 class="border-b border-slate-200 py-3 flex justify-center font-bold text[20px] ">Update your information</h2>

            <form action="{{route('profile.update')}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                  <label for="fullname">Fullname</label>
                  <input type="text" name="fullname" id="fullname" value="{{ auth()->user()->fullname }}" class="form-control">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" value="{{ auth()->user()->email }}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="profilePicture">Password</label>
                  <input type="password" name="password" id="password" value="{{ auth()->user()->password }}" class="form-control">
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" value="{{ auth()->user()->address }}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phoneNumber">Phone Number</label>
                  <input type="text" name="phoneNumber" id="phoneNumber" value="{{ auth()->user()->phoneNumber }}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">profession</label>
                  <input type="text" name="profession" id="profession" value="{{ auth()->user()->profession }}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="bio">Bio:</label>
                  <textarea name="bio" id="bio" class="form-control ">{{ auth()->user()->bio }}</textarea>
                </div>
                <div class="pt-2">
                    <button type="submit" class=" mt-2 px-3 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Save Changes</button>

                    <a href="/profile/edit">
                        <button class="px-4 py-2 border-2 border-blue-600 text-black rounded hover:bg-blue-600">cancel</button>
                    </a>
                </div>
              </form>

            </div>


        </div>
    </div>


</div>
@endsection
