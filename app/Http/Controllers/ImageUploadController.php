<?php

namespace App\Http\Controllers;

use App\ImageUpload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('image.index');
    }

    public function store(Request $request)
    {
        $image = new ImageUpload();
        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
        }
        $image->name = $imageName;
        $image->path = base64_encode($path);
        $image->save();

        return back()->with('success', 'Image uploaded successfully');
    }
}
