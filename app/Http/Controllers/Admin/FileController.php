<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class FileController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {

        $files= file::all();
        return view('admin.file.show',compact('files'));
    }

   public function create()
    {   
      
        return view('admin.file.create');
    }

    public function store(Request $request)
    {
      $this->validate($request,[

            'name'=>'required',

            'file'=>'required|max:3000|mimes:doc,docx,jpeg,png,jpg,pdf,ppt,pptx',

            'Subject'=>'required',
            

        ]);
       if($request->hasFile('file'))
        {
            //return $request->image->getClientOriginalName();
            $fileName = $request->file->store('');
            $filesize = $request->file('file')->getClientSize();
        }

        $file=new file;
        $file->name =$request->name;
        $file->file =$fileName;
        $file->Subject =$request->Subject;
        $file->size=$filesize;

        $file->save();
        return redirect(route('file.index'));
    }


    public function destroy($id)
    {
        file::where('id',$id)->delete();
        return redirect()->back()->with('message','Permission deleted Successfully');
    }
}
