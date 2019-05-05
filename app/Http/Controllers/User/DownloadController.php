<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//use App\Model\user\download\show;

class DownloadController extends Controller
{
    
 
	 public function downfunction()
	{
		$downloads=DB::table('files')->get();
		return view('user.download.show',compact('downloads'));
	}

	public function download( $filename = '' )
    {
    	//$downloads=DB::table('files')->get();
		  //view('user.download.show',compact('downloads'));
       //Check if file exists in app/storage/file folder

        $file_path = storage_path() .'/app/'. $filename;

        if (file_exists($file_path) && view('user.download.show',compact('downloads')) )
        {
            // Send Download
            return \Response::download($file_path, $filename, [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
    }
 

}
