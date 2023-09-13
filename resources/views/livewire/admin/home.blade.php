<div>
    {{-- Be like water. --}}




    <div class=" rounded-lg text-base bg-base-300 p-3">

        <div class="grid  grid-cols-1 sm:grid-cols-4 gap-3 mb-3">


            <div class="bg-base-100 p-3 rounded-lg">
                <h1 class="font-semibold text-3xl">Total Tamu</h1>
                <hr class="my-2">
                <p class="font-bold text-5xl">{{ $total_tamu ?? '0' }} Tamu</p>
            </div>

            <div class="bg-base-100 p-3 rounded-lg">
                <h1 class="font-semibold text-3xl">Total Tamu Yang Datang</h1>
                <hr class="my-2">
                <p class="font-bold text-5xl">{{ $total_tamu_datang ?? '0' }} Tamu</p>
            </div>

            <div class="bg-base-100 p-3 rounded-lg">
                <h1 class="font-semibold text-3xl">Total Jumlah Tamu Yang Datang</h1>
                <hr class="my-2">
                <p class="font-bold text-5xl">{{ $total_jumlah_tamu ?? '0' }} Tamu</p>
            </div>

            <div class="bg-base-100 p-3 rounded-lg">
                <h1 class="font-semibold text-3xl">Total Tamu Yang Tidak Datang</h1>
                <hr class="my-2">
                <p class="font-bold text-5xl">{{ $total_tamu_tidak_datang ?? '0' }} Tamu</p>
            </div>
            <div class="bg-base-100 p-3 rounded-lg">
                <h1 class="font-semibold text-3xl">Total Tamu Yang Belum Respond</h1>
                <hr class="my-2">
                <p class="font-bold text-5xl">{{ $total_tamu_belum_respond ?? '0' }} Tamu</p>
            </div>

            <div class="bg-base-100 p-3 rounded-lg">
                <h1 class="font-semibold text-3xl">Total Tamu Yang Belum Buka Link</h1>
                <hr class="my-2">
                <p class="font-bold text-5xl">{{ $total_tamu_belum_buka_link ?? '0' }} Tamu</p>
            </div>


        </div>


        <div class="text-base bg-base-100 p-3 w-full  rounded-lg">
            <h1 class="font-semibold text-3xl">List Comment Tamu</h1>
            <hr class="my-2">

            @foreach ($comment_tamu as $item)
            <div class="py-2">
                <p class="font-bold text-3xl">"{{ $item->comment_tamu }}"</p>
                <small>By. {{ $item->nama_tamu }}</small>
                <div class="py-2 ">
                    {{--  --}}
                    <div class="">
                        <button class="btn {{ ($item->status == 'true')? 'btn-secondary' : 'btn-accent' }} " wire:click="toggleComment('{{ $item->id }}')">{{ ($item->status == 'true')? 'Hide' : 'Show' }}</button>
                        <button class="btn btn-error" wire:click="deleteComment('{{ $item->id }}')">Delete</button>
                    </div>
                </div>
            </div>

            @endforeach


        </div>

    </div>




</div>
