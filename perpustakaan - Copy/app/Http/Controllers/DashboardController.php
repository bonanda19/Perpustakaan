<?php

namespace App\Http\Controllers;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            "index" => Book::orderBy('Judul')->filter(request(['search']))->paginate(12)->withQueryString()

        ]);
    }

    public function create()
    {
        return view('admin.createbuku',[
            "title" => "Upload Buku"
        ]);
    }

    public function store(Request $request)
    {     
        $validatedData = $request->validate([
            'Judul' => 'required',
            'slug' => 'required|unique:books',
            'Jilid' => 'required',
            'Tahun' => 'required',
            'NoLemari' => 'required',
            'Bagian' => 'required',
        ]);

        $validatedData['image'] = $request->file('image')->store('sampul-buku');  
        //fungsi eloquent untuk menambah data
        Book::create($validatedData);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->intended('/dashboard')
            ->with('success', 'Buku Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
        $buku = Book::findOrFail($id);
        if ($buku->image) {
            Storage::delete($buku->image);
        }
        $buku->delete();
        return redirect()->route('dashboard')->with('success', 'Buku Berhasil Dihapus');
            
    }

    public function edit($id)
    {
        $buku = Book::findOrFail($id);
        return view('admin.editbuku',[
            "title" => "Upload Buku",
            "index" => $buku,
        ]);
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'Judul' => 'required',
            'slug' => 'required|unique:books',
            'Jilid' => 'required',
            'Tahun' => 'required',
            'NoLemari' => 'required',
            'Bagian' => 'required',
            'image' => 'image',
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        //fungsi eloquent untuk menambah data
        Book::find($id)->update($validatedData);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->intended('/dashboard')
            ->with('success', 'Buku Berhasil Ditambahkan');
    }
}


