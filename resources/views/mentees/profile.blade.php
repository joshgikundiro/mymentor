<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,700;1,600&display=swap');

    * {
        font-family: 'Archivo', sans-serif;


    }
</style>

@extends('dash2')
@section('title', 'myMentor | mentor profile')
@section('content')

 {{-- ⚒️success alert⚒️ --}}
 @if (session('message'))
 <div class="alert alert-{{ session('status') }} alert-dismissible fade show  bg-[#025fff] fade  md:ml-3 md:mt-5 md:py-2 px-2 show text-[14px] text-white w-[20%]" role="alert">
     <strong>{{ session('message') }}</strong>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 @endif
 {{-- end alert --}}
    <div
        class="bg-white break-words lg:mt-20 max-w-md mb-6 md:max-w-2xl min-w-0 mt-16 mx-auto relative rounded-xl shadow-lg w-full">
        <div class="px-6">
            <div class="flex flex-wrap justify-center">
                <div class="w-full flex justify-center">
                    <div class="relative">
                        <img src="{{ asset('storage/images/' . auth()->user()->profilePicture) }}"
                            class="-m-24 -ml-20 absolute align-middle border-none lg:-ml-16 lg:max-w-[150px] max-w-[100px] rounded-full shadow-xl" />
                    </div>
                </div>
                <div class="w-full text-center mt-32">
                    <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                        <div class="p-3 text-center">
                            <span
                                class="text-xl font-bold block uppercase tracking-wide text-slate-700">{{ auth()->user()->address }}</span>
                            <span class="text-sm text-slate-400"><i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Address</span>
                        </div>
                        <div class="p-3 text-center">
                            <span
                                class="text-xl font-bold block uppercase tracking-wide text-slate-700">{{ auth()->user()->phoneNumber }}</span>
                            <span class="text-sm text-slate-400"><i class="fa-solid fa-phone mr-2 text-slate-400 opacity-75"></i>Phone</span>
                        </div>

                        <div class="p-3 text-center">
                            <span
                                class="text-xl font-bold block uppercase tracking-wide text-slate-700">{{ auth()->user()->profession }}</span>
                            <span class="text-sm text-slate-400"><i class="fa-solid fa-briefcase mr-2 text-slate-400 opacity-75"></i>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2">
                {{-- {{$user->fullname }} --}}
                <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{{ auth()->user()->fullname }} </h3>
                <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                    <i class="fa-solid fa-envelope mr-2 text-slate-400 opacity-75"></i>{{ auth()->user()->email }}
                </div>
            </div>
            <div class="mt-6 py-6 border-t border-slate-200 text-center">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full px-4">
                        <p class="font-light leading-relaxed text-slate-600 mb-4">{{ auth()->user()->bio }}</p>
                        <!-- Button to open the modal -->
                        <a href="/mprofile/edit">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit my
                                profile</button>
                        </a>


                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="relative pt-6 pb-2 mt-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="">
                    <a href="/mentor">
                        <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </footer>
@endsection
