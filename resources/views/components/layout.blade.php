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
    <title>Wedding invitation of Arie and Vina</title>
    @livewireStyles
</head>
<body onload="playMusic();">

    <div class="audio-container">
        <div class="audio-disk" id="audio-disk"></div>
        <div class="audio-controls" id="audio-controls" onclick="toggleAudio()">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-[#b21e3a]" viewBox="0 0 48 48">
                <path id="play-icon" d="M16 10v28l22-14z" style="display:none"/>
                <path id="pause-icon" d="M14 14h8v20h-8zm12 0h8v20h-8z"/>
            </svg>
        </div>
        <audio id="audio" autoplay src="{{ asset('music/The Emotions  Best of My Love Audio_320kbps.mp3') }}"></audio>
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

        audio.addEventListener('canplay', function() {
            audio.play();
            audioDisk.style.animationPlayState = 'running';
        });
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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/soundmanager2/V2.97a.20150601/script/soundmanager2.min.js" integrity="sha512-xZLSIrUeu9Y2MWViSoMbcCK+Qk7VWgKdWd5QDO+Jb/csaxcnUIt5rm7xZDsxpIJeRf0IwUptx3+j2BiyAxBjiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

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
