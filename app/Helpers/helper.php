<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


if (!function_exists('uploadFile')) {
    /**
     * Handle file upload for both creating and editing.
     *
     * @param UploadedFile $file  The file to be uploaded.
     * @param string $folder  The folder where the file should be uploaded.
     * @param string|null $oldFile  The old file name (if editing), null if creating a new file.
     * @return string  The path to the uploaded file.
     */
    function uploadFile($file, string $folder, string $oldFile = null)
    {
        if ($file){
            $fileName = Str::lower(Str::random(40)) . '.' . $file->getClientOriginalExtension();
            if ($oldFile && Storage::exists($folder . '/' . $oldFile)) {
                Storage::delete($folder . '/' . $oldFile);
            }

            return $file->storeAs($folder, $fileName,'public');
        }else{
            return null;
        }
    }
}

if (!function_exists('deleteFile')) {
    function deleteFile(string $file, string $folder){
        Storage::delete($folder . '/' . $file);
        return true;
    }
}
