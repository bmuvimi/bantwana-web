@extends('layouts.default')

@section('content')
    <div class="mt-20">


    </div>
    <section class="mt-20">
        {{-- Dreams banner --}}
        <div class="bg-cyan-800 w-full py-20 flex justify-center items-center ">
            <h3 class="text-4xl text-orange-400 font-semibold font-sans px-32 text-center">ZINGANE - O.V.C <br>
                <hr class="border-orange-400 mt-10">
                <br>
                Opharns and Vulnerable Children
            </h3>
        </div>
    </section>

    {{-- Overview Of Dreams Project --}}
    <section>
        <div class="text-1xl pt-28 bg-white text-cyan-800 px-20">
            <h3 class="text-3xl text-cyan-900 uppercase font-semibold pb-5 ">Project Overview</h3>
            <div class="py-10 mt-10 grid grid-cols-3 gap-5 px-10 justify-items-center  rounded  bg-orange-400">
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
                        <p>PEPFAR <span>|</span> USAID</p>
                    </div>
                </div>
                <div>
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
                            Insiza | Bulawayo | Kwekwe
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
                            Insiza Godlwayo AIDS Coucil | Jointed Hands World Organization
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-1xl font-sans px-10 mt-16">
                Bantwana Zimbabwe (BZ) is implementing the Zingane – OVC project which aims at Sustaining Prevention, Care and Support Services for OVC in Zimbabwe (SPCSS-OVC) in Bulawayo, Matabeleland North, Matabeleland South, and Midlands. Together with two consortium partners Insiza Godlwayo AIDS Council (IGAC) and Jointed Hands Welfare Organization (JHWO), BZ is implementing a holistic conceptual approach and a robust implementation framework that directly supports the SPCSS-OVC project’s goal of improving “health, safety, education, and stability outcomes for orphans and vulnerable children, adolescents, and youth affected by HIV.” The specific objectives of the project are to:
            </p>
            <ol class="text-1xl  font-sans pt-5 px-20 list-disc pb-10">
                <li>Improve access to HIV care and treatment services for children, adolescents, and youth.</li>
                <li>Strengthen child and family safety skills through improved access to HIV and GBV prevention, GBV response and child protection services.</li>
                <li>Improve economic stability and educational attainment for vulnerable children and their families;</li>
                <li>Strengthen local systems for planning, coordinating, monitoring, and assuring the quality of services for vulnerable children and their families.</li>
            </ol>
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
                    <li>HIV+ children and adolescents (CALHIV)</li><br>
                    <li>Children of HIV+ caregivers</li><br>
                    <li>HIV+ women and their babies (HEI)</li><br>
                    <li>HIV+ caregivers with low viral load suppression</li><br>
                    <li>Children of key populations</li><br>
                    <li>Child survivors of sexual violence</li>
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
                    <li>Health</li><br>
                    <li>Safety</li><br>
                    <li>Education</li><br>
                    <li>Stability</li><br>
                    <li>Case Management</li><br>
                    <li>Economic Srengthening</li>
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
            <p class="font-sans text-cyan-800 mt-16">
                Bantwana Zimbabwe and its partners are implementing the following evidence-based interventions under the Zingane – OVC project:
            </p>
            <br>
            <ul class="list-disc px-20">
                <li>
                   <span class="text-orange-400">For children and adolescents living with HIV:</span> Adherence support, treatment literacy, support groups, disclosure support, Sinovuyo, and Household Economic Resilience & Savings (HER$).
                </li>
                <br>
                <li>
                    <span class="text-orange-400">For HIV exposed infants:</span> Early Infant Diagnosis (EID), Early Childhood Stimulation (ECS)/integrated mother baby course (IMBC), growth monitoring, tracking developmental milestones, Sinovuyo, and HER$.
                 </li>
                 <br >
                <li>
                    <span class="text-orange-400">For survivors of sexual violence: </span> Cognitive behaviour therapy, psycho-social support, support groups, Sinovuyo, HER$, and financial literacy.For survivors of sexual violence: cognitive behaviour therapy, psycho-social support, support groups, Sinovuyo, HER$, and financial literacy.
                 </li>
                 <br>
                <li>
                    <span class="text-orange-400">For adolescent mothers: </span> Cognitive Behavioural Therapy (CBT), psycho-social support, ECS/IMBC, growth monitoring, tracking developmental milestones, part time continued education, Sinovuyo, and HER$.
                 </li>
                 <br>
                <li>
                    <span class="text-orange-400">Additional health services or linkages: </span>HIV-related testing, TB services, STI treatment, routine and emergency health care, supplementary or therapeutic foods based on malnutrition status, immunization, women’s health counseling and products, and substance abuse support.
                 </li>
            </ul>
        </div>

    </section>
    <section class="flex justify-center items-center bg-cyan-800 py-20 px-20 text-center mt-16">
        <div class="">
            <blockquote class="text-3xl italic text-white font-sans">
                Through Determination, Resilience, Empowerment, and Mentorship, we can help adolescent girls and young women
                in Zimbabwe stay AIDS-free and unlock their full potential.
            </blockquote>
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
