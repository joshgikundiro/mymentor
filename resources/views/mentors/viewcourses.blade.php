<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,700;1,600&display=swap');

    * {
        font-family: 'Archivo', sans-serif;


    }
</style>
@extends('dash')
@section('title', 'mymentor | all courses')
@section('content')
@if (session('success'))
<div class="alert alert-{{ session('status') }} alert-dismissible bg-[#025fff] fade fixed-top left-[70%] md:mt-5 md:py-2 show text-[14px] text-white w-[233px]"
    role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif


    <div class="container flex flex-col  gap-3">


        {{-- <x-welcomehero /> --}}
        <div class="bg-[#f7f7f7] container md:pt-4 mx-auto  rounded-sm">
            <div class="font-bold text-[24px] mb-4">All courses published</div>
            <div class="flex flex-wrap -mx-4">
                @foreach ($courses as $course)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <a href="">
                                <img class="w-full h-48  object-cover object-center"
                                src="./img/Frame.jpg" alt="">
                            </a>
                            <div class="p-4">
                                <h2 class="text-lg font-semibold text-gray-900">{{ $course->title }}</h2>
                                <p class="text-gray-600"><i class="fa-solid fa-briefcase mr-2 text-slate-400 opacity-75"></i>{{ optional ($course)->desc ?? 'Description not available'}}</p>
                                <a href="{{url('/download', $course->file)}}">
                                    <button class="bg-gray-500 hover:bg-gray-600 mt-5 px-4 py-2 rounded text-white w-full">Download file</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="">
                <a href="/mentor">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Back</button>
                </a>

            </div>

        </div>

    @endsection
