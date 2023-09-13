<?php

namespace App\Http\Livewire\Admin;

use App\Models\MTamu;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rap2hpoutre\FastExcel\FastExcel;

class Tamu extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $checklist_tamu = [], $nama_tamu = [] , $no_tlp_tamu = [] , $type_tamu = [] , $link_tamu = [];
    public $tamu_input = 1;
    public $generate_nama_tamu , $generate_type_tamu;
    public $is_edit = false , $is_add_tamu = true , $id_del , $id_edit;

    public $search_nama_tamu , $search_tipe_tamu , $search_hadir_tamu, $search_buka_link;

    public $exportData;


    protected $listeners = [
        'confirmedDelete',
        'confirmedDeleteBulk'
    ];



    public function render()
    {
        $page_title = 'Tamu Undangan';
        $page_name = 'Tamu';

        $tamu = MTamu::orderBy('id');

        if($this->search_nama_tamu !== null && $this->search_nama_tamu !== '')
            $tamu->where('nama_tamu', 'LIKE', '%' . $this->search_nama_tamu . '%');
        if($this->search_tipe_tamu !== null && $this->search_tipe_tamu !== '')
            $tamu->where('type_tamu', $this->search_tipe_tamu );
        if($this->search_hadir_tamu !== null && $this->search_hadir_tamu !== '')
            $tamu->where('hadir', $this->search_hadir_tamu );
        if($this->search_buka_link !== null && $this->search_buka_link !== '')
            $tamu->where('visit_website_status', $this->search_buka_link );

        $tamu_export = MTamu::orderBy('id');


        $tamu_array = $tamu->paginate(50);
        $this->exportData = $tamu_export->get();

        return view('livewire.admin.tamu',compact('page_title','page_name','tamu_array'))->layout('components.layout-admin-main',compact('page_title','page_name'));
    }

    public function exportExcel(){


    return response()->streamDownload(function () {


             return  (new FastExcel($this->exportData))->export('php://output', function ($data) {
        if($data->hadir == 'FALSE')
        $hadir='Belum Respond';
        elseif($data->hadir == 'Iya')
        $hadir = 'Iya';
        else
        $hadir = 'Tidak';

        if($data->visit_website_status == 'FALSE')
        $visit = 'Belum';
        else
        $visit = 'Iya';

            return [
                'Nama' => $data->nama_tamu ?? '',
                'No Telp' => $data->no_tlp_tamu ?? '',
                'Tipe Tamu' => $data->type_tamu ?? '',
                'Hadir' => $hadir ?? '' ,
                'Visit' => $visit ?? '',
                'Jumlah Tamu' => $data->jumlah_tamu ?? ''

            ];
        });
      }, sprintf('tamu-%s.xlsx', date('Y-m-d')));
    }

    public function resetData()
    {
        $this->nama_tamu = [];
        $this->no_tlp_tamu = [];
        $this->type_tamu = [];
        $this->link_tamu = '';
        $this->checklist_tamu = [];
        $this->reset();
    }

    public function addTamu(){
        $this->tamu_input++;

    }

    public function resetVal(){
        $this->tamu_input = 1;
        $this->is_edit = false;
        $this->resetData();
    }


    public function copy()
    {
        $this->alert('success', 'Link sudah di copy ke klipboard!');
    }

    public function edit_bulk()
    {

        $this->is_add_tamu = false;
        $this->is_edit = true;
        $this->tamu_input = count($this->checklist_tamu);
            foreach($this->checklist_tamu as $i => $value){
                $tamu =  MTamu::find($value);
                $this->nama_tamu[$i] = $tamu->nama_tamu;
                $this->no_tlp_tamu[$i] = $tamu->no_tlp_tamu;
                $this->type_tamu[$i] = $tamu->type_tamu;
        }


    }

    public function edit($value)
    {
        $this->is_add_tamu = false;
        $this->is_edit = true;
        $this->id_edit = $value;
        $tamu =  MTamu::find($value);
        $this->nama_tamu[0] = $tamu->nama_tamu;
        $this->no_tlp_tamu[0] = $tamu->no_tlp_tamu;
        $this->type_tamu[0] = $tamu->type_tamu;
    }

    public function del($nama = null,$id_del)
    {
        $this->id_del = $id_del;

        $this->alert('warning', 'Anda Yakin Menghapus <b>'. $nama.'</b>', [
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Submit',
            'denyButtonText' => 'Deny',
            'position' => 'center',
            'toast' => false,
            'onConfirmed' => 'confirmedDelete'
        ]);
    }

    public function confirmedDelete()
    {
        $tamu =  MTamu::find($this->id_del);
        $tamu->delete();
        $this->alert('warning', 'Data Sudah dihapus');
        $this->id_del = null;
        $this->resetVal();
    }

    public function delBulk()
    {

        $this->alert('warning', 'Anda Yakin Menghapus sebanyak <b>'.count($this->checklist_tamu).'</b> tamu', [
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Submit',
            'denyButtonText' => 'Deny',
            'position' => 'center',
            'toast' => false,
            'onConfirmed' => 'confirmedDeleteBulk'
        ]);
    }

    public function confirmedDeleteBulk()
    {

        foreach($this->checklist_tamu as $i => $value){
            $tamu = MTamu::find($value);
            $tamu->delete();
        }

        $this->alert('warning', 'Data Tamu Sudah dihapus');
        $this->resetVal();

    }


    public function save(){
        $this->validate([
            'nama_tamu.*' => 'required',
            'type_tamu.*' => 'required',
        ]);

            if($this->is_edit == false){
                foreach($this->nama_tamu as $i => $value){

                    $tamu = new MTamu;
                    $id = $tamu->getNextId();
                    $tamu->nama_tamu = str_replace('/','&',$this->nama_tamu[$i]);
                    $tamu->no_tlp_tamu = $this->no_tlp_tamu[$i];
                    $tamu->type_tamu = $this->type_tamu[$i];
                    $tamu->link_tamu = urlencode($this->nama_tamu[$i].'-'.$id);
                    $tamu->visit_website_status = "FALSE";
                    $tamu->hadir = "FALSE";
                    $tamu->jumlah_tamu = 0;
                    $tamu->save();
                }
            $this->alert('success', 'Data Tamu Sudah disimpan');

            }
            elseif($this->id_edit !== null){
                $tamu =  MTamu::find($this->id_edit);
                $tamu->nama_tamu = str_replace('/','&',$this->nama_tamu[0]);
                $tamu->no_tlp_tamu = $this->no_tlp_tamu[0];
                $tamu->type_tamu = $this->type_tamu[0];
                $tamu->link_tamu = urlencode($this->nama_tamu[0].'-'.$this->id_edit);
                $tamu->save();
            $this->alert('success', 'Data Tamu Sudah diperbarui');

            }
            else
            {
                foreach($this->checklist_tamu as $i => $value){
                    $tamu =  MTamu::find($value);
                    $tamu->nama_tamu = str_replace('/','&',$this->nama_tamu[$i]);
                    $tamu->no_tlp_tamu = $this->no_tlp_tamu[$i];
                    $tamu->type_tamu = $this->type_tamu[$i];
                    $tamu->link_tamu = urlencode($this->nama_tamu[$i].'-'.$value);
                    $tamu->save();
                }
            $this->alert('success', 'Data Tamu Sudah diperbarui');

            }


            $this->resetVal();


    }

    public function generateLinkTamu(){

        $tamu = MTamu::all();

        foreach($tamu as $item){
            $item_tamu = MTamu::find($item->id);


            $item_tamu->link_tamu = urlencode($item->nama_tamu.'-'.$item->id);
            $item_tamu->save();


        }
        $this->alert('success', 'Data Link Tamu Sudah disimpan Generate');

    }

    public function generateUndangan()
    {
        $tamu = new MTamu();
        $id = $tamu->getNextId();
        $link_tamu = urlencode($this->generate_nama_tamu.'-'. $id );

        $tamu->nama_tamu = $this->generate_nama_tamu;
        $tamu->type_tamu = $this->generate_type_tamu;
        $tamu->link_tamu = $link_tamu;
        $tamu->visit_website_status = "FALSE";
        $tamu->hadir = "FALSE";
        $tamu->jumlah_tamu = 0;
        $tamu->save();



$isi_pesan_WA = urlencode("Dear, ".$this->generate_nama_tamu."

Guess what? Arie and Vina are taking the plunge into the sea of eternal love, and they want YOU to be a part of their epic adventure!

🎉 Save the Date: Friday, 29th September 2023
🌟 Invitation Link: ".url($link_tamu ?? '')."

So, mark your calendar, grab your dancing shoes, and get ready to celebrate this match made in heaven! Our joyful jamboree wouldn't be the same without your fantastic presence.

Let's create unforgettable memories together, full of love, laughter, and maybe a little bit of crazy dancing. Your blessing and prayers are the icing on this matrimonial cake.

Stay awesome and stay healthy, because we can't wait to see you there!

Cheers to love and laughter,
Arie and Vina
(because you're the life of the party, too!) 😄");


        $this->alert('success', 'Data Tamu Sudah disimpan silakan Refresh kembali ');

       return $this->redirect("whatsapp://send?text= $isi_pesan_WA ");







    }
}
