<?php

namespace App\Http\Livewire;

use App\Models\CommentTamu;
use App\Models\MTamu;
use Illuminate\Console\View\Components\Alert;
use Livewire\Component;
use Illuminate\Http\Request;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HomeV2 extends Component
{

    public $urlSegment;
    public $trimmedUrlSegment , $trimmedUrlSegment_id;
    public $id_tamu;
    public $flag_tamu = false;
    public $flag_tamu_temp = false;
    public $flag_tamu_alamat;
    public $jumlah_tamu;
    public $tamu , $comment_tamu;
    public $flag_btn_hadir = false;


    public $comment_nama_tamu, $comment_isi_tamu;

    use LivewireAlert;

    protected $listeners = [
        'confirmed_decline'
    ];

    public function mount(Request $request)
    {

        $path_get = trim($request->decodedPath(), '/');

        if ($path_get !== '') {
        $path = $request->path(); // Get the path from the URL
        $segments = explode('/', $path); // Split the path into segments
        $this->urlSegment = end($segments); // Get the last segment

        $encodedUrl = end($segments);



        // Decode the URL segment
        $decodedUrlSegment = urldecode($encodedUrl);



        // Define the pattern to match a hyphen followed by numbers
        $pattern = '/-(\d+)/';
        $pattern_id = '/^.+?-/';




        // Use preg_replace() to trim after the pattern
        $this->trimmedUrlSegment = preg_replace($pattern, '', $decodedUrlSegment);
        $trimmedUrlSegment = preg_replace($pattern, '', $decodedUrlSegment);


         // Use preg_replace() to trim after the pattern
         $this->trimmedUrlSegment_id = (int) preg_replace($pattern_id, '', $decodedUrlSegment);
         $trimmedUrlSegment_id = (int) preg_replace($pattern_id, '', $decodedUrlSegment);




        $tamu = MTamu::where('nama_tamu',urldecode($trimmedUrlSegment))->where('id',$trimmedUrlSegment_id)->get();



        if(count($tamu) <= 0){
            $this->flag_tamu_temp = true;

        // return redirect('/'.$encodedUrl);
        }
        else
                $this->flag_tamu = true;
        }
    }

    public function render()
    {
        if($this->trimmedUrlSegment !== null){

            $this->comment_tamu = CommentTamu::where('status',true)->orderBy('updated_at','DESC')->get();


            if( $this->flag_tamu_temp == false){
            $this->tamu = MTamu::where('nama_tamu',$this->trimmedUrlSegment)->where('id',$this->trimmedUrlSegment_id)->first();
            $this->id_tamu = $this->tamu->id ?? '';
            $this->comment_nama_tamu = $this->trimmedUrlSegment;
            
            // Update Visit Tamu
            $visit_tamu = MTamu::find($this->id_tamu);


            $visit_tamu->visit_website_status = 'true';
            $visit_tamu->save();
             }


        }else
            $this->comment_tamu = CommentTamu::where('status',true)->orderBy('updated_at','DESC')->get();



        return view('livewire.home-v2')->layout('components.layout');
    }

    public function send_comment(){

        $nama_comment = $this->trimmedUrlSegment;
        $isi_comment = $this->comment_isi_tamu;

        $tamu = new CommentTamu;

        $tamu->nama_tamu = $nama_comment;
        $tamu->comment_tamu = $isi_comment;
        $tamu->status = true;

        $tamu->save();
        // $this->alert('success','Your wish ');

        $this->comment_isi_tamu = '';

    }


    public function confriem_btn(){
        $this->flag_btn_hadir = true;
    }

    public function resetBtnConfirmation(){
        $this->flag_btn_hadir = false;
    }

    public function confirmed_decline()
    {
        // Do something
        $tamu = MTamu::find($this->id_tamu);
        $tamu->hadir = 'Tidak';
        $tamu->jumlah_tamu = 0;
        $tamu->save();
        $this->alert('info','Thank you for your confirmation');
        $this->flag_btn_hadir = false;
    }

    public function confirmed_accept()
    {
        // Do something
        $tamu = MTamu::find($this->id_tamu);
        $tamu->hadir = 'Iya';
        $tamu->jumlah_tamu = $this->jumlah_tamu;
        $tamu->save();
        $this->alert('success','Thank you for your confirmation');
    }

    public function copy_alert($value){
        $this->alert('info',$value. ' Sudah di copy ke klipboard');
    }





}
