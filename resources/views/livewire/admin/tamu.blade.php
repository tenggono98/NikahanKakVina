<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="bg-base-300 p-3 rounded-md overflow-x-auto">


        <div class="">

            <div class="grid grid-cols-3 gap-3 ">
                <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Tambah</button></a>
                 </div>
                 <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Edit</button></a>
                 </div>
                 <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Delete</button></a>
                 </div>
            </div>

        @if (empty($tamu_array))

            <tr>
                <td colspan="6"><h5 class="text-center">Data Tamu Masih belum ada</h5> </td>

            </tr>

        @else

            <table id="table-tamu" class="datatables-table" wire:ignore.self>
                <thead>
                    <tr>
                        <th class="w-2 ">Check</th>
                        <th>Nama</th>
                        <th>No Tlp</th>
                        <th>Tipe Tamu</th>
                        <th>Hadir?</th>
                        <th>Invitation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>



                    @foreach ($tamu_array as $key => $row)
                    <tr>
                        @php
                            // $isi_pesan_WA = "Dear%2C%20".$row['nama_tamu']."%0A%0AGuess%20what%3F%20Arie%20and%20Vina%20are%20taking%20the%20plunge%20into%20the%20sea%20of%20eternal%20love%2C%20and%20they%20want%20YOU%20to%20be%20a%20part%20of%20their%20epic%20adventure%21%0A%0A%F0%9F%8E%89%20Save%20the%20Date%3A%20Friday%2C%2029th%20September%202023%0A%F0%9F%8C%9F%20Invitation%20Link%3A%20".url($row['link_tamu'])."%0A%0ASo%2C%20mark%20your%20calendar%2C%20grab%20your%20dancing%20shoes%2C%20and%20get%20ready%20to%20celebrate%20this%20match%20made%20in%20heaven%21%20Our%20joyful%20jamboree%20wouldn%27t%20be%20the%20same%20without%20your%20fantastic%20presence.%0A%0ALet%27s%20create%20unforgettable%20memories%20together%2C%20full%20of%20love%2C%20laughter%2C%20and%20maybe%20a%20little%20bit%20of%20crazy%20dancing.%20Your%20blessing%20and%20prayers%20are%20the%20icing%20on%20this%20matrimonial%20cake.%0A%0AStay%20awesome%20and%20stay%20healthy%2C%20because%20we%20can%27t%20wait%20to%20see%20you%20there%21%0A%0ACheers%20to%20love%20and%20laughter%2C%0AArie%20and%20Vina%20%0A%28because%20you%27re%20the%20life%20of%20the%20party%2C%C2%A0too%21%29%C2%A0%F0%9F%98%84";

                            $isi_pesan_WA = urlencode("Dear, ".$row['nama_tamu']."

Guess what? Arie and Vina are taking the plunge into the sea of eternal love, and they want YOU to be a part of their epic adventure!

🎉 Save the Date: Friday, 29th September 2023
🌟 Invitation Link: ".url($row['link_tamu'])."

So, mark your calendar, grab your dancing shoes, and get ready to celebrate this match made in heaven! Our joyful jamboree wouldn't be the same without your fantastic presence.

Let's create unforgettable memories together, full of love, laughter, and maybe a little bit of crazy dancing. Your blessing and prayers are the icing on this matrimonial cake.

Stay awesome and stay healthy, because we can't wait to see you there!

Cheers to love and laughter,
Arie and Vina
(because you're the life of the party, too!) 😄");



                        @endphp
                        <td><input type="checkbox" checked="checked" name="checklist_tamu.{{ $key ?? 0 }}" wire:model="checklist_tamu.{{ $key ?? 0 }}" class="checkbox"  /></td>
                        <td>{{ $row['nama_tamu'] }}</td>
                        <td>{{ $row['no_tlp_tamu'] }}</td>
                        <td>{{ $row['type_tamu'] }}</td>
                        <td>

                            @if($row['hadir'] == 'false')
                            <div class="badge badge-secondary">Belum Respond</div>
                            @elseif($row['hadir'] == 'Iya')
                            <div class="badge badge-primary">Iya</div>
                            @else
                            <div class="badge badge-secondary">Tidak</div>
                            @endif

                        </td>
                        <td>

                            <div class="flex gap-3">
                                <div class="">
                                    <button class="btn btn-secondary w-full" wire:click="copy()" onclick="copyLink('{{ url($row['link_tamu']) }}') ">Copy Link</button>
                                </div>
                                <div class="">
                                    <a class="btn btn-accent w-full" target="_blank" href="https://api.whatsapp.com/send?phone={{ preg_replace('/0/', '+62', $row['no_tlp_tamu'], 1) }}&text={{ $isi_pesan_WA  }}" >Send WA</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex gap-3">
                                <div class="flex-auto">
                                    <button class="btn btn-info w-full ">Edit</button>
                                </div>
                                <div class="flex-auto">
                                    <button class="btn btn-error w-full "  data-confirm-delete="true">Del</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach






                </tbody>

            </table>

            @endif
        </div>






    </div>


    <div class="modal" id="tambah-tamu-modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <div class="flex justify-between">
                <div class="">
                    <h3 class="font-bold text-lg">Tambah Tamu Anda :)</h3>
                </div>
                <div class="">
                    <svg wire:click="addTamu()" fill="none" class="w-9 h-a cursor-pointer" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                      </svg>
                </div>
            </div>







            @for ($i = 0; $i < $tamu; $i++)
            <div class="bg-base-200 p-4 rounded-md my-3">
                <div class="form-control w-full ">

                    <div class="flex gap-3">
                        <div class="flex-auto">
                            <label class="label">
                                <span class="label-text">Nama Tamu</span>
                            </label>
                            <input type="text" placeholder="XXXXX & XXXXX" wire:model="nama_tamu.{{$i}}" class="input input-bordered w-full " />
                        </div>
                        <div class="flex-auto">
                            <label class="label">
                                <span class="label-text">No Tlp</span>
                            </label>
                            <input type="number" placeholder="08XXXXXX" wire:model="no_tlp_tamu.{{$i}}" class="input input-bordered w-full " />
                        </div>
                        <div class="flex-auto">
                            <label class="label">
                                <span class="label-text">Type</span>
                            </label>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="type_tamu.{{$i}}" wire:model="type_tamu.{{$i}}"  class="radio checked:bg-blue-500"  value="Holy & Wedding" />
                                  <span class="label-text"  >Holy & Wedding</span>
                                </label>
                              </div>
                              <div class="form-control">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="type_tamu.{{$i}}" wire:model="type_tamu.{{$i}}"  class="radio checked:bg-blue-500 " value="Wedding"  />
                                  <span class="label-text" >Wedding</span>
                                </label>
                              </div>
                        </div>
                    </div>



                </div>
            </div>

            @endfor









        <div class="modal-action">
            <a href="#" class="btn">Cancel</a>
        <a  class="btn" href="#" wire:click="save()">Save</a>
        </div>
        </div>
    </div>


    <script>
        function copyLink(data) {


            // Copy the text inside the text field
            navigator.clipboard.writeText(data);

            // // Alert the copied text
            // alert("Copied the text: " + copyText.value);
        }
    </script>
</div>
