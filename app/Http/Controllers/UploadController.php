<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function uploadImages(Request $request)
    {
        if ($request->dataFiles) {
            $files = json_decode($request->dataFiles);

            if ($files) {
                foreach ($files as $file) {
                    $format = explode('/', explode(';', $file)[0])[1];
                    $imageData = substr($file, 1+strrpos($file, ','));

                    Storage::put('public/uploads/images/' . uniqid() . '.' . $format, base64_decode($imageData));
                }
            }
        }
    }
}
