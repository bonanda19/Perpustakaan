<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\jilid;

class BookController 
{
    
    public function indexhome(){

        return view('index', [
            "title" => "Home",
            // "index" => Book::all()
            "index" => Book::orderBy('Judul')->filter(request(['search']))->paginate(12)->withQueryString(),
            "jilid" => jilid::all()
        ]);
    }
    public function showByJilid($id)
{
    // Get all jilid records
    $jilid = Jilid::all();

    // Get paginated books by jilid_id
    $index = Book::where('jilid_id', $id)->paginate(10); // Adjust items per page as needed

    $data['title'] = 'Perpustakaan | Home';

    // Render view with jilid and index
    return view('index', $data, compact('jilid', 'index'));
}

    
    public function show(Book $index){
        return view('deskBuku', [
            "title" => "Deskripsi Buku",
            "desk" => $index
        ]);
    }
} 
