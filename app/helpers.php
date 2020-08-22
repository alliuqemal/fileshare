<?php
if (!function_exists("fileIcon")) {
    function fileIcon(string $filetype): string
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

if (!function_exists('getFileType')) {
    function getFileType($extension)
    {
        switch ($extension) {
            case "doc":
            case "docx":
                return "Word";
            case "pdf":
                return "PDF";
            case "xls":
            case "xlsx":
                return "Excel";
            case "jpg":
            case "jpeg":
            case "png":
            case "bmp":
                return "Image";
            case "mp4":
            case "wmv":
            case "avi":
            case "mkv":
            case "flv":
                return "Video";
            case "c":
            case "java":
            case "cpp":
            case "py":
            case "php":
            case "htm":
            case "html":
                return "Code";
            case "mp3":
            case "wav":
                return "Audio";
            case "rar":
            case "zip":
                return "Archive";
            case "csv":
                return "CSV";
            case "txt":
            case "rtf":
                return "Text";
            default:
                return "Other";
        }
    }
}
