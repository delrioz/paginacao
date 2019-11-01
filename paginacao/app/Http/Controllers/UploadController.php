<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

use App\Anuncio;

class UploadController extends Controller
{
    public function upload(Request $request){

      //  print_r($request->all());

      $files = $request->file('file');

      if(!empty($files)):

            foreach($files as $file):
    Storage::put($file->getClientOriginalName(), file_get_contents($file));
            endforeach;

    endif;

    return \Response::json(array('success' => true));

    


    }
}
