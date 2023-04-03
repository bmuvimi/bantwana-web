@extends('layouts.default')


@section('content')
    <section class="mt-20 bg-gradient-to-r from-orange-400 to-cyan-800  h-screen bg-fixed grid place-items-center">
        <div class="h-14 mb-5 flex flex-col justify-center items-center">
            <div class="py-10 sm:w-8/12">

                <div class="text-center text-5xl text-white">Our Partners</div>
                <h3 class="mb-4 font-bold text-xl text-white text-center">The only way to protect children is by
                    collaborating with other parties.</h3>
                <p class="mt-1 text-center text-lg text-white">Bantwana Zimbabwe works through partnerships – with
                    communities, clinics, governments, local CBOs, faith-based partners, affinity/advocacy networks,
                    research and academic institutions, the private sector, local and international NGOs. We are committed
                    to delivering results through progressive partnerships.</p>
            </div>
            <div class=" text-center text-white">
                <div class="container p-1">
                    <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-9">
                        <div class="lg:mb-0">
                            <img src="assets/img/partner-1.png" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/partner-2.jpg" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/partner-3.png" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/whh.jpg" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/partner-4.jpg" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/unicef.png" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/partner-5.jpg" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/partner-6.png" class="w-full rounded-md shadow-lg" />
                        </div>
                        <div class="lg:mb-0">
                            <img src="assets/img/fmh.png" class="w-full rounded-md shadow-lg" />
                        </div>
                    </div>
                </div>
            </div>
            <a class="mt-14 px-10 py-1 bg-gradient-to-r from-orange-400 to-orange-700 text-white text-l font-semibold rounded-md"
                href="https://docs.google.com/forms/d/1G1IUnyFqi2MRNPOQxiVUVbHFO_i-h7ZtyKxnUjjwm_o/edit"
                target="_blank">Partner With Us</a>
        </div>
    </section>
    <section class="mt-20 px-20 py-20 h-80">
        <div class="h-14 mt-20 flex flex-col justify-center items-center">
            <div class=" p-2 sm:w-10/12">
                <div
                    class="mb-8 text-center text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r to-cyan-800 from-orange-400">
                    Our Partnerships</div>
                <p class="mb-4 mt-1 text-md font-sans text-cyan text-cyan-800">Bantwana Zimbabwe's partnerships are driven
                    by core values of
                    programmatic excellence, innovation and collaboration. We specialize in strengthening the capacity of
                    partners to develop systems and competence to deliver results-based programming, providing technical
                    leadership across various sub-sectors. We have a reputation of high competence in working with diverse
                    partners in the following areas:
                <ul class="list-disc px-20 text-cyan-800">
                    <li>Comprehensive programing for vulnerable children and adolescents</li>
                    <li>Improving HIV outcomes from birth through adolescence</li>
                    <li>Preventing and responding to violence against children (VAC) including child sexual abuse (CSA)</li>
                    <li>Systems strengthening of social welfare systems and workforces, including case management</li>
                    <li>Educating and empowering adolescent girls and young women (AGYW)</li>
                    <li>Preventing and responding to gender-based violence (GBV)</li>
                    <li>Bolstering household economic resilience</li>
                    <li>Applying low and high tech digital platforms and tools for child and social protection</li>
                </ul>

                </p>

            </div>
        </div>
        </div>
    </section>
    <section class="mt-20 px-20  ">
        <div class="bg-white-600">
            <div class=" py-10 px-4  text-gray-800 ">
                <div class="p-5 ">
                    <h3
                        class="font-bold text-4xl  text-transparent bg-clip-text bg-gradient-to-r to-cyan-800 from-orange-400 mb-4">
                        National Level Impact</h3>
                    <hr><br>
                    <p class="text-gray-800 text-md mb-5">Bantwana Zimbabwe is working at a national level; helping to save
                        lives, end poverty, and advance social justice.
                        <br><br>Bantwana Zimbabwe also cultivates partnerships with the country’s private sector and
                        philanthropists. Our engagements have courted partners such as Toyota Zimbabwe and First Mutual
                        Foundation, to facilitate children’s access to education and promote innovation. These partnerships
                        have enabled BZ to be creative in responding to emerging issues including emergency response. As was
                        demostrated at the height of the COVID 19 outbreak, BZ introduced the EWS4VAC alongside an
                        alternative learning platform (ALP) for children confined to home and without access to digital
                        learning materials under COVID-19. With support from the Ministry of Education, this program has
                        been picked up by schools operating on hybrid schedules.
                    </p>
                </div>
                <div class="p-5">
                    <h3
                        class=" font-bold text-transparent bg-clip-text text-4xl bg-gradient-to-r to-cyan-800 from-orange-400 mb-2">
                        Our Donors</h3>
                    <hr>
                    <br>
                    <div class="flex">
                        <img src="{{ URL::to('/assets/img/partner-1.png') }}" alt="">
                        <div class="grid place-items-center">
                            <div class="px-5">
                                <div class="font-bold text-sm">United States Agency for International Development (USAID)
                                </div>
                                <p class="text-gray-700 text-md ">
                                    USAID’s orphans and vulnerable children (OVC) programs, through the U.S. President’s
                                    Emergency Plan for AIDS Relief (PEPFAR), serve children in a range of adverse
                                    situations,
                                    including children who are living with HIV, living with caregivers who are living with
                                    HIV,
                                    orphaned, at risk of becoming infected, or a combination of these factors.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <img src="{{ URL::to('/assets/img/unicef.png') }}" alt="">
                        <div class="grid place-items-center">
                            <div class="">
                                <div class="font-bold text-sm">United Nations Children's Fund (UNICEF) </div>
                                <p class="text-gray-700 text-sm">
                                    UNICEF works in some of the world’s toughest environments, to protect children’s rights
                                    and
                                    safeguard their futures. UNICEF is present in over 190 countries and territories,
                                    reaching
                                    more children and young people than any other international organization.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <img src="{{ URL::to('/assets/img/partner-2.jpg') }}" alt="">
                        <div class="grid place-items-center">
                            <div class="">
                                <div class="font-bold text-sm">U.S. President's Emergency Plan for AIDS Relief (PEPFAR)
                                </div>
                                <p class="text-gray-700 text-sm">
                                    The PEPFAR portfolio covers the entire spectrum of HIV prevention, care and treatment
                                    services and has contributed to a reduction in HIV incidence among 15-49 year olds
                                    (0.48% in
                                    2017 from an estimated 0.85% in 2009).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="mt-20 px-20 py-20 h-full">
        <div class="container my-24 px-6 mx-auto">

            <!-- Section: Design Block -->
            <section class="">
              <div class="grid grid-cols-2">
                <div class="bg-cyan-800 text-orange-400">
                    <br>
                    <br>
                    <hr>
                    <p class="p-10">
                        Bantwana Zimbabwe partners with local and international NGOs, community organizations,
                        government ministries and departments, US and multilateral funding agencies, and the private
                        sector. BZ demonstrates its capacity for project and financial management through an annual
                        $5 million+ portfolio of programs and regional technical assistance contracts funded by
                        PEPFAR/CDC, USAID, bilateral development cooperation agencies, the World Bank, and
                        UNICEF.<br><br>
                        From top management to field staff, the BZ team is hands-on. We continuously engage with
                        community and government partners to build capacity to deliver quality services, and
                        actively seek client input and feedback to ensure responsive and inclusive programming.
                    </p>
                </div>
         
                <div
                    class="bg-orange-400 pb-10">
                    <br>
                    <br>
                    <hr>
                    <div class="text-cyan-800">
                        
                        <p class="p-10 ">
                            As a local NGO, governed and managed by Zimbabwean nationals, Bantwana Zimbabwe (BZ)
                            leads and partners with local, regional and international organizations to implement
                            donor-funded programs to advance health, education, economic, and social protection
                            outcomes for vulnerable children, adolescents, and their caregivers. These initiatives
                            strengthen government systems and build the capacity of NGOs or community-based partners
                            in holistic child protection approaches that go beyond safeguarding and prevention with
                            interventions that are HIV- and gender-sensitive.
                        </p>

                        <div class="px-10 flex flex-col md:flex-row md:justify-around xl:justify-start  mx-auto">
                            <p class="flex items-center mb-4 md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 mr-2">
                                    <path fill="currentColor"
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg>
                                Best team
                            </p>

                            <p class="flex items-center  md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 mr-2">
                                    <path fill="currentColor"
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg>
                                Best quality
                            </p>

                            <p class="flex items-center mb-2 lg:mb-0 mx-auto md:mx-0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    class="w-6 h-6 mr-2">
                                    <path fill="currentColor"
                                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                    </path>
                                </svg>
                                Best experience
                            </p>
                        </div>

                        <p class="p-10">
                            The core of BZ’s work is ensuring that case management systems and providers are able to
                            address the specific needs of key populations, including children at risk of or living
                            with HIV, children living with disabilities, children of sex workers, children on the
                            move, and child survivors of violence, including sexual and gender-based violence
                            (SGBV).
                        </p>
                    </div>
                </div>
            </div>
            </section>
    </section>
    <hr class="border border-x-orange-400">
    <section class="px-20">
        <!-- Container for demo purpose -->
        <div class="container my-24 px-6 mx-auto">

            <!-- Section: Design Block -->
            <section class="mb-32 text-gray-600">
                <div class="flex flex-wrap">
                    <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                        <h2
                            class="text-3xl text-transparent bg-clip-text bg-gradient-to-r to-cyan-800 from-orange-400 font-bold mb-6">
                            Invest in a brighter and bolder future</h2>
                        <p class="text-gray-600 mb-6">
                            Together, we can support local communities to create a brighter, more prosperous future for
                            vulnerable children!
                        </p>
                        <p class="text-gray-600 mb-2">15 Thurton Lane, Belgravia, Harare</p>
                        <p class="text-gray-600 mb-2">+263 224 794 641</p>
                        <p class="text-gray-600 mb-2">info@bantwana.org</p>
                    </div>
                    <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                        <form>
                            <div class="form-group mb-6">
                                <input type="text"
                                    class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput7" placeholder="Name">
                            </div>
                            <div class="form-group mb-6">
                                <input type="email"
                                    class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleInput8" placeholder="Email address">
                            </div>
                            <div class="form-group mb-6">
                                <textarea
                                    class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
                                    id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group form-check text-center mb-6">
                                <input type="checkbox"
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                    id="exampleCheck87" checked>
                                <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a
                                    copy of this
                                    message</label>
                            </div>
                            <button type="submit"
                                class="
              w-full
              px-6
              py-2.5
              bg-gradient-to-r from-orange-400 to-orange-700
              text-white
              font-medium
              text-xs
              leading-tight
              uppercase
              rounded
              shadow-md
              hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg
              transition
              duration-150
              ease-in-out">Send</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->

        </div>
        <!-- Container for demo purpose -->
    </section>
@endsection
