<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileUpload
{
    // uploding file
    public function fileUpload($file, $folderName = 'images', $oldFile = NULL)
    {
        $originalFileName = $file->getClientOriginalName();
        $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
        $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $fileName = $filename . "-" . time() . "." . $extension;
        $file->storeAs($folderName, $fileName, "public");
        if ($oldFile) {
            $path = str_replace('storage', '/public', $oldFile);
            Storage::delete($path);
        }
        $path = '/storage/' . $folderName . '/' . $fileName;
        return $path;
    }

    // deleting file
    public function deleteFile($file)
    {
        $path = str_replace('/storage', '/public', $file);
        Storage::delete($path);
    }
}
