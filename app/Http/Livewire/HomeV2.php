<?php

namespace App\Http\Livewire;

use App\Models\MTamu;
use Livewire\Component;
use Illuminate\Http\Request;

class HomeV2 extends Component
{

    public $urlSegment;
    public $trimmedUrlSegment;

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
        }
    }

    public function render()
    {

        return view('livewire.home-v2')->layout('components.layout');
    }



}
