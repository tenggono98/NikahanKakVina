<?php

namespace App\Http\Livewire\Admin;

use App\Models\CommentTamu;
use App\Models\MTamu;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Home extends Component
{

    public $total_tamu, $total_tamu_datang , $total_jumlah_tamu , $total_tamu_tidak_datang, $total_tamu_belum_respond , $total_tamu_belum_buka_link;
    public $id_del;
    use LivewireAlert;


    protected $listeners = [
        'confirmedDeleted'
    ];

    public function render()
    {

        $this->total_tamu = MTamu::all()->count();
        $this->total_tamu_datang = MTamu::where('hadir','Iya')->count();
        $this->total_jumlah_tamu = MTamu::sum('jumlah_tamu');
        $this->total_tamu_tidak_datang = MTamu::where('hadir','Tidak')->count();
        $this->total_tamu_belum_respond = MTamu::where('hadir','FALSE')->count();
        $this->total_tamu_belum_buka_link = MTamu::where('visit_website_status','FALSE')->count();


        $comment_tamu = CommentTamu::orderBy('id','DESC')->get();


        $page_name = 'Beranda';
        $page_title = 'Beranda';
        return view('livewire.admin.home',compact('comment_tamu'))->layout('components.layout-admin-main',compact('page_name','page_title'));
    }


    public function toggleComment($id)
    {
        $comment = CommentTamu::find($id);

        if($comment->status == 'true')
        $comment->status = 'false';
        else
        $comment->status = 'true';

        $comment->save();

        $this->alert('success', 'Comment Tamu Sudah diubah!');

    }

    public function deleteComment($id){
        $this->id_del = $id;
        $this->alert('question', 'Yakin mau di Hapus?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Yes',
            'onConfirmed' => 'confirmedDeleted'
        ]);
    }

    public function confirmedDeleted()
    {
        CommentTamu::find($this->id_del)->delete();

        $this->id_del = null;

        $this->alert('success', 'Comment Tamu Sudah dihapus!');
    }

}
