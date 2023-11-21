<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    /**
     * Menampilkan daftar produk.
     */
    public function index()
    {
        $produk = produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Menampilkan form untuk membuat produk baru.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Menyimpan produk baru.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_bunga' => 'required',
            'jenis' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'status' => 'required',
        ]);

        Produk::create($validatedData);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail produk.
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Menampilkan form untuk mengedit produk.
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Menyimpan perubahan pada produk yang sudah diedit.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_bunga' => 'required',
            'jenis' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'status' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($validatedData);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Menghapus produk.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    }
}
