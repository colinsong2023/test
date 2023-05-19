<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function uploadForm()
    {
        //blog 2 dev change
        return view('upload');
    }


    public function uploadSubmit(Request $request) {

        $request->validate([
            'file' => 'required|file|mimes:jpeg,jpg,png,gif|max:1024',
        ]);

        $file = $request->file('file');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();


        $path = Storage::putFileAs('uploads', $file, $filename);

        return "File uploaded successfully to $path";
    }

}
