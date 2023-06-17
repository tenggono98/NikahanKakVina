<div style="scroll-behavior: smooth;">
    {{-- The best athlete wants his opponent at his best. --}}

    <section id="opening" class="" >
        <div class="flex h-screen justify-center items-center flex-col">
            <div
                class="w-full h-screen  bg-cover bg-center" style="background-image: url('{{asset('img/ITO03627(1).jpg')}}')">

                <div class="w-full h-full flex flex-col  justify-center items-center backdrop-blur-sm">
                        <span class="text-[#582841]  md:text-4xl text-2xl w-1/2 text-center absolute top-20" style="font-family:spinnaker">#VINAllymARIEd</span>
                        <img src="{{asset('img/Asset 1.svg')}}" class="h-[20vh] md:h-[50vh] w-auto  absolute top-32 px-10 md:px-0" alt="">
                        <span class="text-[#582841]  md:text-4xl  text-2xl w-1/2 text-center absolute bottom-40 uppercase" style="font-family:spinnaker">DEAR, ADELA & FAMILY</span>
                        <a href="#info" class="absolute flex bottom-20 text-3xl p-4 bg-[#582841] font-semibold text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                              </svg>

                            <span class="pl-3">Open Invitation</span>
                        </a>

                </div>




            </div>
        </div>
    </section>

    <section id="info" class="" >
        <div class="flex  justify-center items-center flex-col">
            <div class="w-full h-[100%]  pt-10 pb-10 px-3 md:pt-0  md:px-0 md:pb-0  bg-fixed bg-center" style="background-image: url('{{asset('img/BACKGROUND.jpg')}}')">
                <img src="{{asset('img/Asset 2.svg')}}" class=" bg-contain  w-[98%] md:mt-5  " alt="">
                <div class="w-full h-full flex flex-col  justify-start items-center">



                        <div class="grid grid-cols-4 md:grid-cols-3   h-max w-full  md:pt-12 md:px-20 gap-3">
                            <div class="order-2 md:order-none col-span-2 md:col-span-1">
                                <img src="{{ asset('img/laki-laki.png')}}" class="mx-auto w-auto h-52 md:w-auto md:h-2/3" alt="">
                                <p class="uppercase text-[#582841] text-sm md:text-3xl text-center" style="font-family: geovano;">Arie Lesmana</p>
                                <p class="text-[#582841] text-center text-xs md:text-xl " style="font-family: spinnaker;">Son of ( &#128327;  ) Mr. Alimin Effendy <br>&<br> Mrs. Lis Haryati</p>
                            </div>
                            <div class="mt-10 md:mt-32 order-1 col-span-4 md:col-span-1 md:order-none">
                                <p class="text-[#582841] text-center text-md md:text-3xl " style="font-family: spinnaker;">The honor of your presence is requested.<br>
                                    At the marriage of</p>
                                    <img src="{{asset('img/Asset 5.svg')}}" class="h-[20vh] md:h-[50vh] w-auto md:-mt-32 mx-auto " alt="">

                            </div>
                            <div class="order-3 md:order-none col-span-2 md:col-span-1">
                                <img src="{{ asset('img/perempuan.png')}}" class="mx-auto w-auto h-52 md:w-auto md:h-2/3" alt="">
                                <p class="uppercase text-[#582841] text-sm md:text-3xl text-center" style="font-family: geovano;">PRICILLA DEVINA SUKAMTO</p>
                                <p class="text-[#582841] text-center text-xs md:text-xl " style="font-family: spinnaker;">Daughter of Mr.Thomas Sukamto <br> & <br> Mrs.Debora Megawaty</p>
                            </div>

                        </div>





                </div>
                <img src="{{asset('img/Asset 3.svg')}}" class=" bg-contain w-[98%] md:mb-5 " alt="">

            </div>
        </div>
    </section>


    <section id="info">
        <div class="w-full h-[100vh]  pt-10 pb-10 px-3 md:pt-0  md:px-0 md:pb-0  bg-[#ab212a]" >
            <div class="grid grid-cols-12 px-24 py-24">


                <div class=" col-span-5">
                    {{-- Title --}}
                        <p class="text-7xl font-bold text-white text-center " style="font-family: geovano;">SAVE THE DATE</p>
                        <img src="{{asset('img/Asset 1.svg')}}" class="h-[5vh] md:h-[20vh] mx-auto  -mt-7 " alt="">
                    {{-- Title --}}


                    {{-- Clock --}}

                    <div class="flex mt-28 justify-center ">
                        <div class="">
                            <div class="bg-white px-8 py-6 my-auto">
                                <p class="text-3xl text-[#572841]" id="clock_days" style="font-family: geovano;"></p>
                            </div>
                            <p class="text-center text-white mt-4" style="font-family: spinnaker;">DAY</p>
                        </div>
                        <div class="self-center px-8 pb-12 h-full">
                            <p class="text-white text-5xl">:</p>
                        </div>
                        <div class="">
                            <div class="bg-white px-8 py-6 my-auto">
                                <p class="text-3xl text-[#572841]" id="clock_hours" style="font-family: geovano;"></p>
                            </div>
                            <p class="text-center text-white mt-4" style="font-family: spinnaker;">HOUR</p>
                        </div>
                        <div class="self-center px-8 pb-12 h-full">
                            <p class="text-white text-5xl">:</p>
                        </div>
                        <div class="">
                            <div class="bg-white px-8 py-6 my-auto">
                                <p class="text-3xl text-[#572841]" id="clock_minutes" style="font-family: geovano;"></p>
                            </div>
                            <p class="text-center text-white mt-4" style="font-family: spinnaker;">MINUTE</p>
                        </div>
                        <div class="self-center px-8 pb-12 h-full">
                            <p class="text-white text-5xl">:</p>
                        </div>
                        <div class="">
                            <div class="bg-white px-8 py-6 my-auto">
                                <p class="text-3xl text-[#572841]" id="clock_second" style="font-family: geovano;"></p>
                            </div>
                            <p class="text-center text-white mt-4" style="font-family: spinnaker;">SECOND</p>
                        </div>


                    </div>

                    {{-- Clock --}}

                    {{-- Logic Clock --}}
                    <script>


                    function countdown(deadline) {



                    // Get the current time in UTC.
                    const now = new Date();

                    // Convert the deadline to a Date object in UTC.
                    const deadlineDate = new Date(deadline);

                    // Calculate the difference between the current time and the deadline.
                    const difference = deadlineDate - now;

                    // Get the days, hours, minutes, and seconds from the difference.
                    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

                    document.getElementById('clock_days').innerHTML= `${days}`;
                        document.getElementById('clock_hours').innerHTML= `${hours}`;
                        document.getElementById('clock_minutes').innerHTML= `${minutes}`;
                        document.getElementById('clock_second').innerHTML= `${seconds}`;

                    // Update the countdown every second.
                    setInterval(() => {
                    // Get the current time in UTC.
                    const now = new Date();

                    // Calculate the difference between the current time and the deadline.
                   let difference = deadlineDate - now;

                    // Get the days, hours, minutes, and seconds from the difference.
                    let days = Math.floor(difference / (1000 * 60 * 60 * 24));
                    let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((difference % (1000 * 60)) / 1000);

                    document.getElementById('clock_days').innerHTML= `${days}`;
                        document.getElementById('clock_hours').innerHTML= `${hours}`;
                        document.getElementById('clock_minutes').innerHTML= `${minutes}`;
                        document.getElementById('clock_second').innerHTML= `${seconds}`;



                    }, 1000);
                    }


                    countdown("2023-09-15T11:00:00+07:00");

                    </script>
                    {{-- Logic Clock --}}

                    {{-- Kata-kata Mutiara --}}
                    <div class="">
                        <p class="text-center text-white mt-10" style="font-family:spinnaker">And now these three remain: faith, hope, and love. But the <br> greatest of these is love.<br>
                            1 Corinthians 13:13
                        </p>
                    </div>
                    {{-- Kata-kata Mutiara --}}

                </div>

                <div class="col-span-3 relative mt-20">

                    <div class="absolute">
                        <div class="">
                            <img src="{{ asset('img/top_save_date.png')}}" class="-mb-20" alt="">
                        </div>

                        <div class="">
                            <img src="{{ asset('img/bottom_save_date.png')}}" alt="">
                        </div>
                    </div>



                </div>


                <div class="col-span-4">

                    {{-- Section 1 --}}
                    <div class="">
                        <p class="text-white text-3xl" style="font-family: geovano;">HOLY MATRIMONY</p>
                        <div class="flex justify-between" style="font-family: geovano;">
                            <div class="">
                                <p class="text-white text-xl">SABTU, 29 SEPTEMBER 2023 </p>

                            </div>
                            <div class="">
                                <p class="text-white ">|</p>
                            </div>
                            <div class="mr-24">
                                <p class="text-white text-xl">11.00</p>
                            </div>
                        </div>
                        <p class="text-white my-4" style="font-family:spinnaker">
                            Gereja Katolik Paroki St. Vincentius A Paulo Jl. Ananas No.41, Pisang Candi, Kec. Sukun, <br> Kota Malang, Jawa Timur 65146
                        </p>
                        <button class="btn  rounded-none text-[#572841] border-none bg-[#E8895B] font-bold text-xl " style="font-family:spinnaker">
                            Map Location
                        </button>
                    </div>

                    {{-- Section 1 --}}



                    {{-- Seperator--}}
                    <div class="">
                        <div class="">
                            <img src="{{asset('img/Asset 6.svg')}}" class=" mx-auto  w-[80%] h-[10em] md:mt-5  " alt="">
                        </div>



                    </div>

                    {{-- Seperator--}}


                    {{-- Section 2 --}}

                    <div class="">
                        <p class="text-white text-3xl" style="font-family: geovano;">WEDDING RECEPTION</p>
                        <div class="flex justify-between"   style="font-family: geovano;">
                            <div class="">
                                <p class="text-white text-xl">SABTU, 29 SEPTEMBER 2023 </p>

                            </div>
                            <div class="mr-24">
                                <p class="text-white text-xl">18.00</p>
                            </div>
                        </div>
                        <p class="text-white my-4" style="font-family:spinnaker">
                            Gereja Katolik Paroki St. Vincentius A Paulo Jl. Ananas No.41, Pisang Candi, Kec. Sukun, <br> Kota Malang, Jawa Timur 65146
                        </p>
                        <button class="btn  rounded-none text-[#572841] border-none bg-[#E8895B] font-bold text-xl " style="font-family:spinnaker">
                            Map Location
                        </button>
                    </div>


                    {{-- Section 2--}}

                </div>

            </div>
        </div>

    </section>

    {{-- Wishes Begin --}}
    <section id="wishes">
          <div class="w-full h-[100%]  pt-10 pb-10 px-3 md:pt-0  md:px-0 md:pb-0  bg-fixed bg-center" style="background-image: url('{{asset('img/BACKGROUND.jpg')}}')">

            <div class="w-full h-screen flex flex-col  justify-start items-center">
            <div class="mt-16 mb-8">
                <img src="{{asset('img/Asset 5.svg')}}" class="h-[10vh] md:h-[20vh] w-auto mx-auto " alt="">
                <p class="-mt-16 text-center text-7xl text-[#572841] " style="font-family: geovano;">WISHES</p>
                <p class="text-center text-2xl text-[#572841]  " style="font-family: spinnaker;">Sending prayers for the Bride & Groom</p>
            </div>


            <div class="flex flex-col gap-5 bg-[#E8895B] py-10 px-16 w-[50vw]">

                <div class="w-full">
                    <input type="text" class="w-full p-5 bg-[#F3EAE5] text-[#572841] font-bold text-xl placeholder:text-xl placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50" style="font-family:spinnaker" placeholder="NAME" >


                </div>
                <div class="w-full">

                    <textarea class="w-full p-5 bg-[#F3EAE5] text-[#572841] font-bold text-xl placeholder:text-xl placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50" style="font-family:spinnaker" name="" id="" cols="20" rows="3" placeholder="MESSAGE"></textarea>
                </div>

                <div class="mx-auto">
                    <button class="btn mx-auto  rounded-none text-[#572841] border-none bg-[#F3EAE5] font-bold text-xl  " style="font-family:spinnaker">
                       <span class="opacity-50">SEND</span>
                    </button>
                </div>

                <div class="">
                    <div class="h-44 flex flex-col gap-2 overflow-y-scroll">

                        <div class="flex flex-col ">
                            <div class="bg-[#F3EAE5] flex flex-col gap-2 px-5 py-3">
                                <div class="">
                                    <p class="text-[#572841]"  style="font-family: spinnaker;">Adela & Chris</p>
                                </div>
                                <div class="">
                                <p class="text-[#572841]"  style="font-family: spinnaker;">HAPPY WEDDING!!!! CIE CIE CIE </p>
                                </div>

                            </div>

                        </div>
                        <div class="flex flex-col ">
                            <div class="bg-[#F3EAE5] flex flex-col gap-2 px-5 py-3">
                                <div class="">
                                    <p class="text-[#572841]"  style="font-family: spinnaker;">Adela & Chris</p>
                                </div>
                                <div class="">
                                <p class="text-[#572841]"  style="font-family: spinnaker;">HAPPY WEDDING!!!! CIE CIE CIE </p>
                                </div>

                            </div>

                        </div>

                        <div class="flex flex-col ">
                            <div class="bg-[#F3EAE5] flex flex-col gap-2 px-5 py-3">
                                <div class="">
                                    <p class="text-[#572841]"  style="font-family: spinnaker;">Adela & Chris</p>
                                </div>
                                <div class="">
                                <p class="text-[#572841]"  style="font-family: spinnaker;">HAPPY WEDDING!!!! CIE CIE CIE </p>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>


            </div>

            </div>


        </div>

    </section>
    {{-- Wishes End --}}

</div>
