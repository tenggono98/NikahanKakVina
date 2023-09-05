<?php

namespace App\Http\Livewire\Admin;

use App\Models\MTamu;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Tamu extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $checklist_tamu = [], $nama_tamu = [] , $no_tlp_tamu = [] , $type_tamu = [] , $link_tamu = [];
    public $tamu_input = 1;
    public $generate_nama_tamu , $generate_type_tamu;
    public $is_edit = false , $is_add_tamu = true , $id_del;

    public $search_nama_tamu , $search_tipe_tamu , $search_hadir_tamu, $search_buka_link;


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



        $tamu_array = $tamu->paginate(50);

        return view('livewire.admin.tamu',compact('page_title','page_name','tamu_array'))->layout('components.layout-admin-main',compact('page_title','page_name'));
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
                    $tamu->nama_tamu = $this->nama_tamu[$i];
                    $tamu->no_tlp_tamu = $this->no_tlp_tamu[$i];
                    $tamu->type_tamu = $this->type_tamu[$i];
                    $tamu->link_tamu = urlencode($this->nama_tamu[$i].'-'.rand(1000,9999));
                    $tamu->visit_website_status = "FALSE";
                    $tamu->hadir = "FALSE";
                    $tamu->jumlah_tamu = 0;
                    $tamu->save();
                }
            $this->alert('success', 'Data Tamu Sudah disimpan');

            }else
            {
                foreach($this->checklist_tamu as $i => $value){
                    $tamu =  MTamu::find($value);
                    $tamu->nama_tamu = $this->nama_tamu[$i];
                    $tamu->no_tlp_tamu = $this->no_tlp_tamu[$i];
                    $tamu->type_tamu = $this->type_tamu[$i];
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


            $item_tamu->link_tamu = urlencode($item->nama_tamu.'-'.rand(1000,9999));
            $item_tamu->save();


        }
        $this->alert('success', 'Data Link Tamu Sudah disimpan Generate');

    }

    public function generateUndangan()
    {
        $tamu = new MTamu();
        $link_tamu = urlencode($this->generate_nama_tamu.'-'.rand(1000,9999));

        $tamu->nama_tamu = $this->generate_nama_tamu;
        $tamu->type_tamu = $this->generate_type_tamu;
        $tamu->link_tamu = $link_tamu;
        $tamu->visit_website_status = "FALSE";
        $tamu->hadir = "FALSE";
        $tamu->jumlah_tamu = 0;
        $tamu->save();

        $isi_pesan_WA = urlencode("Dear ". $this->generate_nama_tamu.",
We invite you celebrate our wedding

Arie & Vina

Please visit this link to open your invitation:
".url($link_tamu ?? '')."

Thank you for your attendance.
");


        $this->alert('success', 'Data Tamu Sudah disimpan silakan Refresh kembali ');

       return $this->redirect("whatsapp://send?text= $isi_pesan_WA ");







    }
}
