<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,700;1,600&display=swap');

    * {
        font-family: 'Archivo', sans-serif;
        overflow: -moz-scrollbars-none;
        scrollbar-width: none;
        scrollbar-color: transparent;
        overflow: -webkit-scrollbar:none;

    }
</style>
@extends('dash2')
@section('title', 'myMentor⭐welcome')
@section('content')
@if (session('success'))
     <div x-data="{show: true}" x-init="setTimeout(() => show =false, 3000)" x-show ="show" class="alert alert-{{ session('status') }} alert-dismissible fade show  bg-[#025fff] fade fixed-top md:ml-3 md:mt-5 md:py-2 px-2 show text-[14px] text-white w-[20%]" role="alert">
         <strong>{{ session('success') }}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     @endif
     {{-- end alert --}}
    <div class="container flex flex-col  gap-3">
        {{-- ⭐ welcome div⭐ --}}
        <div class=" flex w-80 flex-col md:flex-row md:items-center bg-[#f7f7f7] z-10  h-40 rounded-sm  flex-nowrap px-5">
            <div class="relative mt-4 flex flex-col gap-2">
                <span class="font-bold sm:mt-4 my-auto flex-nowrap md:text-[70px] text-[24px]">Welcome Josh</span>
                <span class="text-[14px] font-bold">🟢 Mentee</span>
            </div>
            <span class="my-auto lg:px-5 text-[12px]">{{ time() }}</span>

        </div>
        <div class=" overflow-x-scroll lg:overscroll-none ">
            {{-- @foreach ($users as $user)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-48 object-cover object-center" src="{{ $user['image'] }}" alt="{{ $user['name'] }}">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-900">{{ $user['name'] }}</h2>
                <p class="text-gray-600">{{ $user['profession'] }}</p>
                <div class="mt-4 flex justify-between">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Send Request</button>
                    <button class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Read More</button>
                </div>
            </div>
        </div>
    @endforeach --}}

        </div>

        {{-- ⭐ end div⭐ --}}
    </div>
@endsection
