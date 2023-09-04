<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Arie and Vina's Wedding Invitation" />
    <meta property="og:title" content="Wedding invitation of Arie and Vina" />
    <meta property="og:url" content="https://arievinawedding.site/" />
    <meta property="og:description" content="Arie and Vina's Wedding Invitation" />
    <meta property="og:image" content="{{ asset('img/logo_nikaj.jpg') }}" />
    <link rel="icon" href="{{ asset('img/logo_nikaj.jpg') }}" type="image/icon type">
    <style>
        @font-face{
            font-family: spinnaker;
            src:url({{ asset('font/Spinnaker-Regular.ttf')}})
        }
        @font-face{
            font-family: geovano;
            font-weight: 100;
            src:url({{ asset('font/Geovano-Sans-Regular.otf')}})
        }

        @font-face{
            font-family: geovano;
            font-weight: 100;
            src:url({{ asset('font/Geovano Sans Regular.otf')}})
        }

        .audio-container {
            position: fixed;
            display: inline-block;
            z-index: 30;
        }

        .audio-disk {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: conic-gradient(#ffffff, #ffffff 10%, transparent 10%);
            background-size: 100% 100%;
            animation: rotate 2s linear infinite paused;
        }

        .audio-controls {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }

        @keyframes rotate {
            to {
                transform: rotate(360deg);
            }
        }

    </style>

    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.14.2/simple-lightbox.min.css" integrity="sha512-FaAQujRxLMvw+BkmGN3w7u9EdQQr1t0vQoY8KDh09+6SFaWSTe+KrT8oCWg25X91hytm5c5BTmiSGQejkraaZg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="{{ asset('css/simple-lightbox.css') }}">
    <title>Wedding invitation of Arie and Vina</title>
    @livewireStyles
</head>
<body >

    <div class="audio-container">
        <div class="audio-disk" id="audio-disk"></div>
        <div class="audio-controls" id="audio-controls" onclick="toggleAudio()">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-[#b21e3a]" viewBox="0 0 48 48">
                <path id="play-icon" d="M16 10v28l22-14z" />
                <path id="pause-icon" d="M14 14h8v20h-8zm12 0h8v20h-8z" style="display:none"/>
            </svg>
        </div>
        <audio id="audio"  src="{{ asset('music/The Emotions  Best of My Love Audio_320kbps.mp3') }}"></audio>
     </div>



    {{ $slot }}

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    <script>
        var audio = document.getElementById('audio');
        var audioDisk = document.getElementById('audio-disk');
        var playIcon = document.getElementById('play-icon');
        var pauseIcon = document.getElementById('pause-icon');


        // if (audio.paused) {
        //         audio.play();
        //         audioDisk.style.animationPlayState = 'running';
        //         playIcon.style.display = 'none';
        //         pauseIcon.style.display = 'block';
        // }

        function toggleAudio() {
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.14.2/simple-lightbox.jquery.min.js" integrity="sha512-/4kQE5RJQYHRhUiK+CZS8UhaJTnLmQkDuf8lOhiP2xLdjthA/rm0VqqWjcyelIx+NDyNHFmtqvuIgOFQnI34WA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.1.3/simple-lightbox.jquery.min.js"></script> --}}

    <script src="{{ asset('js/simple-lightbox.jquery.js') }}"></script>

<script>
    $(document).ready(function(){
        var lightbox = $('.gallery a').simpleLightbox({ /* options */ });


    });
</script>


<script>


      function copyText(data) {


        // Copy the text inside the text field
        navigator.clipboard.writeText(data);

        // // Alert the copied text
        // alert("Copied the text: " + copyText.value);
        }

        // function playMusic(){
        //     var mySound = soundManager.createSound({
        //     url: '{{ asset('music/The Emotions  Best of My Love Audio_320kbps.mp3') }}'
        //     });

        //     // ...and play it
        //     mySound.play();
        // }
</script>


</body>
</html>
