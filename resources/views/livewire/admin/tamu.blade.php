<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="bg-base-300 p-3 rounded-md overflow-x-auto">


        <div class="">

            <div class="grid grid-cols-4 gap-3 ">
                <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Tambah</button></a>
                 </div>
                 <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Edit</button></a>
                 </div>
                 <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Copy</button></a>
                 </div>
                 <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Delete</button></a>
                 </div>
            </div>

            <table id="table-tamu" class="datatables-table" wire:ignore.self>
                <thead>
                    <tr>
                        <th class="w-2 ">Check</th>
                        <th>Nama</th>
                        <th>No Tlp</th>
                        <th>Hadir?</th>
                        <th>Invitation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" checked="checked" wire:model="checklist_tamu" class="checkbox"  /></td>
                        <td>Alfonso & May</td>
                        <td>085609022744</td>
                        <td><div class="badge badge-primary">Iya</div></td>
                        <td><button class="btn btn-secondary w-full" wire:click="copy()" onclick="copyLink('{{ 'Coba Copy' }}')">Copy</button></td>
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
                    <tr>
                        <td><input type="checkbox" checked="checked" wire:model="checklist_tamu" class="checkbox" /></td>
                        <td>Alfonso & May</td>
                        <td>085609022744</td>
                        <td><div class="badge badge-secondary">Tidak</div></td>
                        <td><button class="btn btn-secondary w-full" wire:click="copy()" onclick="copyLink('{{ 'Coba Copy' }}')">Copy</button></td>
                        <td>
                            <div class="flex gap-3">
                                <div class="flex-auto">
                                    <button class="btn btn-info w-full ">Edit</button>
                                </div>
                                <div class="flex-auto">
                                    <button class="btn btn-error w-full " wire:click="del()" >Del</button>
                                </div>
                            </div>
                        </td>
                    </tr>


                </tbody>

            </table>
        </div>






    </div>


    <div class="modal" id="tambah-tamu-modal">
        <div class="modal-box">
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
                            <input type="text" placeholder="Type here" wire:model="nama_tamu.{{$i}}" class="input input-bordered w-full " />
                        </div>
                        <div class="flex-auto">
                            <label class="label">
                                <span class="label-text">No Tlp</span>
                            </label>
                            <input type="number" placeholder="Type here" wire:model="no_tlp_tamu.{{$i}}" class="input input-bordered w-full " />
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
