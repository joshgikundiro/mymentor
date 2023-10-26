<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,700;1,600&display=swap');

    * {
        font-family: 'Archivo', sans-serif;


    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
@extends('admindash')
@section('title', 'upload new course')
@section('content')
@if (session('success'))
        <div class="alert alert-{{ session('status') }} alert-dismissible bg-[#025fff] fade fixed-top left-[70%] md:mt-5 md:py-2 show text-[14px] text-white w-[233px]"
            role="alert">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
<div class="">
    <div
    class="bg-white  break-words lg:mt-20 max-w-md mb-6 md:max-w-2xl min-w-0 mt-16 mx-auto relative rounded-xl shadow-lg w-full">
    <div class="px-6 py-3">
            <h2 class="border-b border-slate-200 py-3 flex justify-center font-bold text[20px] ">Upload a course </h2>

            <form action="{{route('uploadcourse')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Course title</label>
                  <input type="text" name="title" id="title" class="form-control">
                  <div class="row">
                    <div class="col  ">
                        <label for="" class="mb-2">Upload Course file</label>
                        <input type="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="file" name="file">
                    </div>
                </div>
                <div class="form-group">
                  <label for="description">Course decription</label>
                  <textarea name="desc" id="desc" class="form-control "></textarea>
                </div>
                <div class="pt-2">
                    <button type="submit" class=" mt-2 px-3 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Save Changes</button>

                    {{-- <a href="/profile/edit">
                        <button class="px-4 py-2 border-2 border-blue-600 text-black rounded hover:bg-blue-600">cancel</button>
                    </a> --}}
                </div>
              </form>

            </div>


        </div>
    </div>


</div>
@endsection
