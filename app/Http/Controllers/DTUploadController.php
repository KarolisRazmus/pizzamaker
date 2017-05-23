<?php

namespace App\Http\Controllers;

use App\models\DTResources;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class DTUploadController extends Controller
{
    public function upload(UploadedFile $file)
    {
        $data =
            [
                "size" => $file->getSize(),
                "mime_type" => $file->getMimeType(),
                "path" => $file->getPath(),
            ];

        $path = 'upload/' . date ("Y/m/d/");

        $fileName = Carbon::now()->timestamp . '_' . $file->getClientOriginalName();

        $file->move(public_path($path), $fileName);

        $data["path"] = $path . $fileName;

        return DTResources::create($data);
    }
}
