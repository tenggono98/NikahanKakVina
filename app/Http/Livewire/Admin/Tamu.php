<?php

namespace App\Http\Livewire\Admin;

use App\Models\MTamu;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Tamu extends Component
{
    use LivewireAlert;

    public $checklist_tamu = [], $nama_tamu = [] , $no_tlp_tamu = [] , $type_tamu = [] , $link_tamu = [];
    public $tamu = 1;

    protected $listeners = [
        'confirmedDelete',
    ];



    public function render()
    {
        $page_title = 'Tamu Undangan';
        $page_name = 'Tamu';

        $tamu_array = MTamu::all()->toArray();

        // Get Template WA
        $templateWA = DB::table('setting_website')
                                ->where('name','=','Massage_WA_Template')
                                ->value('value');

        // dd($templateWA);

        app('debugbar')->info($this->nama_tamu[0] ?? 'kosong');
        app('debugbar')->info($this->nama_tamu[1] ?? 'kosong');
        return view('livewire.admin.tamu',compact('page_title','page_name','tamu_array','templateWA'))->layout('components.layout-admin-main',compact('page_title','page_name'));
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
        $this->tamu++;
    }

    public function resetVal(){
        $this->tamu = 1;
        $this->resetData();
    }


    public function copy()
    {
        $this->alert('success', 'Link sudah di copy ke klipboard!');
    }

    public function edit()
    {
        $this->alert('success', 'Link sudah di copy ke klipboard!');
    }

    public function del($nama = null)
    {

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

        $this->alert('warning', 'Data Sudah dihapus');
    }


    public function save(){
        $this->validate([
            'nama_tamu.*' => 'required',
            'no_tlp_tamu.*' => 'required',
            'type_tamu.*' => 'required',
        ]);

            foreach($this->nama_tamu as $i => $value){

                    $tamu = new MTamu;
                    $tamu->nama_tamu = $this->nama_tamu[$i];
                    $tamu->no_tlp_tamu = $this->no_tlp_tamu[$i];
                    $tamu->type_tamu = $this->type_tamu[$i];
                    $tamu->link_tamu = urlencode($this->nama_tamu[$i].'-'.rand(1000,9999));
                    $tamu->save();
            }



        $this->alert('success', 'Data Tamu Sudah disimpan');


    }
}
