<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="bg-base-300 p-3 rounded-md overflow-x-auto">


        <div class="">

            <div class="grid grid-cols-3 gap-3 ">
                <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="resetVal()" >Tambah</button></a>
                 </div>
                 <div class="my-5">
                    <a href="#tambah-tamu-modal"> <button class="btn w-full" wire:click="edit_bulk()" >Edit</button></a>
                 </div>
                 <div class="my-5">
                     <button class="btn w-full" wire:click="delBulk()" >Delete</button>
                 </div>
                 <div class="my-5">
                     <button class="btn w-full" wire:click="generateLinkTamu()" >Generate Link Tamu</button>
                 </div>

                 <div class="my-5">
                    <button class="btn w-full" wire:click="exportExcel()" >Export Excel</button>
                </div>
                 <div class="my-5">
                    <a href="#tambah-buat-undangan" class="btn w-full" wire:click="resetVal()"> Buat Undangan</a>
                 </div>
            </div>


            <div class="mb-3 flex gap-3">
                <div class="">
                    <input type="text" class="input input-bordered" placeholder="Nama Tamu" wire:model="search_nama_tamu">
                </div>
                <div class="">
                    <select name="" id="" class="input input-bordered" wire:model="search_tipe_tamu">
                        <option value="">Pilih Tipe Tamu</option>
                        <option value="Holy & Wedding">Holy & Wedding</option>
                        <option value="Holy">Holy</option>
                    </select>
                </div>
                <div class="">
                    <select name="" id="" class="input input-bordered" wire:model="search_hadir_tamu">
                        <option value="">Pilih Tamu Yang Hadir</option>
                        <option value="FALSE">Belum Respond</option>
                        <option value="Iya">Iya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                <div class="">
                    <select name="" id="" class="input input-bordered" wire:model="search_buka_link">
                        <option value="">Pilih Tamu Yang Sudah Buka Link</option>
                        <option value="true">Sudah</option>
                        <option value="FALSE">Belum</option>
                    </select>
                </div>



            </div>

        @if (empty($tamu_array))

            <tr>
                <td colspan="6"><h5 class="text-center">Data Tamu Masih belum ada</h5> </td>

            </tr>

        @else

        <div class="w-full overflow-scroll">


            <table id="" class="table w-full" wire:ignore.self>
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>Nama</th>
                        <th>No Tlp</th>
                        <th>Tipe Tamu</th>
                        <th>Hadir?</th>
                        <th>Jumlah Tamu</th>
                        <th>Sudah Buka Link?</th>
                        <th>Invitation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>



                    @foreach ($tamu_array as $key => $row)
                    <tr>
                        @php


                            $isi_pesan_WA = urlencode("Dear, ".$row->nama_tamu."

Guess what? Arie and Vina are taking the plunge into the sea of eternal love, and they want YOU to be a part of their epic adventure!

🎉 Save the Date: Friday, 29th September 2023
🌟 Invitation Link: ".url($row->link_tamu ?? '')."

So, mark your calendar, grab your dancing shoes, and get ready to celebrate this match made in heaven! Our joyful jamboree wouldn't be the same without your fantastic presence.

Let's create unforgettable memories together, full of love, laughter, and maybe a little bit of crazy dancing. Your blessing and prayers are the icing on this matrimonial cake.

Stay awesome and stay healthy, because we can't wait to see you there!

Cheers to love and laughter,
Arie and Vina
(because you're the life of the party, too!) 😄");



                        @endphp
                        <td><input type="checkbox"  name="checklist_tamu" wire:model="checklist_tamu" class="checkbox" value="{{ $row->id }}"  /></td>
                        <td>{{ $row->nama_tamu }}</td>
                        <td>{{ $row->no_tlp_tamu }}</td>
                        <td>{{ $row->type_tamu }}</td>
                        <td>

                            @if($row->hadir == 'FALSE')
                            <div class="badge badge-secondary py-6 md:py-0">Belum Respond</div>
                            @elseif($row->hadir == 'Iya')
                            <div class="badge badge-primary">Iya</div>
                            @else
                            <div class="badge badge-secondary">Tidak</div>
                            @endif

                        </td>
                        <td>
                            {{ $row->jumlah_tamu  }}
                        </td>
                        <td>
                            @if($row->visit_website_status == 'FALSE')
                            <div class="badge badge-primary">Belum</div>
                            @else
                            <div class="badge badge-secondary">Iya</div>

                            @endif
                        </td>

                        <td>

                            <div class="flex gap-3">
                                <div class="">
                                    <button class="btn btn-secondary w-full" wire:click="copy()" onclick="copyLink('{{ url($row->link_tamu ?? '') }}') ">Copy Link</button>
                                </div>
                                @if($row->no_tlp_tamu !== null)
                                <div class="">
                                    <a class="btn btn-accent w-full" target="_blank" href="https://api.whatsapp.com/send?phone={{'+'.$row->no_tlp_tamu}}&text={{ $isi_pesan_WA  }}" >Send WA</a>
                                </div>
                                @else
                                <div class="">
                                    <a class="btn btn-accent w-full" data-action="share/whatsapp/share"  href="whatsapp://send?text={{ $isi_pesan_WA  }}" >Share WA</a>
                                </div>
                                @endif
                            </div>
                        </td>

                        <td>
                            <div class="flex gap-3">
                                <div class="flex-auto">
                                    <a href="#tambah-tamu-modal" class="btn btn-info w-full " wire:click="edit('{{ $row->id }}')">Edit</a>
                                </div>
                                <div class="flex-auto">
                                    <button class="btn btn-error w-full "  data-confirm-delete="true" wire:click="del('{{ $row->nama_tamu }}','{{ $row->id }}')">Del</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach






                </tbody>

            </table>
        </div>
        <div class="mt-5">
        {{ $tamu_array->links() }}

        </div>

            @endif
        </div>






    </div>


    <div class="modal" id="tambah-tamu-modal" >
        <div class="modal-box w-11/12 max-w-5xl">
            <div class="flex justify-between">
                <div class="">
                    <h3 class="font-bold text-lg"> {{ ($is_edit == false)? 'Tambah Tamu Anda :)' : 'Edit Tamu Anda :)' }}</h3>
                </div>
                @if($is_add_tamu == true)
                <div class="">
                    <svg wire:click="addTamu()" fill="none" class="w-9 h-a cursor-pointer" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                      </svg>
                </div>
                @endif
            </div>



            @if($is_edit == true)

                @if($id_edit)

                @for ($i = 0 ; $i < $tamu_input; $i++)
                <div class="bg-base-200 p-4 rounded-md my-3">
                    <div class="form-control w-full ">

                        <div class="flex md:flex-row flex-col gap-3">
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
                                <input type="number" placeholder="[Kode Negara]XXXXXX" wire:model="no_tlp_tamu.{{$i}}" class="input input-bordered w-full " />
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
                                        <input type="radio" name="type_tamu.{{$i}}" wire:model="type_tamu.{{$i}}"  class="radio checked:bg-blue-500 " value="Holy"  />
                                    <span class="label-text" >Holy</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endfor

                @else
                    @for ($i = 0 ; $i < $tamu_input; $i++)
                    <div class="bg-base-200 p-4 rounded-md my-3">
                        <div class="form-control w-full ">

                            <div class="flex md:flex-row flex-col gap-3">
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
                                    <input type="number" placeholder="[Kode Negara]XXXXXX" wire:model="no_tlp_tamu.{{$i}}" class="input input-bordered w-full " />
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
                                            <input type="radio" name="type_tamu.{{$i}}" wire:model="type_tamu.{{$i}}"  class="radio checked:bg-blue-500 " value="Holy"  />
                                        <span class="label-text" >Holy</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endfor
                @endif


            @else

            @for ($i = 0; $i < $tamu_input; $i++)
                <div class="bg-base-200 p-4 rounded-md my-3">
                    <div class="form-control w-full ">

                        <div class="flex md:flex-row flex-col gap-3">
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
                                <input type="number" placeholder="[Kode Negara]XXXXXX" wire:model="no_tlp_tamu.{{$i}}" class="input input-bordered w-full " />
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
                                        <input type="radio" name="type_tamu.{{$i}}" wire:model="type_tamu.{{$i}}"  class="radio checked:bg-blue-500 " value="Holy"  />
                                    <span class="label-text" >Holy</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endfor

            @endif











        <div class="modal-action">
            <a href="#" class="btn">Cancel</a>
        <a  class="btn" href="#" wire:click="save()">Save</a>
        </div>
        </div>
    </div>


    <div class="modal" id="tambah-buat-undangan">
        <div class="modal-box w-11/12 max-w-5xl">
            <div class="flex justify-between">
                <div class="">
                    <h3 class="font-bold text-lg">Buat Undangan Anda :)</h3>
                </div>
                <div class="">
                    <svg wire:click="addTamu()" fill="none" class="w-9 h-a cursor-pointer" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                      </svg>
                </div>
            </div>








            <div class="bg-base-200 p-4 rounded-md my-3">
                <div class="form-control w-full ">

                    <div class="flex md:flex-row flex-col gap-3">
                        <div class="flex-auto">
                            <label class="label">
                                <span class="label-text">Nama Tamu</span>
                            </label>
                            <input type="text" placeholder="XXXXX & XXXXX" wire:model="generate_nama_tamu" class="input input-bordered w-full " />
                        </div>
                        <div class="flex-auto">
                            <label class="label">
                                <span class="label-text">Type</span>
                            </label>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="generate_type_tamu" wire:model="generate_type_tamu"  class="radio checked:bg-blue-500"  value="Holy & Wedding" />
                                  <span class="label-text"  >Holy & Wedding</span>
                                </label>
                              </div>
                              <div class="form-control">
                                <label class="label cursor-pointer">
                                    <input type="radio" name="generate_type_tamu" wire:model="generate_type_tamu"  class="radio checked:bg-blue-500 " value="Holy"  />
                                  <span class="label-text" >Holy</span>
                                </label>
                              </div>
                        </div>
                    </div>



                </div>
            </div>











        <div class="modal-action">
            <a href="#" class="btn">Cancel</a>
        <a  class="btn" href="#" wire:click="generateUndangan()">Save</a>
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
