<?php

namespace App\Http\ImageUploader;

use GuzzleHttp\Psr7\UploadedFile;

/**
 * 
 */
trait ImageUploader
{
    public function store_imaeg($image)
    {
        $currentDateTime = date('YmdHis');
        $fileName = $currentDateTime . '_' . $image->getClientOriginalName();
        $filePath = '/photo/services/';
        $image->move(public_path($filePath), $fileName);
        return $filePath . '/' . $fileName;
    }
}
