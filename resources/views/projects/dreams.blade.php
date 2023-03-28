@extends('layouts.default')

@section('content')
    <div class="mt-20">


    </div>
    <section class="mt-20">
        {{-- Dreams banner --}}
        <div class="bg-orange-400 w-full py-20 flex justify-center items-center ">
            <h3 class="text-4xl text-cyan-800 font-semibold font-sans px-32 text-center">DREAMS <br>
                <hr class="bg-cyan-800 mt-10">
                <br>
                Determined, Resilient, Empowered, AIDS-Free, Mentored, and Safe
            </h3>
        </div>
    </section>

    {{-- Overview Of Dreams Project --}}
    <section>
        <div class="text-1xl pt-28 bg-white text-cyan-800 px-20">
            <h3 class="text-3xl text-cyan-900 uppercase font-semibold pb-5">Project Overview</h3>
            <div class="py-10 grid grid-cols-3 gap-5 px-10 justify-items-center  rounded  bg-orange-400">
                <div class="w-full text-center">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>

                    </div>
                    <hr class="my-5">
                    <div class="text-center font-semibold text-1xl">
                        <p>PEPFAR <span>|</span> CDC</p>
                    </div>
                </div>
                <div >
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <hr class="my-5">
                    <div>
                        <p class="text-center font-semibold text-1xl">
                            Bubi, Nkayi, Lupane and Tsholotsho
                        </p>

                    </div>
                </div>
                <div>
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z" />
                    </svg>
                    </div>
                    <hr class="my-5">
                    <div>
                        <p class="text-center font-semibold text-1xl">
                            Zimttech | P.Z.A.T | AFRICAID
                        </p>
                    </div>
                </div>
            </div>
            <p class="font-thin font-sans px-10 mt-10">
                The DREAMS program is a United States President’s Emergency Plan for AIDS Relief (PEPFAR) initiative that
                seeks to reduce new HIV infections in high burden ‘hot spots’ across 15 eastern and Southern African
                countries, including Zimbabwe. With funding from the Centre for Disease Control and Prevention (CDC),
                through ITECH, Bantwana Zimbabwe is implementing the ZIMPAAC DREAMS initiative within the Zimbabwe
                Partnership to Accelerate AIDS Control (ZimPAAC) consortium in the four high priority districts in
                Matabeleland North (Bubi, Nkayi, Lupane, and Tsholotsho) reaching over 90 wards and over 18,000 adolescent
                girls and young women (AGYW) aged 10-24 each year.
            </p>
            <p class="text-1xl font-thin font-sans pt-5 px-10  pb-10">
                In Bubi, Nkayi, Lupane and Tsholotsho, many structural drivers, such as poverty, child marriage, and
                cultural norms lead Adolescent Girls Young Women ()AGYW, to early sexual debut, increasing their risk of acquiring HIV. To address these
                challenges, BZ implemented the social protection response to HIV risk within ZimPAAC. The DREAMS initiative
                uses an evidence-based combination of HIV prevention, gender norms change, basic financial literacy and
                condom education with multi-stakeholder engagement to address the structural drivers of HIV infection among
                AGYW.
            </p>
        </div>
    </section>
    {{-- Key Populations --}}
    <section>

        <div class="grid grid-cols-2">
            <div class="col bg-cyan-800 text-white">

            </div>
            <div class="col"></div>
        </div>
    </section>

    {{-- Key Pop & Tech Areas --}}

    <section class="px-20 pb-10">
        <div class="grid grid-cols-3 gap-x-10">
            <div class="col bg-cyan-800 px-10 w-full mx-auto pt-8">
                <h4 class="text-md text-white uppercase font-semibold">
                    Key Populations
                </h4>
                <br>
                <hr class="border-orange-400 mb-5">
                <ul class="list-disc text-white">
                    <li>AGYW aged 10-24</li><br>
                    <li> AGYW caregivers </li><br>
                    <li>Young Women Selling Sex</li><br>
                    <li>GBV Survivors</li><br>
                    <li>Community Leaders</li><br>
                </ul>
            </div>

            <div class="col bg-orange-400 w-full mx-auto p-5 items-center justify-center">
                <img src="{{ URL::to('/assets/img/slider-3.jpg') }}" alt="">
                <br>
                <img src="{{ URL::to('/assets/img/slider-3.jpg') }}" alt="">
                <br><img src="{{ URL::to('/assets/img/slider-3.jpg') }}" alt="">
            </div>

            <div class="col bg-cyan-800 w-full mx-auto px-5 pt-8">
                <h4 class="text-md text-white uppercase font-semibold">
                    Key Technical Areas
                </h4>
                <br>
                <hr class="border-orange-400 mb-5">
                <ul class="list-disc px-3 text-white">
                    <li>HIV Prevention, Condom Education, Gender Norms Change, Social Assets Building and Basic Financial
                        Literacy</li>
                    <li>Sexual Violence Prevention</li>
                    <li>Provision of Education Subsidies</li>
                    <li>Combination of Socioeconomic Approaches for Caregivers layered with Positive Parenting</li>
                    <li>Economic Empowerment of AGYW</li>
                    <li>GBV Prevention and Response activities</li>
                </ul>

            </div>
        </div>
    </section>

    {{-- Key Interventions --}}
    <section class="mt-20">
        <div class="px-20">
            <h2 class="font-sans font-semibold text-4xl text-cyan-800"><span class="text-orange-400 font-semibold">Key
                </span>Interventions</h2>
            <br>
            <hr class="border-orange-400">
            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">HIV Prevention, Gender Norms Change, Basic
                    Financial Literacy, & Condom Education</h3>
                <p class="px-10 text-cyan-800">
                    Support HIV prevention and condom education in schools using the Health for Life (H4L) curriculum for
                    the 10-14-year and 15-19-years age band.
                </p>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">Social Assets Building and Basic Financial
                    Literacy</h3>
                <ul class="list-disc px-10">
                    <li class="text-cyan-800"><span class="text-orange-400 font font-semibold ">In-school :</span> Roll out
                        Social Asset Building,
                        including Condom Promotion and Provision, by supporting after class clubs and strengthening schools’
                        response to GBV and HIV risks.

                    </li>
                    <li class="text-cyan-800"><span class="text-orange-400 font-semibold">Out of School -</span> Deliver
                        primary package in
                        community safe spaces for eligible AGYW working with trained Community Based Facilitators. Layer
                        timely economic strengthening activities to OOS AGYW and structured social asset building activities
                        on enrolled AGYW maintaining them in DREAMS safe spaces for a minimum of 6months.</li>
                </ul>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">Sexual Violence Prevention</h3>
                <p class="text-cyan-800 px-10">
                    Deliver No Means No sessions using school classrooms reaching both in-school and out-of-school
                    Adolescent Girls aged 10-14years.
                </p>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">Provision of Education Subsidies</h3>
                <p class="text-cyan-800 px-10">
                    Pay school subsidies and provide other education support to ensure data informed selection and retention
                    of learners.
                </p>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">Combination of Socioeconomic Approaches for
                    Caregivers layered with Positive Parenting</h3>
                <p class="text-cyan-800 px-10">
                    Deliver Families Matter! Program to strengthen positive parenting skills of caregivers of at-risk AGs
                    (sexually active, history of violence and experience of alcohol abuse) and provide Basic Financial
                    Literacy training and the Internal Savings and Lending (ISAL) approach linking caregivers to markets for
                    household economic resilience.
                </p>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">Economic Empowerment of AGYW</h3>
                <p class="text-cyan-800 px-10">
                    Train all DREAMS AGYW in basic financial literacy as part of the primary package using the
                    Aflatoun/Aflateen+ curriculum. In addition to HIV Prevention, Condom Education, Gender Norms change,
                    Social Assets Building & Sexual Violence Prevention, and non-formal education, out-of-school AGYW aged
                    15-24years will receive enhanced economic strengthening support using:

                <ul class="list-disc text-cyan-800 px-20">
                    <li>Internal Savings and Lending Association (ISAL) schemes, layered at session 3 of the primary
                        package.</li>
                    <li>Tracking of ISAL groups progression to maturity and support.</li>
                    <li>Employability & Entrepreneurship training using the AflaYouth curricular.</li>
                    <li>Basic IGA Skills to include access to income generating activity training with linkages to markets
                        for viable group and individual IGAs in line with localized labor market assessment and start-up
                        support for AGYW to improve their livelihood prospects.</li>
                </ul>
                </p>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">GBV Prevention and Response Activities</h3>
                <p class="text-cyan-800 px-10">
                    Support GBV ‘one-stop’ services at community level, strengthen and make referrals to health centers for
                    clinical services and other line ministries, and strengthen the GBV response mechanism through
                    maintenance of the GBV Toll-Free line.
                </p>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">Community Contextual Interventions | Gender
                    Norms Change (SASA! Together)</h3>
                <p class="text-cyan-800 px-10">
                    Implement gender norms change using the SASA! Together Curriculum targeting community gatekeepers,
                    stakeholders, and opinion leaders as community activists.
                </p>
            </div>

            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">Layering & Referrals</h3>
                <p class="text-cyan-800 px-10">
                    For referrals and layered services, BZ will collaborate with other DREAMS partners in the ZimPAAC
                    Comsortium including:
                </p>
                <ul class="list-disc text-cyan-800 px-20">
                    <li>PZAT – ASRH, PrEP and mobilization of young women selling sex (YWSS)</li>
                    <li>Zim-TTECH – clinical services including GBV clinical services.</li>
                </ul>
                <p class="text-cyan-800 px-10">
                    As well as refer AGYW to additional supports offered by other service providers in the districts.
                </p>
            </div>
        </div>

    </section>
    <section class="flex justify-center items-center bg-cyan-800 py-20 px-20 text-center mt-16">
        <div class="">
            <h3 class="text-3xl text-white font-sans">
                Through Determination, Resilience, Empowerment, and Mentorship, we can help adolescent girls and young women
                in Zimbabwe stay AIDS-free and unlock their full potential.
            </h3>
        </div>
    </section>

    {{-- Project Outcome --}}
    <section class="pt-20 px-20">
        <h3 class="font-sans text-4xl text-cyan-800 font-semibold"><span class="text-orange-400">Project</span> Outcomes
        </h3>
        <br>
        <hr class="border-orange-400">
        <br>
        <ul class="list-disc px-20 text-cyan-800">
            <li>Built the social and protective assets of over 13, 171 unique AGYW who completed DREAMS interventions in
                Matabeleland North.</li>
            <li>Introduced innovative implementation strategies to maintain safe spaces as active community platforms
                (including during COVID-19 surges), partnering with over 112 trained community cadres and 153 Guidance and
                Counselling teachers to support the various DREAMS interventions.</li>
            <li>Increased access to comprehensive gender-based violence (GBV) prevention and response services, from mobile
                response services in remote areas to school- and community-based early warning systems; and</li>
            <li>Layered integrated economic strengthening in both primary and secondary package services as a sustainable
                best practice for AGYW.</li>
        </ul>
    </section>
@endsection
