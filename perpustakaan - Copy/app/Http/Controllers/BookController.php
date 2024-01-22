<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController 
{
    
    public function indexhome(){

        return view('index', [
            "title" => "Home",
            // "index" => Book::all()
            "index" => Book::orderBy('Judul')->filter(request(['search']))->paginate(12)->withQueryString()
        ]);
    }

    
    public function show(Book $index){
        return view('deskBuku', [
            "title" => "deskripsi Buku",
            "desk" => $index
        ]);
    }

    public function deskbuku(){
        return view('deskBuku', [
            "title" => "Deskripsi Buku",
        ]);
    }

    
}
