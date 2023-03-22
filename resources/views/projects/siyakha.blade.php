@extends('layouts.default')

@section('content')
    <div class="mt-20">

    </div>
    <section class="mt-20">
        {{-- Dreams banner --}}
        <div class="bg-orange-400 w-full py-20 flex justify-center items-center ">
            <h3 class="text-4xl text-cyan-800 font-semibold font-sans px-32 text-center uppercase">Siyakha <br>
                <hr class="bg-cyan-800 mt-10">
                <br>
                <p class="text-2xl">Transforming lives of young adults with opportunities and skills</p>
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
                            FACT | P.Z.A.T | AFRICAID
                        </p>
                    </div>
                </div>
            </div>
            <p class="font-sans px-10 mt-10">
                When adolescent girls and young women drop out of the formal education system and lack workforce skills and
                early professional experience, their livelihood prospects are minimal. These economic constraints heighten
                vulnerability to a range of risks including sexual and gender-based violence, early marriage and pregnancy,
                and HIV/AIDS. Global evidence suggests that AGYW who develop financial goals and assets are more likely to
                make informed decisions about their health and wellbeing, reducing their vulnerability to these risks.
            </p>
            <p class="text-1xl font-sans pt-5 px-10  pb-10">

                In response to these and other challenges facing young people, the Bantwana Initiative of World Education,
                Inc. (WEI/B) developed a comprehensive economic strengthening model, named ‘Siyakha’ (Ndebele word for
                build). Layered with health and social protection services, Bantwana’s Siyakha Girls model is a
                market-responsive intervention that develops the economic resilience of vulnerable AGYW aged 15-24 enabling
                them to successfully participate in locally identified growth sectors and niches for sustainable employment
                or entrepreneurship opportunities. The model was designed to address two key challenges:
            </p>
            <ol class="px-20 list-disc">
                <li>Retaining participants in longer-term interventions that compete with family demands and risky lucrative
                    opportunities; </li>
                <li>Preparing and linking AGYW to viable opportunities within their locality.</li>
            </ol>
            <p class="text-1xl font-sans pt-5 px-10  pb-10">
                Bantwana Zimbabwe is currently implementing the Siyakha Girls model under the DREAMS project. OTHERS and
                providing technical assistance for Siyakha programming in Zimbabwe as well as Malawi,Zambia and OTHER
                COUNTRIES.
            </p>
        </div>
    </section>



    {{-- Key Pop & Tech Areas --}}

    <section class="px-20 pb-10 mt-20">
        <div class="grid grid-cols-3 gap-x-10">
            <div class="col bg-cyan-800 px-10 w-full mx-auto pt-8">
                <h4 class="text-md text-white uppercase font-semibold">
                    Key Populations
                </h4>
                <br>
                <hr class="border-orange-400 mb-5">
                <ul class="list-disc text-white">
                    <li>AAGYW who have reached the legal age of employment (18-24 years old age band).</li><br>
                </ul>
            </div>

            <div class="col bg-orange-400 w-full mx-auto p-5 items-center justify-center">
                <img src="{{ URL::to('/assets/img/slider-3.jpg') }}" alt="">
                <br>
            </div>

            <div class="col bg-cyan-800 w-full mx-auto px-5 pt-8">
                <h4 class="text-md text-white uppercase font-semibold">
                    Key Technical Areas
                </h4>
                <br>
                <hr class="border-orange-400 mb-5">
                <ul class="list-disc px-3 text-white">
                    <li>Economic empowerment for AGYW</li>
                    <li>Economic and systems strengthening</li>
                    <li>Health/HIV prevention</li>
                    <li>GBV prevention</li>
                    <br>
                </ul>

            </div>
        </div>
    </section>

    {{-- Key Interventions --}}
    <section class="mt-20">
        <div class="px-20">
            <h2 class="font-sans font-semibold text-4xl text-cyan-800"><span class="text-orange-400 font-semibold">Overview
                </span>Of The Siyakha Model</h2>
            <br>
            <hr class="border-orange-400">
            <div class="intervention">
                <h3 class="font-sans font-semibold text-xl text-cyan-800 pt-5">HIV Prevention, Gender Norms Change, Basic
                    Financial Literacy, & Condom Education</h3>
                <p class="px-10 text-cyan-800">
                    The Siyakha Girls model is distinguished by its robust 8-step approach that prepares highly vulnerable
                    youth to earn sustainable livelihoods in niche areas as identified by a labor market assessment. The
                    Bantwana study team identified the benefits of each step in the model as well as the incremental
                    layering of each of the steps through graduation; and generated practical understanding of the enabling
                    factors critical to AGYW progression towards economic resilience through entrepreneurship or employment
                    pathways.
            </div>



            <div class="w-full items-center px-20">
                <img src="{{ URL::to('/assets/img/siyakha-model.png') }}" alt="" class="w-full">
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
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque odio natus excepturi, ut esse voluptate repellendus voluptatum qui.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut recusandae laudantium, vitae obcaecati minima excepturi id dolorem? Unde laudantium dolore, dicta aliquid explicabo nobis dolor fugit numquam?</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ab maxime consectetur quam exercitationem enim dicta tenetur accusamus pariatur vitae eos facere, dolore veritatis.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quaerat saepe eum aspernatur aut doloribus obcaecati ullam, velit consequuntur facere dolor consequatur, consectetur voluptas culpa beatae neque dolorum! Neque./li>
        </ul>
    </section>
@endsection
