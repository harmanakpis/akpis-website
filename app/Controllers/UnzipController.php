<?php

namespace App\Controllers;   // Always include this namespace

use CodeIgniter\Controller; // Base controller class

class UnzipController extends Controller
{
    public function index()
    {
        return "Hello! This is the Unzip Controller.";
    }

    public function extract()
    {
        $zip = new \ZipArchive;
        $zipPath = FCPATH . 'new-website/acca-course.zip';  

    $extractPath = FCPATH . 'new-website/'; 
    echo $zipPath ;
        // if ($zip->open($zipPath) === TRUE) {
        //     $zip->extractTo($extractPath);
        //     $zip->close();
        //     return 'Unzipped successfully!';
        // } else {
        //     return 'Failed to unzip.';
        // }
    
    }
}
