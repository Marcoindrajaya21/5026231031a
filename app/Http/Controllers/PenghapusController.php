<?php

use App\Models\Penghapus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenghapusController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->cari;
        $data = Penghapus::where('merkpenghapus', 'LIKE', "%$keyword%")->paginate(10);
        return view('penghapus.index', compact('data'));
    }

    public function create()
    {
        return view('penghapus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merkpenghapus' => 'required|max:25',
            'hargapenghapus' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric',
        ]);

        Penghapus::create($request->all());
        return redirect()->route('penghapus.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Penghapus $penghapus)
    {
        return view('penghapus.edit', compact('penghapus'));
    }

    public function update(Request $request, Penghapus $penghapus)
    {
        $request->validate([
            'merkpenghapus' => 'required|max:25',
            'hargapenghapus' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric',
        ]);

        $penghapus->update($request->all());
        return redirect()->route('penghapus.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Penghapus $penghapus)
    {
        $penghapus->delete();
        return redirect()->route('penghapus.index')->with('success', 'Data berhasil dihapus');
    }
}
