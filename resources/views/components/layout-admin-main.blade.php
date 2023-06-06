<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $page_name }}</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @livewireStyles
</head>

<body >

    <div class="flex bg-base-300 p-3 font-semibold md:hidden justify-between w-full ">

        <div class="">
            <h1>System Undangan & Tamu</h1>
            <small>Made By.Teng</small>
        </div>
        <div class="">

            <div class="" tabindex="0">
                <svg id="mobile-menu-btn" fill="none" stroke="white" class="h-10 w-auto cursor-pointer"
                    stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>

            </div>






        </div>
    </div>
    <div class="p-3 bg-base-300 hidden" id="mobile-menu-content">
        <ul class="menu mt-3 ">
            <li><a class="@if(Request::segment(2) == 'beranda' ) active @endif" href="{{ route('admin.beranda') }}">Beranda</a></li>
            <li><a class="@if(Request::segment(2) == 'tamu' ) active @endif" href="{{ route('admin.tamu') }}">Tamu</a></li>
            <li><a>Kedatangan</a></li>
            <li><a>Gallery</a></li>
        </ul>
    </div>



    <div class="flex gap-3 h-[100vh]  ">
        <div class="text-base bg-base-300 p-3 w-[9vw] min-w-min rounded-r-lg hidden md:block ">

            <div class="md:grid  font-semibold  ">
                <div class="">
                    <h1>System Undangan & Tamu</h1>
                    <small>Made By.Teng</small>
                </div>

                <ul class="menu mt-3 ">
                    <li><a class="@if(Request::segment(2) == 'beranda' ) active @endif" href="{{ route('admin.beranda') }}">Beranda</a></li>
                     <li><a class="@if(Request::segment(2) == 'tamu' ) active @endif" href="{{ route('admin.tamu') }}">Tamu</a></li>
                    <li><a>Kedatangan</a></li>
                    <li><a>Gallery</a></li>
                </ul>

            </div>

        </div>
        <div class="flex-auto py-2 px-2 md:px-0 overflow-x-scroll ">
            <div class=" rounded-lg text-base bg-base-300 p-3 mb-3 ">

                <h1 class="font-semibold text-4xl">{{ $page_title ?? '' }}</h1>
            </div>

            {{ $slot }}
        </div>

    </div>


    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="{{ asset('js/main.js')}}"></script>

    <x-livewire-alert::scripts />
</body>

</html>
