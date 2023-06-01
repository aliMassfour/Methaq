<?php

namespace App\Http\ImageUploader;


/**
 * 
 */
trait ImageUploader
{
    public function store_imaeg($image)
    {
        $currentDateTime = date('YmdHis');
        $fileName = $currentDateTime . '_' . $image->getClientOriginalName() ;
        $filePath = '/images/services/';
        $image->move(public_path($filePath), $fileName);
        return $filePath;
    }
}
