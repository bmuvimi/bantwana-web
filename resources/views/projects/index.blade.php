@extends('layouts.default')

@section('content')
    <section class="mt-20 ">
        <div class="h-3/4">
            <section
            class="p-6 text-center shadow-lg md:p-12 md:text-left"
            style="background-image: url('assets/img/projects.jpeg')">
            <div class="flex justify-center">
              <div class="max-w-3xl">
                <div
                  class="m-4 block rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-800 dark:shadow-black/20">
                  <div class="md:flex md:flex-row">
                    <div
                      class="mx-auto mb-6 flex w-36 items-center justify-center md:mx-0 md:w-96 lg:mb-0">
                      <img
                        src="{{ URL::to('/assets/img/BZ-HALF-LOGO.PNG') }}"
                        class="rounded-full shadow-md dark:shadow-black/30"
                        alt="woman avatar" />
                    </div>
                    <div class="md:ml-6">
                        <h3 class="font-bold text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r to-cyan-800 from-orange-400 mb-4">OUR PROJECTS</h3>
                     <p
                        class="mb-0 font-semibold text-neutral-500 dark:text-neutral-400">
                        All children deserve better.
                      </p>
                      <p
                        class="mb-6 font-light text-neutral-500 dark:text-neutral-300">
                        We champion the rights of ALL children, putting the most vulnerable children first.<br>
                      </p>
                      <p
                        class="mb-6 font-light text-neutral-500 dark:text-neutral-300">
                        We stand ready to respond to emergencies, deliver innovative development programmes, and ensure children's voices are heard.  
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>


    </section>
    {{-- Project Tiles --}}
    <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 mt-10 px-10">
            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="{{ URL::to('/assets/img/project2.jpg') }}" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-dreams') }}">DREAMS - CDC</a>
                    </h1>
                    <hr>

                    <p class="text-sm pt-5">DREAMS is a partnership committed to helping girls develop into Determined, Resilient, Empowered, AIDS-Free, Mentored, and Safe women. It funds evidence-informed approaches that address structural drivers that increase girls’ HIV risk such as poverty and gender inequality.</p>
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
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-ovc') }}">ZINGANE - OVC PROJECT</a></h1>
                    <hr>

                    <p class="text-sm pt-5">Bantwana Zimbabwe (BZ) is implementing the Zingane – OVC project which aims at Sustaining Prevention, Care and Support Services for OVC in Zimbabwe (SPCSS-OVC) in Bulawayo, Matabeleland North, Matabeleland South, and Midlands.</p>
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
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-cp') }}">CHILD PROTECTION - UNICEF</a>
                    </h1>
                    <hr>

                    <!--p class="text-sm pt-5">Regardless of who they are or where they are from, our child protection experts work to keep children safe.
                    </p-->
                    <p class="text-sm pt-5">
                      The Child Protection programme is a UNICEF-funded project designed to strengthen the capacity of Zimbabwe’s child protection system to provide a coordinated response to violence against children and bolster local government and community responses to COVID-19.</p>
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
                    <h1 class="font-semibold text-cyan-900 py-2"><a href="{{ route('projects-siyakha') }}">SIYAKHA - TA</a>
                    </h1>
                    <hr>

                    <p class="text-sm pt-5">BZ is providing technical assistance (TA) to DREAMS partners regionally in the full implementation of enhanced economic strengthening (ES), utilising its PEPFAR approved Siyakha model. BZ’s Regional TA portfolio includes projects implemented in South Africa, Namibia, Mozambique, Malawi , Zambia and Zimbabwe.</p>
                    <br>
                    <a href="{{ route('projects-siyakha') }}" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read
                        More ></a>
                </div>
            </div>
        </div>
    </section>
    <!-- === TESTIMONIALS === --->
    <section class="mt-20 ">
        <div class="h-screen">
            <section class="text-neutral-700 dark:text-neutral-300">
                <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
                  <h3 class="mb-6 text-3xl text-transparent bg-clip-text bg-gradient-to-r to-cyan-800 from-orange-500 font-bold">Testimonials</h3>
                  <p class="mb-6 pb-2 md:mb-12 md:pb-0">
                    What people are saying about Bantwana Zimbabwe keeps us going.
                  </p>
                </div>
              
                <div class="grid gap-6 text-center md:grid-cols-3">
                  <div>
                    <div
                      class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                      <div class="h-28 overflow-hidden rounded-t-lg bg-gradient-to-r to-cyan-700 from-orange-400"></div>
                      <div
                        class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                        <img
                          src="{{ URL::to('/assets/img/voices.jpg') }}" />
                      </div>
                      <div class="p-6">
                        <h4 class="mb-4 text-2xl font-semibold">Tsitsi Ndlovu</h4>
                        <hr />
                        <p class="mt-4">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="inline-block h-7 w-7 pr-2"
                            viewBox="0 0 24 24">
                            <path
                              d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                          </svg>
                          Lorem ipsum dolor sit amet eos adipisci, consectetur
                          adipisicing elit.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div
                      class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                      <div class="h-28 overflow-hidden rounded-t-lg bg-gradient-to-r to-cyan-800 from-cyan-700"></div>
                      <div
                        class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                        <img
                          src="{{ URL::to('/assets/img/bongani.jpeg') }}" />
                      </div>
                      <div class="p-6">
                        <h4 class="mb-4 text-2xl font-semibold">Bongani Muvimi</h4>
                        <hr />
                        <p class="mt-4">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="inline-block h-7 w-7 pr-2"
                            viewBox="0 0 24 24">
                            <path
                              d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                          </svg>
                          Neque cupiditate assumenda in maiores repudi mollitia
                          architecto.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div
                      class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                      <div class="h-28 overflow-hidden rounded-t-lg bg-gradient-to-r to-orange-400 from-cyan-800"></div>
                      <div
                        class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                        <img
                          src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
                      </div>
                      <div class="p-6">
                        <h4 class="mb-4 text-2xl font-semibold">John Smith</h4>
                        <hr />
                        <p class="mt-4">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="inline-block h-7 w-7 pr-2"
                            viewBox="0 0 24 24">
                            <path
                              d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                          </svg>
                          Delectus impedit saepe officiis ab aliquam repellat rem unde
                          ducimus.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
    </section>
    {{-- Subscribe To Our Monthly News Letter --}}

    <section class="bg-orange-400 text-cyan-900 px-20">
      <h1 class="font-sans text-center font-semibold text-6xl pb-16 pt-28">Subscribe<span
              class="font-thin font-cyan-500">
              To Our Monthly Newsletter</span></h1>
      <hr class="border border-cayn-500">
      <br>
      <form action="submit" class="py-10
      ">
          <div class="p10">

              <div class="text-center">
                  <label for="Email Address" class="font-thin font-sans  text-3xl">Email Address</label>
                  <br>
                  <input type="email" class="w-3/5 rounded-sm h-10 my-5" Placeholder="Please Enter Your Email Here">
              </div>
          </div>
          <div class="text-center mt-5">
              <button type="submit"
                  class="bg-cyan-900 text-white py-2 font-semibold px-5 rounded-sm shadow hover:text-gray-300">Subscribe</button>
          </div>

      </form>
  </section>
@endsection
