<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'path',
        'name',
        'size',
        'type',
        'userID'
    ];

        public function fileIcon(string $filetype)
        {
            switch ($filetype) {
                case "Word":
                    return "fa-file-word";
                case "PDF":
                    return "fa-file-pdf";
                case "Excel":
                    return "fa-file-excel";
                case "Image":
                    return "fa-file-image";
                case "Video" :
                    return "fa-file-video";
                case "Code" :
                    return "fa-file-code";
                case "Audio" :
                    return "fa-file-audio";
                case "Archive" :
                    return "fa-file-archive";
                case "CSV" :
                    return "fa-file-csv";
                case "Text" :
                    return "fa-file-alt";
                case "Other" :
                    return "fa-file";
            }
        }

}
