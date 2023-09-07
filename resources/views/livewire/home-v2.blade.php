<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <style>
        #loading {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: #333;
        }

        #loading {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: #f50000;
            z-index: 9999;
        }

        .video-container {
            display: flex;
            /* Ensure sections are displayed in a row */
            overflow-x: auto;
            /* Enable horizontal scrolling for sections */
            scroll-snap-type: x mandatory;
            /* Enable snap scrolling along the x-axis */
        }

        .spinner {
            border: 4px solid rgba(9, 9, 9, 0.1);
            border-top: 4px solid red;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            animation: spin 1s linear infinite;
            z-index: 9998;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            /* Semi-transparent white */
            z-index: 9997;
            /* Place the overlay below the loading message */
        }

        /* .video-section{
            scroll-snap-align: start;
        } */



        html,
        body {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            scroll-snap-align: start;
        }
    </style>


    {{-- Arrow  --}}


    <div class="md:fixed hidden bottom-0 md:flex justify-center  w-full pb-10  ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-10 h-10 text-center stroke-white border border-white rounded-full ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
        </svg>

    </div>

    {{-- Arrow  --}}




    {{-- Opening Page --}}
    {{-- Mobile --}}
    <div class="h-screen w-screen md:hidden z-10 fixed    " id="desktop-opening-mobile" wire:ignore>

        <div class=" w-full h-full  z-0  bg-cover bg-center  bg-no-repeat  px-16   "
            style="background-image: url({{ asset('img/opening-main-desktopV2.png') }})">

            <div class="w-full flex flex-col ">

                <div class="mb-10 mt-32">
                    <p class="text-white font-thin  text-2xl">Dear,</p>
                    <p class="text-white  text-2xl"> {{ $trimmedUrlSegment ?? 'Tamu' }}</p>
                </div>



                <div class="flex w-full flex-col gap-5 ">


                    <img src="{{ asset('img/E-Invitation-Homepage_0002_Vector-Smart-Object.png') }}"
                        class="bg-auto w-full mx-auto" alt="">
                    <h1 class="uppercase mx-auto text-xl text-white font-semibold">Friday, 29th September 2023</h1>

                    <div class="text-center">
                        <button
                            class="focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg text-xl px-5 py-2.5 mr-2 mb-2  z-20 uppercase "
                            onclick="opening_mobile()">open Invitation</button>
                    </div>

                </div>

            </div>
        </div>



    </div>
    {{-- Mobile --}}

    {{-- Desktop --}}
    <div class="h-screen w-screen md:block md:fixed z-20 hidden    " id="desktop-opening" wire:ignore>
        <div class=" h-screen w-screen z-0 relative bg-blend-darken "
            style="background-image: url({{ asset('img/opening-desktop-blur.png') }})">
            <div class="z-10  h-screen w-[40em] mx-auto bg-no-repeat  bg-center px-16    "
                style="background-image: url({{ asset('img/opening-main-desktop.png') }})">

                <div class="w-full flex flex-col ">

                    <div class="mb-10 mt-32">
                        <p class="text-white font-thin  text-2xl">Dear,</p>
                        <p class="text-white  text-2xl"> {{ $trimmedUrlSegment ?? 'Tamu' }}</p>
                    </div>



                    <div class="flex w-full flex-col gap-5 ">


                        <img src="{{ asset('img/E-Invitation-Homepage_0002_Vector-Smart-Object.png') }}"
                            class="bg-auto w-full mx-auto" alt="">
                        <h1 class="uppercase mx-auto text-xl text-white font-semibold">Friday, 29th September 2023</h1>

                        <div class="text-center">
                            <button
                                class="focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg text-xl px-5 py-2.5 mr-2 mb-2  z-20  uppercase "
                                onclick="opening()">open Invitation</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    {{-- Desktop --}}

    <script>
        function opening() {
            let opening_section = document.getElementById('desktop-opening');
            let toolbar = document.getElementById('toolbar');

            opening_section.style.display = 'none';
            window.scrollTo(0, 0);

            if (audio.paused) {
                audio.play();
                audioDisk.style.animationPlayState = 'running';
                playIcon.style.display = 'none';
                pauseIcon.style.display = 'block';
            } else {
                audio.pause();
                audioDisk.style.animationPlayState = 'paused';
                playIcon.style.display = 'block';
                pauseIcon.style.display = 'none';
            }

        }

        function opening_mobile() {
            let opening_section = document.getElementById('desktop-opening-mobile');
            opening_section.style.display = 'none';

            window.scrollTo(0, 0);

            if (audio.paused) {
                audio.play();
                audioDisk.style.animationPlayState = 'running';
                playIcon.style.display = 'none';
                pauseIcon.style.display = 'block';
            } else {
                audio.pause();
                audioDisk.style.animationPlayState = 'paused';
                playIcon.style.display = 'block';
                pauseIcon.style.display = 'none';
            }

        }
    </script>
    {{-- Opening Page --}}



    {{-- Mobile --}}
    <div class="carousel w-[100vw] h-[100vh] md:hidden">
        <div id="slide1" class="carousel-item relative w-full">
            <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted playsinline>
                <source src="{{ asset('videos/FAW DESAIN 1 HP.mp4') }}" type="video/mp4" />
            </video>
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide5" class="btn btn-circle btn-ghost  text-[#a7213a] ">❮</a>
                <a href="#slide2" class="btn btn-circle btn-ghost text-[#a7213a]">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted playsinline>
                <source src="{{ asset('videos/FAW DESAIN 2 HP.mp4') }}" type="video/mp4" />
            </video>
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">

                <a href="#slide1" class="btn btn-circle btn-ghost text-[#a7213a]">❮</a>
                <a href="#slide3" class="btn btn-circle btn-ghost text-[#a7213a]">❯</a>

            </div>
        </div>
        @if ($id_tamu !== null)
            <div id="slide3" class="carousel-item relative w-full">

                @if ($tamu->type_tamu == 'Holy & Wedding')
                    <video class="w-screen h-screen block object-fill md:hidden" loop muted autoplay playsinline>
                        <source src="{{ asset('videos/FAW DESAIN 3 HP.mp4') }}" type="video/mp4" />
                    </video>
                @elseif ($tamu->type_tamu == 'Holy')
                    <video class="w-screen h-screen block object-fill md:hidden" loop muted autoplay playsinline>
                        <source src="{{ asset('videos/FAW DESAIN 3 - harmony HP.mp4') }}" type="video/mp4" />
                    </video>
                @endif

                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">

                    <a href="#slide2" class="btn btn-circle btn-ghost text-[#a7213a]">❮</a>
                    <a href="#slide4" class="btn btn-circle btn-ghost text-[#a7213a]">❯</a>


                </div>
            </div>
        @else
            <div id="slide3" class="carousel-item relative w-full">

                <video class="w-screen h-screen block object-fill md:hidden" loop muted autoplay playsinline>
                    <source src="{{ asset('videos/FAW DESAIN 3 HP.mp4') }}" type="video/mp4" />
                </video>

                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">

                    <a href="#slide2" class="btn btn-circle btn-ghost text-[#a7213a]">❮</a>
                    <a href="#slide4" class="btn btn-circle btn-ghost text-[#a7213a]">❯</a>


                </div>
            </div>

        @endif

        <div id="slide4" class="carousel-item relative w-full">


            {{-- Wishes Begin --}}
            <section id="wishes" class="w-[100vw] h-max section">
                <div class=" h-full  pt-10 pb-10  md:p-0 w-screen    bg-cover    "
                    style="background-image: url('{{ asset('img/ending_mobile.PNG') }}')">


                    <div class="relative h-full w-full ">

                        <div class="w-full flex flex-col absolute  top-[40%] left-0 right-0 bottom-0   ">





                            <div class="w-full flex mx-auto ">
                                <div class="w-screen h-max flex flex-col  justify-center items-center mx-auto   ">


                                    {{-- bg-[#fcf1d0] --}}
                                    <div class="flex flex-col gap-3 bg-white bg-opacity-80  pt-7  px-5 w-[80vw] h-fit ">

                                        @if ($id_tamu !== null)
                                            @if($tamu->type_tamu == 'Holy')

                                            @else
                                            <div id="toolbar" class=" bottom-0   z-0 w-full  md:p-4 p-2  mx-auto">


                                                {{-- <p class="text-center md:text-3xl text-md text-[#b21e3a] font-bold text-xl  "
                                                style="font-family: geovano;">Confirmation of Attendance</p> --}}
                                                <div class="flex justify-center w-full text-center ">

                                                    <div class="flex-auto">
                                                        <a href="#hadirModal"><button type="button"
                                                                class="focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg  text-[15px] px-5 py-2.5 mr-2 mb-2  z-20 ">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-8 h-8  mx-auto">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                                </svg>


                                                                Confirmation of Attendance
                                                            </button></a>
                                                    </div>




                                                </div>

                                            </div>
                                            @endif
                                        @endif

                                        <div class=" mx-auto">
                                            <p class="text-center text-[15px] text-[#b21e3a]  mb-3"
                                                style="font-family: spinnaker;">The most important thing to us is
                                                having you with us to celebrate our day. But if you wish to give a gift
                                                please click this button below</p>
                                        </div>
                                        <div class=" flex mb-5 w-full justify-center   mx-auto">


                                            <div class=" self-center flex-auto text-center">


                                                <a href="#sentgifts" class="mx-auto"><button type="button"
                                                        class="focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg  text-[15px] px-5 py-2.5 mr-2   z-20  ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-8 h-8  mx-auto">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                        </svg>
                                                        Send Gift
                                                    </button></a>


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


            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">

                <a href="#slide3" class="btn btn-circle btn-ghost text-[#a7213a]">❮</a>
                <a href="#slide5" class="btn btn-circle btn-ghost text-[#a7213a]">❯</a>


            </div>



        </div>

        <div id="slide5" class="carousel-item relative w-full">


            <div class="w-[100vw] h-[100vh] section"
                style="background-image: url('{{ asset('img/BACKGROUND.jpg') }}')">

                <div class="grid grid-cols-1  w-full h-full px-1 py-10 gap-3 ">



                    <div class="  p-4 overflow-y-scroll ">
                        <div class="grid grid-cols-2  gap-4 h-min gallery">

                            <div class="grid gap-4 h-fit  ">
                                <div class="">
                                    <a href="{{ asset('img/gallery/ITO03725.jpg') }}"><img
                                            src="{{ asset('img/gallery/ITO03725.jpg') }}"
                                            class="h-auto max-w-full rounded-lg" alt=""></a>
                                </div>
                                <div class="">
                                    <a href="{{ asset('img/gallery/b3cb86f4-4f70-4c90-957e-f82816d6fbcd.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/b3cb86f4-4f70-4c90-957e-f82816d6fbcd.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="">
                                    <a href="{{ asset('img/gallery/d8d483f9-e899-4dde-bda7-2192e72a4d8d.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/d8d483f9-e899-4dde-bda7-2192e72a4d8d.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="">
                                    <a href="{{ asset('img/gallery/ITO04076.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/ITO04076.jpg') }}" alt=""></a>
                                </div>

                                <div class="">
                                    <a href="{{ asset('img/gallery/ITO04404.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/ITO04404.jpg') }}" alt=""></a>
                                </div>
                                <div class="">
                                    <a href="{{ asset('img/gallery/ITO04743.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/ITO04743.jpg') }}" alt=""></a>
                                </div>

                            </div>

                            <div class="grid gap-4 h-fit">
                                <div class="">
                                    <a href="{{ asset('img/gallery/2c2b5f18-cdb8-40d8-9d43-dcad1db97ba9.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/2c2b5f18-cdb8-40d8-9d43-dcad1db97ba9.jpg') }}"
                                            alt=""></a>
                                </div>

                                <div class="">
                                    <a href="{{ asset('img/gallery/5f0315cf-ed76-4f5b-b937-4eac8c9b260d.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/5f0315cf-ed76-4f5b-b937-4eac8c9b260d.jpg') }}"
                                            alt=""></a>
                                </div>

                                <div class="">
                                    <a href="{{ asset('img/gallery/ITO04289.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/ITO04289.jpg') }}" alt=""></a>
                                </div>

                                <div class="">
                                    <a href="{{ asset('img/gallery/ITO04341.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/ITO04341.jpg') }}" alt=""></a>
                                </div>
                                <div class="">
                                    <a href="{{ asset('img/gallery/ITO04726.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/ITO04726.jpg') }}" alt=""></a>
                                </div>

                                <div class="">
                                    <a href="{{ asset('img/gallery/43168a7e-72f0-4b94-a292-348a471e4266.jpg') }}"><img
                                            class="h-auto max-w-full rounded-lg"
                                            src="{{ asset('img/gallery/43168a7e-72f0-4b94-a292-348a471e4266.jpg') }}"
                                            alt=""></a>
                                </div>

                            </div>






                        </div>
                    </div>

                    <div class="md:mt-5 md:mb-8 ">

                        <p class="md:-mt-5 text-center text-[15px] text-[#b21e3a] " style="font-family: geovano;">
                            WISHES
                        </p>
                        <p class="text-center text-[15px] text-[#b21e3a]  " style="font-family: spinnaker;">
                            Sending
                            prayers
                            for the Bride & Groom</p>
                    </div>

                    <div class=" p-4 overflow-y-scroll ">




                        @if ($flag_tamu == true)
                            <div class="w-full mb-3">
                                <input type="text"
                                    class="w-full p-3 text-sm placeholder:text-md bg-[#F3EAE5] text-[#572841] font-bold text-md  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50"
                                    style="font-family:spinnaker" placeholder="NAME" wire:model="comment_nama_tamu"
                                    wire:ignore.self readonly>


                            </div>
                            <div class="w-full">

                                <textarea
                                    class="w-full p-3 bg-[#F3EAE5] text-[#572841] font-bold text-sm  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50"
                                    style="font-family:spinnaker" name="" id="" cols="20" rows="3"
                                    placeholder="MESSAGE" wire:model="comment_isi_tamu" wire:ignore.self></textarea>
                            </div>

                            <div class="w-full flex justify-center">
                                <div class="mx-auto flex-auto text-center">


                                    <button wire:click="send_comment()"
                                        class="focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg  text-[15px] px-5 py-2.5 mr-2 mb-2  z-20  "
                                        style="font-family:spinnaker">
                                        SEND
                                    </button>
                                </div>
                            </div>
                        @endif


                        @if ($comment_tamu !== null)
                            <div class="h-full flex flex-col gap-2 ">

                                @foreach ($comment_tamu as $item)
                                    <div class="flex flex-col ">
                                        <div class="bg-[#F3EAE5] flex flex-col gap-2 px-5 py-3">
                                            <div class="">
                                                <p class="text-[#572841] text-sm font-bold"
                                                    style="font-family: spinnaker;">
                                                    {{ $item->nama_tamu }}
                                                </p>
                                            </div>
                                            <div class="">
                                                <p class="text-[#572841] text-sm break-words"
                                                    style="font-family: spinnaker;">
                                                    {{ $item->comment_tamu }}</p>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach


                            </div>
                        @endif


                    </div>



                </div>




            </div>

            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">

                <a href="#slide4" class="btn btn-circle btn-ghost text-[#a7213a]">❮</a>
                <a href="#slide1" class="btn btn-circle btn-ghost text-[#a7213a]">❯</a>

            </div>
        </div>



    </div>
    {{-- Mobile --}}


    {{-- Desktop --}}
    <div class="sections-container hidden md:block">






        {{-- Section 1 --}}
        <div class="w-[100vw] h-[100vh] section ">
            <video id='video' class="w-screen h-screen object-fill  hidden md:block" muted autoplay playsinline>
                <source src="{{ asset('videos/DESAIN 1.mp4') }}" type="video/mp4" />
            </video>
        </div>
        {{-- Section 1 --}}

        {{-- Section 2 --}}
        <div class="w-[100vw] h-[100vh] section">
            <video id='video' class="w-screen h-screen object-fill  hidden md:block" muted autoplay playsinline>
                <source src="{{ asset('videos/DESAIN 2.mp4') }}" type="video/mp4" />
            </video>
        </div>
        {{-- Section 2 --}}

        {{-- Section 3 --}}
        @if ($id_tamu !== null)
            <div class="w-[100vw] h-[100vh] section">

                @if ($tamu->type_tamu == 'Holy & Wedding')
                    <video id='video' class="w-screen h-screen object-fill  hidden md:block" muted autoplay
                        playsinline>
                        <source src="{{ asset('videos/DESAIN 3.mp4') }}" type="video/mp4" />
                    </video>
                @elseif ($tamu->type_tamu == 'Holy')
                    <video id='video' class="w-screen h-screen object-fill  hidden md:block" muted autoplay
                        playsinline>
                        <source src="{{ asset('videos/DESAIN 3 - harmony.mp4') }}" type="video/mp4" />
                    </video>
                @else
                    <video id='video' class="w-screen h-screen object-fill  hidden md:block" muted autoplay
                        playsinline>
                        <source src="{{ asset('videos/DESAIN 3.mp4') }}" type="video/mp4" />
                    </video>
                @endif
            </div>
        @else
            <div class="w-[100vw] h-[100vh] section">


                <video id='video' class="w-screen h-screen object-fill  hidden md:block" muted autoplay
                    playsinline>
                    <source src="{{ asset('videos/DESAIN 3.mp4') }}" type="video/mp4" />
                </video>

            </div>
        @endif
        {{-- Section 3 --}}



        {{-- Wishes Begin --}}
        <section id="wishes" class="w-[100vw] h-full section ">
            <div class=" h-full  pt-10 pb-10  md:p-0 w-screen    bg-cover    "
                style="background-image: url('{{ asset('img/ending_desktop.PNG') }}')">


                <div class="relative h-full w-full ">

                    <div class="w-full flex flex-col absolute  top-[26%] left-0 right-0 bottom-0  ">





                        <div class="w-full flex ">
                            <div class="w-screen h-max flex flex-col  justify-start items-center   ">



                                <div
                                    class="flex flex-col gap-3 bg-white bg-opacity-70 mx-5 py-10 px-16 w-[50vw] h-[60vh] overflow-y-scroll">


                                    @if ($id_tamu !== null)
                                        @if($tamu->type_tamu == 'Holy')
                                        @else
                                        <div id="toolbar" class=" bottom-0   z-0 w-full  md:p-4 p-2 ">


                                            {{-- <p class="text-center md:text-3xl text-md text-[#b21e3a] font-bold text-xl  "
                                                style="font-family: geovano;">Confirmation of Attendance</p> --}}
                                            <div class="flex justify-center w-full text-center ">

                                                <div class="flex-auto">
                                                    <a href="#hadirModal"><button type="button"
                                                            class="focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg text-xl px-5 py-2.5 mr-2 mb-2  z-20">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-10 h-10  mx-auto">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                            </svg>
                                                            Confirmation of Attendance
                                                        </button></a>
                                                </div>




                                            </div>

                                        </div>
                                        @endif
                                    @endif

                                    <div class="">
                                        <p class="text-center text-[20px] text-[#b21e3a] font-bold mb-3"
                                            style="font-family: spinnaker;">The most important thing to us is
                                            having you with us to celebrate our day. But if you wish to give a gift
                                            please click this button below</p>
                                    </div>
                                    <div class=" flex mb-5 w-full justify-center   ">


                                        <div class=" self-center flex-auto text-center">


                                            <a href="#sentgifts" class="mx-auto"><button type="button"
                                                    class="focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg text-xl px-5 py-2.5 mr-2 mb-2  z-20 ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-10 h-10  mx-auto">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                    </svg>
                                                    Send Gift
                                                </button></a>


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

          {{-- Section 5 --}}
          <div class="w-[100vw] h-[100vh] section" style="background-image: url('{{ asset('img/BACKGROUND.jpg') }}')">

            <div class="grid grid-cols-3 w-full h-full px-12 py-12 gap-4 ">

                <div class="col-span-2 bg-white bg-opacity-70 p-4 overflow-y-scroll ">



                    <div class="grid grid-cols-3  gap-4 h-min gallery">

                        <div class="grid gap-4 h-fit  ">
                            <div class="">
                                <a href="{{ asset('img/gallery/ITO03725.jpg') }}"><img
                                        src="{{ asset('img/gallery/ITO03725.jpg') }}"
                                        class="h-auto max-w-full rounded-lg" alt=""></a>
                            </div>
                            <div class="">
                                <a href="{{ asset('img/gallery/b3cb86f4-4f70-4c90-957e-f82816d6fbcd.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/b3cb86f4-4f70-4c90-957e-f82816d6fbcd.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="">
                                <a href="{{ asset('img/gallery/d8d483f9-e899-4dde-bda7-2192e72a4d8d.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/d8d483f9-e899-4dde-bda7-2192e72a4d8d.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="">
                                <a href="{{ asset('img/gallery/ITO04076.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/ITO04076.jpg') }}" alt=""></a>
                            </div>



                        </div>

                        <div class="grid gap-4 h-fit">
                            <div class="">
                                <a href="{{ asset('img/gallery/2c2b5f18-cdb8-40d8-9d43-dcad1db97ba9.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/2c2b5f18-cdb8-40d8-9d43-dcad1db97ba9.jpg') }}"
                                        alt=""></a>
                            </div>

                            <div class="">
                                <a href="{{ asset('img/gallery/5f0315cf-ed76-4f5b-b937-4eac8c9b260d.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/5f0315cf-ed76-4f5b-b937-4eac8c9b260d.jpg') }}"
                                        alt=""></a>
                            </div>

                            <div class="">
                                <a href="{{ asset('img/gallery/ITO04289.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/ITO04289.jpg') }}" alt=""></a>
                            </div>

                            <div class="">
                                <a href="{{ asset('img/gallery/ITO04341.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/ITO04341.jpg') }}" alt=""></a>
                            </div>

                        </div>

                        <div class="grid gap-4 h-fit">
                            <div class="">
                                <a href="{{ asset('img/gallery/ITO04404.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/ITO04404.jpg') }}" alt=""></a>
                            </div>
                            <div class="">
                                <a href="{{ asset('img/gallery/ITO04726.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/ITO04726.jpg') }}" alt=""></a>
                            </div>
                            <div class="">
                                <a href="{{ asset('img/gallery/ITO04743.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/ITO04743.jpg') }}" alt=""></a>
                            </div>

                            <div class="">
                                <a href="{{ asset('img/gallery/43168a7e-72f0-4b94-a292-348a471e4266.jpg') }}"><img
                                        class="h-auto max-w-full rounded-lg"
                                        src="{{ asset('img/gallery/43168a7e-72f0-4b94-a292-348a471e4266.jpg') }}"
                                        alt=""></a>
                            </div>

                        </div>





                    </div>


                </div>
                <div class="col-span-1  p-4 overflow-y-scroll ">

                    <div class="md:mt-5 md:mb-8">

                        <p class="md:-mt-5 text-center text-3xl text-[#b21e3a] " style="font-family: geovano;">
                            WISHES
                        </p>
                        <p class="text-center text-md text-[#b21e3a] " style="font-family: spinnaker;">
                            Sending
                            prayers
                            for the Bride & Groom</p>
                    </div>



                    @if ($flag_tamu == true)
                        <div class="w-full mb-3">
                            <input type="text"
                                class="w-full p-3 text-sm placeholder:text-md bg-[#F3EAE5] text-[#572841] font-bold text-md  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50"
                                style="font-family:spinnaker" placeholder="NAME" wire:model="comment_nama_tamu"
                                wire:ignore.self readonly>


                        </div>
                        <div class="w-full">

                            <textarea
                                class="w-full p-3 bg-[#F3EAE5] text-[#572841] font-bold text-sm  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50"
                                style="font-family:spinnaker" name="" id="" cols="20" rows="3"
                                placeholder="MESSAGE" wire:model="comment_isi_tamu" wire:ignore.self></textarea>
                        </div>

                        <div class="w-full flex justify-center">
                            <div class="mx-auto flex-auto text-center">


                                <button wire:click="send_comment()"
                                    class=" focus:outline-none shadow-lg  bg-gradient-to-b from-20% from-[#ffbc7c] to-[#e4a76f] items-center  w-[80%] gap-3 bg-[#ffbc7c] text-[#a7213a]  font-medium rounded-lg text-xl px-5 py-2.5 mr-2 mb-2  z-20"
                                    style="font-family:spinnaker">
                                    SEND
                                </button>
                            </div>
                        </div>
                    @endif


                    @if ($comment_tamu !== null)
                        <div class="h-full flex flex-col gap-2 ">

                            @foreach ($comment_tamu as $item)
                                <div class="flex flex-col ">
                                    <div class="bg-[#F3EAE5] flex flex-col gap-2 px-5 py-3">
                                        <div class="">
                                            <p class="text-[#572841] text-sm font-bold"
                                                style="font-family: spinnaker;">{{ $item->nama_tamu }}
                                            </p>
                                        </div>
                                        <div class="">
                                            <p class="text-[#572841] text-sm break-words"
                                                style="font-family: spinnaker;">
                                                {{ $item->comment_tamu }}</p>
                                        </div>

                                    </div>

                                </div>
                            @endforeach


                        </div>
                    @endif


                </div>

            </div>




        </div>

        {{-- Section 5 --}}
    </div>



    {{-- Desktop --}}



    {{-- Modal Konfirmasi Datang (Iya) --}}
    <dialog id="hadirModal" class="modal z-40  modal-bottom sm:modal-middle w-full h-full">
        <form method="dialog" class="modal-box bg-white ">
            <h3 class="font-bold text-2xl w-full text-[#a7213a]">Hello! , {{ $trimmedUrlSegment ?? '' }} </h3>
            @if($flag_btn_hadir == false)
            <p class="py-4 text-[#a7213a] text-xl text-center">Are You Coming?</p>
            @endif
            @if($flag_btn_hadir == true)
            <p class="py-4 text-[#a7213a] text-xl">How Many People Are Coming ?</p>
            <div class="">
                <input type="number" placeholder="1~99" wire:model="jumlah_tamu"
                    class="input w-full input-bordered border-[#a7213a] bg-white text-[#a7213a]">
            </div>
            @endif
            <div class="modal-action flex justify-center">
                <!-- if there is a button in form, it will close the modal -->
                @if($flag_btn_hadir == true)
                <a href="#" class="btn  bg-[#e6a86e] text-white border-none"
                    wire:click="confirmed_accept()">Save</a>
                @endif
                @if($flag_btn_hadir == false)
                <a  class="btn  bg-[#e6a86e] text-white border-none"
                    wire:click="confriem_btn()">Yes</a>
                @endif
                @if($flag_btn_hadir == false)
                <a href="#" class="btn  bg-[#a7213a] text-white border-none "
                    wire:click="confirmed_decline()">No</a>
                @endif
                <a href="#" class="btn  bg-[#a7213a] text-white border-none" wire:click="resetBtnConfirmation">Close</a>
            </div>
        </form>
    </dialog>

    {{-- Modal Konfirmasi Datang (Tidak) --}}


    {{-- Modal Send Gifts  --}}
    <dialog id="sentgifts" class="modal z-40 modal-bottom sm:modal-middle w-full h-full">
        <form method="dialog" class="modal-box bg-white  ">
            <h3 class="font-bold text-lg w-full mb-5 text-[#a7213a]">Hello! , {{ $trimmedUrlSegment ?? 'Tamu' }} </h3>

            <div class="flex flex-col gap-3">

                <div class="bg-[#ffbc7c] shadow-lg p-4 rounded-2xl">
                    <img src="{{ asset('img/logo-bcapng-32645.png') }}" class="object-fit w-32 h-auto mb-3 "
                        alt="">
                    <p class="font-semibold text-xl  text-[#a7213a]">Pricilla Devina Sukamto</p>
                    <p class="mb-3 text-[#a7213a]">3850493773</p>
                    <a href="#" class="btn w-full bg-[#a7213a] text-white border-none"
                        wire:click="copy_alert('BCA')" onclick="copyText('3850493773')">Copy Number</a>
                </div>

                <div class="bg-[#ffbc7c] shadow-lg p-4 rounded-2xl">
                    <img src="{{ asset('img/Bank Mandiri Logo (PNG-720p) - FileVector69.png') }}"
                        class="object-fit w-32 h-auto mb-3" alt="">
                    <p class="font-semibold text-xl text-[#a7213a]">Arie Lesmana</p>
                    <p class="mb-3 text-[#a7213a]">9000013617619</p>
                    <a href="#" class="btn w-full bg-[#a7213a] text-white border-none"
                        wire:click="copy_alert('Mandiri')" onclick="copyText('9000013617619')">Copy Number</a>
                </div>
            </div>








            <div class="modal-action ">
                <!-- if there is a button in form, it will close the modal -->

                <a href="#" class="btn w-full bg-[#a7213a] text-white border-none">Close</a>
            </div>
        </form>
    </dialog>
    {{-- Modal Send Gifts  --}}





    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const videos = document.querySelectorAll("video");
        //     let videosLoaded = 0;

        //     function checkVideosLoaded() {
        //         videosLoaded++;
        //         if (videosLoaded === videos.length) {
        //             // All videos are loaded, hide the loading elements
        //             document.getElementById("loading").style.display = "none";
        //             document.querySelector(".loading-overlay").style.display = "none";
        //         }
        //     }

        //     videos.forEach(function(video) {
        //         video.addEventListener("loadeddata", checkVideosLoaded);
        //         video.addEventListener("error", checkVideosLoaded); // Handle errors too
        //     });

        //     // Also hide overlay if all videos are already loaded when the page loads
        //     if (videos.length === 0) {
        //         document.querySelector(".loading-overlay").style.display = "none";
        //     }
        // });

        // const sectionsContainer = document.querySelector('.sections-container');
        // const sections = document.querySelectorAll('.section');

        // sectionsContainer.addEventListener('wheel', (event) => {
        //   // Calculate the current visible section
        //   const currentSectionIndex = Math.floor(sectionsContainer.scrollTop / window.innerHeight);
        //   let nextSectionIndex = currentSectionIndex + (event.deltaY > 0 ? 1 : -1);

        //   // Ensure nextSectionIndex is within valid range
        //   nextSectionIndex = Math.max(0, Math.min(sections.length - 1, nextSectionIndex));

        //   // Scroll to the next section
        //   sections[nextSectionIndex].scrollIntoView({
        //     behavior: 'smooth',
        //     block: 'start',
        //   });

        //   event.preventDefault(); // Prevent default scrolling behavior
        // });
    </script>
</div>
