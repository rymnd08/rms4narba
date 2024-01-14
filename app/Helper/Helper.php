<?php

namespace App\Helper;

class Helper {
    
    public static function fileRename($file){
        $name = pathinfo($file, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $newName = 'File_' . time() . $name . '.' . $extension;
        $cleanName = preg_replace('/\s+/', '', $newName);

        return $cleanName;
    }
}