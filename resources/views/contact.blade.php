@extends('layouts.default')


@section('content')
<section>
    <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">
  
      <div class="relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%; background-image: url('assets/img/contact.jpeg'); height: 300px;">
      </div>
      <div class="container text-gray-800 px-4 md:px-12">
        <div class="block rounded-lg shadow-lg py-10 md:py-12 px-2 md:px-6"
          style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
          <div class="flex flex-wrap">
            <div class="grow-0 shrink-0 basis-auto w-full xl:w-5/12 px-3 lg:px-6 mb-12 xl:mb-0">
              <form>
                <div class="form-group mb-6">
                  <input type="text" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-cyan-800
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-cyan-800 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                    placeholder="Name">
                </div>
                <div class="form-group mb-6">
                  <input type="email" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-cyan-800
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-cyan-800 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                    placeholder="Email address">
                </div>
                <div class="form-group mb-6">
                  <textarea class="
                  form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-cyan-800
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-cyan-800 focus:bg-white focus:border-blue-600 focus:outline-none
                " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
                </div>
                <!--div class="form-group form-check text-center mb-6">
                  <input type="checkbox"
                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                    id="exampleCheck87" checked>
                  <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this
                    message</label>
                </div-->
                <button type="submit" class="
                w-full
                px-6
                py-2.5
                bg-orange-400
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-cyan-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Send</button>
              </form>
            </div>
            <div class="grow-0 shrink-0 basis-auto w-full xl:w-7/12">
              <div class="flex flex-wrap">
                <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex items-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-orange-400 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" class="w-5 text-white"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Head Office - Harare</p>
                      <p class="text-cyan-800">info@bantwana.co.zw</p>
                      <p class="text-cyan-800"> 263 8677 009776</p>
                    </div>
                  </div>
                </div>
                <!--div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex items-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign"
                          class="w-3 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                          <path fill="currentColor"
                            d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Sub Office - Harare</p>
                      <p class="text-cyan-800">bzinfo@bantwana.org</p>
                      <p class="text-cyan-800">+ 263 292280031</p>
                    </div>
                  </div>
                </div-->
                <div class="mb-12 md:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex align-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-orange-400 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                          class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Regional Office - Bulawayo</p>
                      <p class="text-cyan-800">info@bantwana.co.zw</p>
                      <p class="text-cyan-800"> 263 8677 009776</p>
                    </div>
                  </div>
                </div>
                <div class="grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex align-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-orange-400 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Regional office - Kwekwe</p>
                      <p class="text-cyan-800">info@bantwana.co.zw</p>
                      <p class="text-cyan-800"> 263 8677 009776</p>
                    </div>
                  </div>
                </div>
                <div class="grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex align-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-orange-400 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">District office - Lupane</p>
                      <p class="text-cyan-800">info@bantwana.co.zw</p>
                      <p class="text-cyan-800"> 263 8677 009776</p>
                    </div>
                  </div>
                </div>
                <div class="mb-12 md:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex align-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-orange-400 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                          class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">District Office - Nkayi</p>
                      <!--p class="text-cyan-800">34 Imbalala Way, Selbourne Park, Bulawayo</p-->
                      <p class="text-cyan-800">info@bantwana.co.zw</p>
                      <p class="text-cyan-800"> 263 8677 009776</p>
                    </div>
                  </div>
                </div>
                <div class="grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex align-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-orange-400 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">District office - Tsholotsho</p>
                      <p class="text-cyan-800">info@bantwana.co.zw</p>
                      <p class="text-cyan-800"> 263 8677 009776</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->
</section>
<div class="container my-24 px-6 mx-auto">

  <!-- Section: PRIVATE POLICY -->
  {{-- <section class="mb-32 text-gray-800">
    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-7/12 px-3 lg:px-6">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r to-cyan-800 from-orange-400 mb-6">Frequently asked questions</h2>
        <p class="font-bold mb-2">Anim pariatur cliche reprehenderit?</p>
        <p class="text-cyan-800 mb-6">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt
          autem numquam dolore molestias aperiam culpa alias veritatis
          architecto eos, molestiae vitae ex eligendi libero eveniet
          dolorem, doloremque rem aliquid perferendis.
        </p>
        <p class="font-bold mb-2">Non cupidatat skateboard dolor brunch?</p>
        <p class="text-cyan-800 mb-6">
          Distinctio corporis, iure facere ducimus quos consectetur ipsa ut
          magnam autem doloremque ex! Id, sequi. Voluptatum magnam sed fugit
          iusto minus et suscipit? Minima sunt at nulla tenetur, numquam
          unde quod modi magnam ab deserunt ipsam sint aliquid dolores
          libero repellendus cupiditate mollitia quidem dolorem odit
        </p>
        <p class="font-bold mb-2">
          Praesentium voluptatibus temporibus consequatur non aspernatur?
        </p>
        <p class="text-cyan-800 mb-6 font-sans">
          Minima sunt at nulla tenetur, numquam unde quod modi magnam ab
          deserunt ipsam sint aliquid dolores libero repellendus cupiditate
          mollitia quidem dolorem.
        </p>

        <p class="font-semibold mb-2">
          Voluptatum magnam sed fugit iusto minus et suscipit?
        </p>
        <p class="text-cyan-800 font-sans">
          Laudantium perferendis, est alias iure ut veniam suscipit dolorem
          fugit. Et ipsam corporis earum ea ut quae cum non iusto blanditiis
          ipsum dolor eius reiciendis, velit adipisci quas.
        </p>
      </div>
      <div class="grow-0 shrink-0 basis-auto w-full md:w-5/12 px-3 lg:px-6">
        <p class="font-bold mb-6 text-cyan-800">Didn't find your answer in the FAQ? Contact Us Here</p>
        <form>
          <div class="form-group mb-6">
            <input type="text" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-cyan-800
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-cyan-800 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
              placeholder="Name">
          </div>
          <div class="form-group mb-6">
            <input type="email" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-cyan-800
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-cyan-800 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
              placeholder="Email address">
          </div>
          <div class="form-group mb-6">
            <textarea class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-cyan-800
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-cyan-800 focus:bg-white focus:border-blue-600 focus:outline-none
            " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
          </div>
          <!--div class="form-group form-check text-center mb-6">
            <input type="checkbox"
              class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
              id="exampleCheck87" checked>
            <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this
              message</label>
          </div-->
          <button type="submit" class="
            w-full
            px-6
            py-2.5
           bg-orange-400
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-cyan-700 hover:shadow-lg
           
            transition
            duration-150
            ease-in-out">Send</button>
        </form>
      </div>
    </div>
  </section> --}}
  <!-- Section: Design Block -->

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
