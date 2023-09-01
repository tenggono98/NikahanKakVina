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

    {{-- <div class="loading-overlay" wire:ignore></div>

    <div id="loading" wire:ignore>
        <div class="spinner" ></div>

    </div> --}}





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

                    <button class="btn bg-white text-black border-none rounded-full  w-[90%] mx-auto font-bold text-xl "
                        onclick="opening_mobile()">open Invitation</button>
                </div>

            </div>
        </div>



    </div>


    {{-- Mobile --}}

    {{-- Desktop --}}
    <div class="h-screen w-screen md:block md:fixed z-20 hidden    " id="desktop-opening" wire:ignore>
        <div class=" h-screen w-screen z-0 relative bg-blend-darken "
            style="background-image: url({{ asset('img/opening-desktop-blur.png') }})">
            <div class="z-10  h-screen w-[40em] mx-auto bg-no-repeat px-16    "
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

                        <button
                            class="btn bg-white text-black border-none rounded-full  w-[90%] mx-auto font-bold text-xl "
                            onclick="opening()">open Invitation</button>
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

        }

        function opening_mobile() {
            let opening_section = document.getElementById('desktop-opening-mobile');
            opening_section.style.display = 'none';

            window.scrollTo(0, 0);

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
                <a href="#slide5" class="btn btn-ghost btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle btn-ghost text-white">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted playsinline>
                <source src="{{ asset('videos/FAW DESAIN 2 HP.mp4') }}" type="video/mp4" />
            </video>
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                @if($id_tamu !== '')
                <a href="#slide1" class="btn btn-circle btn-ghost text-white">❮</a>
                <a href="#slide3" class="btn btn-circle btn-ghost text-white">❯</a>
                @else
                <a href="#slide1" class="btn btn-circle btn-ghost text-white">❮</a>
                <a href="#slide4" class="btn btn-circle btn-ghost text-white">❯</a>
                @endif
            </div>
        </div>
        @if ($id_tamu !== '')
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
                @if($id_tamu !== '')
                <a href="#slide2" class="btn btn-circle btn-ghost text-white">❮</a>
                <a href="#slide4" class="btn btn-circle btn-ghost text-white">❯</a>
                @endif

            </div>
        </div>
        @endif

        <div id="slide4" class="carousel-item relative w-full">
            {{-- Wishes Begin --}}
            <section id="wishes" class="w-[100vw] h-max section">
                <div class=" h-max  pt-10 pb-10  md:pt-0 w-screen  bg-fixed "
                    style="background-image: url('{{ asset('img/BACKGROUND.jpg') }}')">

                    <div class="w-screen h-screen flex flex-col  justify-start items-center">
                        <div class="md:mt-5 md:mb-8">
                            <img src="{{ asset('img/Asset 5.svg') }}" class="h-[10vh] md:h-[10vh] w-auto mx-auto "
                                alt="">
                            <p class="md:-mt-5 text-center text-3xl text-[#572841] " style="font-family: geovano;">
                                WISHES
                            </p>
                            <p class="text-center text-md text-[#572841]  " style="font-family: spinnaker;">Sending
                                prayers
                                for the Bride & Groom</p>
                        </div>


                        <div class="flex flex-col gap-3 bg-[#E8895B] mx-5 py-10 px-16 w-screen h-[70%]">


                            @if ($flag_tamu == true)
                                <div class="w-full">
                                    <input type="text"
                                        class="w-full p-3 text-sm placeholder:text-md bg-[#F3EAE5] text-[#572841] font-bold text-md  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50"
                                        style="font-family:spinnaker" placeholder="NAME" wire:model="comment_nama_tamu"
                                        wire:ignore.self readonly>


                                </div>
                                <div class="w-full">

                                    <textarea
                                        class="w-full p-3 bg-[#F3EAE5] text-[#572841] font-bold text-sm  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50"
                                        style="font-family:spinnaker" name="" id="" cols="20" rows="3" placeholder="MESSAGE"
                                        wire:model="comment_isi_tamu" wire:ignore.self></textarea>
                                </div>

                                <div class="mx-auto">
                                    <button
                                        class="btn mx-auto  rounded-none text-[#572841] border-none bg-[#F3EAE5] font-bold text-md  "
                                        style="font-family:spinnaker">
                                        <span class="opacity-50" wire:click="send_comment()">SEND</span>
                                    </button>
                                </div>
                            @endif

                            <div class="h-full flex flex-col gap-2 overflow-y-scroll">

                                @foreach ($comment_tamu as $item)
                                    <div class="flex flex-col ">
                                        <div class="bg-[#F3EAE5] flex flex-col gap-2 px-5 py-3">
                                            <div class="">
                                                <p class="text-[#572841] text-sm font-bold"
                                                    style="font-family: spinnaker;">{{ $item->nama_tamu }}</p>
                                            </div>
                                            <div class="">
                                                <p class="text-[#572841] text-sm" style="font-family: spinnaker;">
                                                    {{ $item->comment_tamu }}</p>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach


                            </div>




                        </div>

                    </div>


                </div>

            </section>
            {{-- Wishes End --}}

            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#slide3" class="btn btn-circle btn-ghost text-white">❮</a>
                <a href="#slide5" class="btn btn-circle btn-ghost text-white">❯</a>
            </div>
        </div>


        <div id="slide5" class="carousel-item relative w-full">
            <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted playsinline>
                <source src="{{ asset('videos/FAW DESAIN 4 HP.mp4') }}" type="video/mp4" />
            </video>
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                @if($id_tamu !== '')
                <a href="#slide4" class="btn btn-circle btn-ghost text-white">❮</a>
                <a href="#slide1" class="btn btn-circle btn-ghost text-white">❯</a>
                @else
                <a href="#slide3" class="btn btn-circle btn-ghost text-white">❮</a>
                <a href="#slide1" class="btn btn-circle btn-ghost text-white">❯</a>
                @endif
            </div>
        </div>
    </div>
    {{-- Mobile --}}


    {{-- Desktop --}}
    <div class="sections-container hidden md:block">






        {{-- Section 1 --}}
        <div class="w-[100vw] h-[100vh] section ">
            <video id='video' class="w-screen h-screen object-fill  hidden md:block" loop muted autoplay
                playsinline>
                <source src="{{ asset('videos/DESAIN 1.mp4') }}" type="video/mp4" />
            </video>
        </div>
        {{-- Section 1 --}}

        {{-- Section 2 --}}
        <div class="w-[100vw] h-[100vh] section">
            <video id='video' class="w-screen h-screen object-fill  hidden md:block" loop muted autoplay
                playsinline>
                <source src="{{ asset('videos/DESAIN 2.mp4') }}" type="video/mp4" />
            </video>
        </div>
        {{-- Section 2 --}}

        {{-- Section 3 --}}
        @if ($id_tamu !== '')
            <div class="w-[100vw] h-[100vh] section">

                @if ($tamu->type_tamu == 'Holy & Wedding')
                    <video id='video' class="w-screen h-screen object-fill  hidden md:block" loop muted autoplay
                        playsinline>
                        <source src="{{ asset('videos/DESAIN 3.mp4') }}" type="video/mp4" />
                    </video>
                @elseif ($tamu->type_tamu == 'Holy')
                    <video id='video' class="w-screen h-screen object-fill  hidden md:block" loop muted autoplay
                        playsinline>
                        <source src="{{ asset('videos/DESAIN 3 - harmony.mp4') }}" type="video/mp4" />
                    </video>
                @endif
            </div>
        @endif
        {{-- Section 3 --}}

        {{-- Wishes Begin --}}
        <section id="wishes" class="w-[100vw] h-max section">
            <div class="w-screen h-max  pt-10 pb-10 px-3 md:pt-0  md:px-0 md:pb-0  bg-fixed "
                style="background-image: url('{{ asset('img/BACKGROUND.jpg') }}')">

                <div class="w-screen h-screen flex flex-col  justify-start items-center">
                    <div class="md:mt-5 md:mb-8">
                        <img src="{{ asset('img/Asset 5.svg') }}" class="h-[10vh] md:h-[10vh] w-auto mx-auto "
                            alt="">
                        <p class="md:-mt-5 text-center text-3xl text-[#572841] " style="font-family: geovano;">WISHES
                        </p>
                        <p class="text-center text-md text-[#572841]  " style="font-family: spinnaker;">Sending
                            prayers
                            for the Bride & Groom</p>
                    </div>


                    <div class="flex flex-col gap-3 bg-[#E8895B] py-10 px-16 w-[50vw] h-[70%]">


                        @if ($flag_tamu == true)
                            <div class="w-full">
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

                            <div class="mx-auto">
                                <button
                                    class="btn mx-auto  rounded-none text-[#572841] border-none bg-[#F3EAE5] font-bold text-md  "
                                    style="font-family:spinnaker">
                                    <span class="opacity-50" wire:click="send_comment()">SEND</span>
                                </button>
                            </div>
                        @endif

                        <div class="h-full flex flex-col gap-2 overflow-y-scroll">

                            @foreach ($comment_tamu as $item)
                                <div class="flex flex-col ">
                                    <div class="bg-[#F3EAE5] flex flex-col gap-2 px-5 py-3">
                                        <div class="">
                                            <p class="text-[#572841] text-sm font-bold"
                                                style="font-family: spinnaker;">{{ $item->nama_tamu }}</p>
                                        </div>
                                        <div class="">
                                            <p class="text-[#572841] text-sm" style="font-family: spinnaker;">
                                                {{ $item->comment_tamu }}</p>
                                        </div>

                                    </div>

                                </div>
                            @endforeach


                        </div>




                    </div>

                </div>


            </div>

        </section>
        {{-- Wishes End --}}

        {{-- Section 4 --}}

        <div class="w-[100vw] h-[100vh] section">

            <video id='video' class="w-screen h-screen object-fill  hidden md:block" loop muted autoplay
                playsinline>
                <source src="{{ asset('videos/DESAIN 4.mp4') }}" type="video/mp4" />
            </video>





        </div>


        {{-- Section 4 --}}
    </div>
    {{-- Desktop --}}


    @if ($id_tamu !== '')
    {{-- Toolbar Action --}}

    <div id="toolbar" class="fixed bottom-0 bg-white bg-opacity-50 z-0 w-screen h-[11%] md:h-[10%] md:p-4 p-2 ">


        <h1 class="text-center md:text-xl text-md text-[#572841]  " style="font-family: spinnaker;">Apakah Anda Hadir
            ?</h1>
        <div class="flex justify-center ">

            <div class="">
                <a href="#hadirModal">
                    <button type="button"
                        class="focus:outline-none text-white w-20 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Iya</button>
                </a>
            </div>
            <div class="">
                <a href="#tidakModal">
                <button type="button"
                    class="focus:outline-none text-white w-20 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Tidak</button>
                </a>
            </div>

        </div>

    </div>

    {{-- Toolbar Action --}}
    @endif

    {{-- Modal Konfirmasi Datang (Iya) --}}
    <dialog id="hadirModal" class="modal z-30  modal-bottom sm:modal-middle w-full h-full">
        <form method="dialog" class="modal-box ">
            <h3 class="font-bold text-lg w-full">Hello! , {{ $trimmedUrlSegment ?? '' }} </h3>
            <p class="py-4">Berapa orang yang akan Hadir ?</p>
            <div class="">
                <input type="number" placeholder="1~99" wire:model="jumlah_tamu" class="input w-full  input-bordered">
            </div>
            <div class="modal-action">
                <!-- if there is a button in form, it will close the modal -->
                <a href="#" class="btn btn-success" wire:click="confirmed_accept()">Simpan</a>
                <a href="#" class="btn btn-info">Batal</a>
            </div>
        </form>
    </dialog>
    {{-- Modal Konfirmasi Datang (Iya) --}}

      {{-- Modal Konfirmasi Datang (Tidak) --}}
      <dialog id="tidakModal" class="modal z-30  modal-bottom sm:modal-middle w-full h-full">
        <form method="dialog" class="modal-box ">
            <h3 class="font-bold text-lg w-full">Hello! , {{ $trimmedUrlSegment ?? '' }} </h3>
            <p class="py-4">Apakah anda yakin tidak hadir?</p>

            <div class="modal-action ">
                <!-- if there is a button in form, it will close the modal -->
                <a href="#" class="btn btn-error w-100" wire:onclick="confirmed_decline()">Iya</a>
                <a href="#" class="btn btn-info w-100">Batal</a>
            </div>
        </form>
    </dialog>
    {{-- Modal Konfirmasi Datang (Tidak) --}}

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
