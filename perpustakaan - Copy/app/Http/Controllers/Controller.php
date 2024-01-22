<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function indexhome()
    {
        // $buku = [
        //     [
        //             // "title" => "Deskripsi Buku",
        //             "Judul" => "Rapat Sidang Paripurna ke 1",
        //             "slug" => "Rapat-Sidang-Paripurna-ke-1",
        //             "Jilid" => "1",
        //             "Tahun" => "2023",
        //             "NoLemari" => "1",
        //             "Bagian" => "A",
        //     ],
        //     [
        //             // "title" => "Deskripsi Buku",
        //             "Judul" => "Rapat Sidang Paripurna ke 2",
        //             "slug" => "Rapat-Sidang-Paripurna-ke-2",
        //             "Jilid" => "2",
        //             "Tahun" => "2023",
        //             "NoLemari" => "1",
        //             "Bagian" => "A",
        //     ],
        // ];
            return view("index", [
                "title" => "Home",
                // "index"=> $buku,
            ]);
            
        
        
    }

    public function deskbuku(){
        return view('deskBuku', [
            "title" => "Deskripsi Buku",
            "Judul" => "Rapat Sidang Paripurna ke 4",
            "Jilid" => "2",
            "Tahun" => "2023",
            "NoLemari" => "1",
            "Bagian" => "A",
        ]);
    }
}
