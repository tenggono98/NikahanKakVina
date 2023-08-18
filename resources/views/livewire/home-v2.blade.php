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
            display: flex; /* Ensure sections are displayed in a row */
            overflow-x: auto; /* Enable horizontal scrolling for sections */
            scroll-snap-type: x mandatory; /* Enable snap scrolling along the x-axis */
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
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white */
            z-index: 9997; /* Place the overlay below the loading message */
        }

        .video-section{
            scroll-snap-align: start;
        }

        .sections-container {
            display: flex;
            flex-direction: column;
            height: 100vh; /* Ensure full viewport height */
            overflow-y: scroll; /* Enable scrolling only for sections */
            scroll-snap-type: y mandatory;
        }

        html, body {
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

        <div class="loading-overlay"></div>

        <div id="loading">
            <div class="spinner"></div>

        </div>


        <div class="sections-container">



    {{-- Section 1 --}}

    <div class="w-[100vw] h-[100vh] section ">

        <video id='video'  class="w-screen h-screen object-fill  hidden md:block"loop muted autoplay>
            <source src="{{ asset('videos/DESAIN 1.mp4') }}" type="video/mp4" />
        </video>

        <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted>
            <source src="{{ asset('videos/FAW DESAIN 1 HP.mp4') }}" type="video/mp4" />
        </video>


    </div>


    {{-- Section 1 --}}

      {{-- Section 2 --}}

      <div class="w-[100vw] h-[100vh] section">

        <video id='video'  class="w-screen h-screen object-fill  hidden md:block"loop muted autoplay>
            <source src="{{ asset('videos/DESAIN 2.mp4') }}" type="video/mp4" />
        </video>

        <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted>
            <source src="{{ asset('videos/FAW DESAIN 2 HP.mp4') }}" type="video/mp4" />
        </video>


    </div>


    {{-- Section 2 --}}

     {{-- Section 3 --}}

     <div class="w-[100vw] h-[100vh] section">

        <video id='video'  class="w-screen h-screen object-fill  hidden md:block"loop muted autoplay>
            <source src="{{ asset('videos/DESAIN 3.mp4') }}" type="video/mp4" />
        </video>

        <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted>
            <source src="{{ asset('videos/FAW DESAIN 3 HP.mp4') }}" type="video/mp4" />
        </video>



    </div>


    {{-- Section 3 --}}

     {{-- Wishes Begin --}}
     <section id="wishes" class="w-[100vw] h-max section">
        <div class="w-screen h-max  pt-10 pb-10 px-3 md:pt-0  md:px-0 md:pb-0  bg-fixed " style="background-image: url('{{asset('img/BACKGROUND.jpg')}}')">

          <div class="w-screen h-screen flex flex-col  justify-start items-center">
          <div class="md:mt-5 md:mb-8">
              <img src="{{asset('img/Asset 5.svg')}}" class="h-[10vh] md:h-[10vh] w-auto mx-auto " alt="">
              <p class="md:-mt-5 text-center text-5xl text-[#572841] " style="font-family: geovano;">WISHES</p>
              <p class="text-center text-md text-[#572841]  " style="font-family: spinnaker;">Sending prayers for the Bride & Groom</p>
          </div>


          <div class="flex flex-col gap-5 bg-[#E8895B] py-10 px-16 w-[50vw]">

              <div class="w-full">
                  <input type="text" class="w-full p-5 bg-[#F3EAE5] text-[#572841] font-bold text-md  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50" style="font-family:spinnaker" placeholder="NAME" >


              </div>
              <div class="w-full">

                  <textarea class="w-full p-5 bg-[#F3EAE5] text-[#572841] font-bold text-md  placeholder:text-[#572841] placeholder:font-bold placeholder:opacity-50" style="font-family:spinnaker" name="" id="" cols="20" rows="3" placeholder="MESSAGE"></textarea>
              </div>

              <div class="mx-auto">
                  <button class="btn mx-auto  rounded-none text-[#572841] border-none bg-[#F3EAE5] font-bold text-xl  " style="font-family:spinnaker">
                     <span class="opacity-50">SEND</span>
                  </button>
              </div>

              <div class="">
                  <div class="h-auto max-h-48 flex flex-col gap-2 overflow-y-scroll">

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

     {{-- Section 4 --}}

     <div class="w-[100vw] h-[100vh] section">

        <video id='video'  class="w-screen h-screen object-fill  hidden md:block"loop muted autoplay>
            <source src="{{ asset('videos/DESAIN 4.mp4') }}" type="video/mp4" />
        </video>

        <video class="w-screen h-screen block object-fill md:hidden" autoplay loop muted>
            <source src="{{ asset('videos/FAW DESAIN 4 HP.mp4') }}" type="video/mp4" />
        </video>



    </div>


    {{-- Section 4 --}}
</div>

    <script>
         document.addEventListener("DOMContentLoaded", function () {
            const videos = document.querySelectorAll("video");
            let videosLoaded = 0;

            function checkVideosLoaded() {
                videosLoaded++;
                if (videosLoaded === videos.length) {
                    // All videos are loaded, hide the loading elements
                    document.getElementById("loading").style.display = "none";
                    document.querySelector(".loading-overlay").style.display = "none";
                }
            }

            videos.forEach(function (video) {
                video.addEventListener("loadeddata", checkVideosLoaded);
                video.addEventListener("error", checkVideosLoaded); // Handle errors too
            });

            // Also hide overlay if all videos are already loaded when the page loads
            if (videos.length === 0) {
                document.querySelector(".loading-overlay").style.display = "none";
            }
        });

        const sectionsContainer = document.querySelector('.sections-container');
    const sections = document.querySelectorAll('.section');

    sectionsContainer.addEventListener('wheel', (event) => {
      // Calculate the current visible section
      const currentSectionIndex = Math.floor(sectionsContainer.scrollTop / window.innerHeight);
      let nextSectionIndex = currentSectionIndex + (event.deltaY > 0 ? 1 : -1);

      // Ensure nextSectionIndex is within valid range
      nextSectionIndex = Math.max(0, Math.min(sections.length - 1, nextSectionIndex));

      // Scroll to the next section
      sections[nextSectionIndex].scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      });

      event.preventDefault(); // Prevent default scrolling behavior
    });
    </script>
</div>
