

<?php $__env->startSection('content'); ?>
    <section class="mt-16">
        
<div id="default-carousel" class="relative" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src="<?php echo e(URL::to('/assets/img/slider-1.jpg')); ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo e(URL::to('/assets/img/slider-2.jpg')); ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo e(URL::to('/assets/img/slider-3.jpg')); ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

    </section>
    <section class="text-center bg-orange-400 py-20 font-sans font-bold">

        <h1 class="text-6xl text-cyan-800">
            BANTWANA ZIMBABWE
        </h1>
        <br>
        <h4 class="text-white font-thin text-2xl">Improving the wellbeing of vulnerable children, adolescents, youth, and their caregivers and families</h4>
            
    </section>
    

    <section class="bg-white pt-20 pb-15 px-5 font-sans">
        <div class="max-w-screen-md mx-auto text-center">
            <div class="pb-5">
                <h3 class="text-6xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r to-cyan-800 from-orange-400">Get To Know Us</h3>
                <h2 class="text-2xl font-semibold text-orange-400">
                    Social protection is the goal.
                </h2>
            </div>
            <p class="text-gray-900 ">
                As a local NGO, governed and managed by Zimbabwean nationals, Bantwana Zimbabwe (BZ) leads and partners with
                local, regional and international organizations to implement donor-funded programs to advance health,
                education, economic, and social protection outcomes for vulnerable children, adolescents, and their
                caregivers. These initiatives strengthen government systems and build the capacity of NGOs or
                community-based partners in holistic child protection approaches that go beyond safeguarding and prevention
                with interventions that are HIV- and gender-sensitive.

            </p>
            <div class="max-w-4xl p-4 rounded-lg shadow bg-orange-400 my-10">
                <div class="mb-2">
                    <div class="h-3 text-5xl text-left text-gray-600">“</div>
                    <p class="px-4 text-md font-thin text-center text-white">
                        From top management to field staff, the BZ team is hands-on. We continuously engage with community
                        and government partners to build capacity to deliver quality services, and actively seek client
                        input and feedback to ensure responsive and inclusive programming.
                    </p>
                    <div class="h-3 text-5xl text-right text-gray-600">”</div>
                </div>
            </div>
        </div>
    </section>



    <section class="projects-section grid-cols-2 px-10 mx-auto pt-0">
        <h1 class="text-6xl text-cyan-800 font-semibold pt-10 pb-10 text-center"><span
                class="text-orange-400 font-thin">Featured</span> Projects</h1>
        <br>
        <hr class="border-orange-500 font-bold">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-10 mt-20 px-10">

            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="<?php echo e(URL::to('/assets/img/project2.jpg')); ?>" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2">DREAMS - CDC</h1>
                    <hr>

                    <p class="text-sm pt-5">DREAMS is a partnership committed to helping girls develop into Determined, Resilient, Empowered, AIDS-Free, Mentored, and Safe women. It funds evidence-informed approaches that address structural drivers that increase girls’ HIV risk such as poverty and gender inequality.</p>
                    <br>
                    <a href="<?php echo e(route('projects-dreams')); ?>" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read More ></a>
                </div>
            </div>

            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="<?php echo e(URL::to('/assets/img/project2.jpg')); ?>" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2">ZINGANE - OVC PROJECT</h1>
                    <hr>

                    <p class="text-sm pt-5">Bantwana Zimbabwe (BZ) is implementing the Zingane – OVC project which aims at Sustaining Prevention, Care and Support Services for OVC in Zimbabwe (SPCSS-OVC) in Bulawayo, Matabeleland North, Matabeleland South, and Midlands.</p>
                    <br>
                    <a href="<?php echo e(route('projects-ovc')); ?>" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read More ></a>
                </div>
            </div>
            <!-- Project card -->
            <div class="flex flex-col bg-white drop-shadow  rounded-sm">
                <img src="<?php echo e(URL::to('/assets/img/project2.jpg')); ?>" class="hover:drop-shadow-lg hover:opacity-70"
                    alt="Fiction Product" class="h-36 object-cover rounded-tl-sm rounded-tr-sm">

                <div class="px-3 py-2">
                    <h1 class="font-semibold text-cyan-900 py-2">CHILD PROTECTION - UNICEF</h1>
                    <hr>

                    <p class="text-sm pt-5">The Child Protection programme is a UNICEF-funded project designed to strengthen the capacity of Zimbabwe’s child protection system to provide a coordinated response to violence against children and bolster local government and community responses to COVID-19.</p>
                    <br>
                    <a href="<?php echo e(route('projects-cp')); ?>" class="text-cyan-700 hover:font-bold hover:text-cyan-900">Read More ></a>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section class="px-20 h-50vh mt-20 py-10">
        <div class="grid grid-cols-3 ">
            <div class="col-span-2 bg-gray-100  px-10 flex justify-center items-center">
                <div class=" ">
                    <h1 class="font-semibold text-4xl text-cyan-800"><span class="text-orange-400">Voices </span>From The Field</h1>
                <p class="pt-8 text-cyan-800 font-sans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi,
                    nam, veritatis iste quos laborum ad nobis accusantium obcaecati explicabo tenetur ut reprehenderit minus
                    ducimus assumenda quas atque omnis itaque cupiditate reiciendis numquam animi? Minus, necessitatibus
                    magnam ad adipisci nulla unde. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente libero
                    voluptatem molestias explicabo, exercitationem delectus repellendus magnam dolor, nobis sint est, nemo
                    repellat atque.</p>
                </div>
            </div>
            <div class="col bg-orange-400 py-30">
                <img src="<?php echo e(URL::to('/assets/img/voices.jpg')); ?>" alt="" style"height:70vhl">
            </div>
        </div>
    </section>

    <section class="impact-section mt-16 " style="background:<?php echo e(asset('assets/img/slider-3.jpg')); ?>">
        <div class="overlay-div">
            <div class="py-20 grid grid-1 md:grid-cols-3  lg:grid-cols-3 gap-6 px-20">
                <div class="text-center text-gray-200">
                    <h1 class="font-semibold text-white text-6xl md:text-3xl">35+</h1>
                    <hr class="border border-white my-4">
                    <p class="font-thin text-4xl md:text-3xl">Active Districts</p>
                </div>
                <div class="text-center text-gray-200">
                    <h1 class="font-semibold  text-6xl md:text-3xl">5+</h1>
                    <hr class="border border-white my-4">
                    <p class="font-thin text-4xl md:text-3xl">Active Projects</p>
                </div>
                <div class="text-center text-gray-200">
                    <h1 class="font-semibold text-gray-200 text-6xl md:text-3xl">1239902+</h1>
                    <hr class="border border-white my-4">
                    <p class="font-thin text-4xl md:text-3xl">Impacted Lives</p>
                </div>
            </div>
        </div>

    </section>

    

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\L\Documents\Projects\Laravel Projects\bz-web-final-laravel-project\resources\views/index.blade.php ENDPATH**/ ?>