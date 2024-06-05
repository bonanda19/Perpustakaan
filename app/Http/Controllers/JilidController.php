<?php
namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Jilid;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JilidController extends Controller
{
    

    
    public function dashboard()
    {
        return view('admin.jilid.dashboardjilid', [
            'title' => 'Tambah Jilid',
            'index' => Jilid::orderBy('name')->paginate(12)
        ]);
    }

    public function create()
    {
        return view('admin.jilid.createjilid',[
            'title' => "Tambah Jilid Buku",
        ]);
    }

    public function store(Request $request)
    {     
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Jilid::create($validatedData);
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->intended('/dashboardjilid')
            ->with('success', 'Buku Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
        $buku = Jilid::findOrFail($id);
        $buku->delete();
        return redirect()->route('dashboardjilid')
        ->with('success', 'Jilid Buku Berhasil Dihapus');
            
    }

    public function edit($id)
    {
        $jilid = Jilid::findOrFail($id);
        return view('admin.jilid.editjilid',[
            "title" => "edit jilid Buku",
            "index" => $jilid,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Jilid::find($id)->update($validatedData);
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->intended('/dashboardjilid')
            ->with('success', 'Buku Berhasil Ditambahkan');
    }
}
