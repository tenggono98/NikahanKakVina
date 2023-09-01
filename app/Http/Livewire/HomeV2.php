<?php

namespace App\Http\Livewire;

use App\Models\CommentTamu;
use App\Models\MTamu;
use Livewire\Component;
use Illuminate\Http\Request;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HomeV2 extends Component
{

    public $urlSegment;
    public $trimmedUrlSegment;
    public $flag_tamu = false;

    public $comment_nama_tamu, $comment_isi_tamu;

    use LivewireAlert;

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

        // Use preg_replace() to trim after the pattern
        $this->trimmedUrlSegment = preg_replace($pattern, '', $decodedUrlSegment);
        $trimmedUrlSegment = preg_replace($pattern, '', $decodedUrlSegment);

        $tamu = MTamu::where('nama_tamu',$trimmedUrlSegment)->get();
        if(count($tamu) <= 0)
        return redirect()->to('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
        else
            $this->flag_tamu = true;

        }
    }

    public function render()
    {

        app('debugbar')->info($this->flag_tamu);

        return view('livewire.home-v2')->layout('components.layout');
    }

    public function send_comment(){
        app('debugbar')->info($this->flag_tamu);
        $nama_comment = $this->trimmedUrlSegment;
        $isi_comment = $this->comment_isi_tamu;

        $tamu = new CommentTamu;

        $tamu->nama_tamu = $nama_comment;
        $tamu->comment_tamu = $isi_comment;
        $tamu->status = true;

        $tamu->save();
        $this->alert('success','Comment Berhasil di Post !');

    }



}
