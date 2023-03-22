@extends('layouts.default')

@section('content')
    <section class="mt-20 ">
        <div class="h-screen">

        </div>


    </section>
    {{-- Project Tiles --}}
    <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 mt-20 px-10">
            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="{{ URL::to('/assets/img/project2.jpg') }}" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-dreams') }}">DREAMS - CDC</a>
                    </h1>
                    <hr>

                    <p class="text-sm pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore unde vel numquam
                        dolor neque nisi cumque? Sunt recusandae expedita qui. Veritatis, voluptate? Vel ea libero assumenda
                        molestias a. Aliquam, deleniti!...</p>
                    <br>
                    <a href="{{ route('projects-dreams') }}" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read
                        More ></a>
                </div>
            </div>

            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="{{ URL::to('/assets/img/project2.jpg') }}" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-ovc') }}">OVC - USAID</a></h1>
                    <hr>

                    <p class="text-sm pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore unde vel numquam
                        dolor neque nisi cumque? Sunt recusandae expedita qui. Veritatis, voluptate? Vel ea libero assumenda
                        molestias a. Aliquam, deleniti!...</p>
                    <br>
                    <a href="{{ route('projects-ovc') }}" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read
                        More ></a>
                </div>
            </div>
            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="{{ URL::to('/assets/img/project2.jpg') }}" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-cp') }}">Child Protection</a>
                    </h1>
                    <hr>

                    <p class="text-sm pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore unde vel numquam
                        dolor neque nisi cumque? Sunt recusandae expedita qui. Veritatis, voluptate? Vel ea libero assumenda
                        molestias a. Aliquam, deleniti!...</p>
                    <br>
                    <a href="{{ route('projects-cp') }}" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read More
                        ></a>
                </div>
            </div>
            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="{{ URL::to('/assets/img/project2.jpg') }}" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-siyakha') }}">Siyakha - TA</a>
                    </h1>
                    <hr>

                    <p class="text-sm pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore unde vel numquam
                        dolor neque nisi cumque? Sunt recusandae expedita qui. Veritatis, voluptate? Vel ea libero assumenda
                        molestias a. Aliquam, deleniti!...</p>
                    <br>
                    <a href="{{ route('projects-siyakha') }}" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read
                        More ></a>
                </div>
            </div>
        </div>
    </section>
@endsection
