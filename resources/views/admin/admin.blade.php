<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,700;1,600&display=swap');

    * {
        font-family: 'Archivo', sans-serif;


    }
</style>
@extends('admindash')
@section('title', 'mymentor | Admin')
@section('content')
    @if (session('success'))
        <div class="alert alert-{{ session('status') }} alert-dismissible bg-[#025fff] fade fixed-top left-[70%] md:mt-5 md:py-2 show text-[14px] text-white w-[233px]"
            role="alert">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    {{-- end alert --}}
    <div class="container flex flex-col  gap-3">
        <div
            class=" bg-[#f7f7f7] flex flex-col flex-nowrap items-center  h-20 lg:justify-between lg:w-full md:flex-row md:items-center px-5 rounded-sm w-80 z-10">
            <div class="relative mt-4 flex flex-col gap-2">
                <span class="font-bold sm:mt-4 my-auto flex-nowrap md:text-[35px] text-[24px]">Welcome
                    {{ auth()->user()->fullname }}</span>
            </div>
            <span class="my-auto lg:px-5 text-[12px]">🟢 Admin</span>

        </div>

        <div class="bg-[#f7f7f7] container md:pt-4 mx-auto  rounded-sm">
            <div class="bg-[#f7f7f7] container md:pl-7 md:pt-4 mx-auto rounded-sm">
                <div class="font-bold text-[24px] mb-4">All profiles created </div>
                <table class="table-auto w-[90%] text-center ">
                    <thead>
                        <tr>
                            <th class="border-t border-b border-l border-slate-300 py-3">ID</th>
                            <th class="border-t border-b border-slate-300 py-3">Name</th>
                            <th class="border-t border-b border-slate-300 py-3">Email</th>
                            <th class=" border-t border-b border-slate-300 py-3">Role</th>
                            <th class=" border-t border-r border-b border-slate-300 py-3">Profession</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="px-5 whitespace-nowrap">
                                <td class="border-b border-l border-slate-300 py-3">{{ $user->id }}</td>
                                <td class="border-b border-slate-300 py-3">{{ $user->fullname }}</td>
                                <td class="border-b border-slate-300 py-3">{{ $user->email }}</td>
                                <td class="border-b border-slate-300 py-3">{{ $user->role }}</td>
                                <td class="border-b border-r border-slate-300 py-3">{{ $user->profession }}</td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="bg-[#f7f7f7] container md:pt-4 mx-auto  rounded-sm">
            <div class="bg-[#f7f7f7] container md:pl-7 md:pt-4 mx-auto rounded-sm">
                <div class="font-bold text-[24px] mb-4">Requests pending </div>
                <table class="table-auto w-[90%] text-center ">
                    <thead>
                        <tr>
                            <th class="border-t border-b border-l border-slate-300 py-3">Request id</th>
                            <th class="border-t border-b border-slate-300 py-3">Mentee name</th>
                            <th class="border-t border-b border-slate-300 py-3">mentor name</th>
                            <th class="border-r border-t border-b border-slate-300 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requests as $user)
                            <tr class="px-5 whitespace-nowrap">
                                <td class="border-b border-l border-slate-300 py-3">{{ $user->id }}</td>
                                <td class="border-b  border-slate-300 py-3">{{ $user->requester->fullname }}</td>
                                <td class="border-b border-slate-300 py-3">{{ $user->receiver->fullname }}</td>
                                <td class="border-b border-r border-slate-300 py-3">{{ $user->Status }}</td>
                                <td></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="bg-[#f7f7f7] container md:pt-4 mx-auto   rounded-sm">
            <div class="font-bold text-[24px] mb-4 ml-7">Uploaded Courses </div>
            <div class="flex ml-7">
                @foreach ($courses as $course)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <a href="">
                                <img class="w-full h-48  object-cover object-center" src="./img/Frame.jpg" alt="">
                            </a>
                            <div class="p-4">
                                <h2 class="text-lg font-semibold text-gray-900">{{ $course->title }}</h2>
                                <p class="text-gray-600"><i
                                        class="fa-solid fa-briefcase mr-2 text-slate-400 opacity-75"></i>{{ optional($course)->desc ?? 'Description not available' }}
                                </p>
                                <div class="flex items-end justify-between">

                                    <a href="{{ url('/download', $course->file) }}">
                                        <button
                                            class="bg-gray-500 hover:bg-gray-600 mt-5 px-4 py-2 rounded text-white w-full">Download
                                            file</button>
                                    </a>
                                    <form action="{{ route('course.delete', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete
                                            course</button>

                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="">
                <a href="/adviewcourses">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 ml-7">View All Courses</button>
                </a>
            </div>
        </div>

    </div>

@endsection
