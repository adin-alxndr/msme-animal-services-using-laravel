<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Produk::all();
        return view('list_produk', compact('products'));
    }

    public function showForm()
    {
        return view('input_produk'); // Update this with your actual Blade view for the login form
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'harga' => 'required|numeric',
            'link_shopee' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust file validation as needed
        ], [
            'nama_produk.required' => 'Nama produk harus diisi',
            'nama_produk.max' => 'Nama tidak boleh lebih dari :max karakter',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa angka',
            'link_shopee.required' => 'Link produk harus diisi',
            'foto.required' => 'Foto produk harus diisi',
        ]);

        // Handle image upload
        $imagePath = $request->file('foto')->store('uploads', 'public');

        $produk = new Produk();
        $produk->nama_produk = $validatedData['nama_produk'];
        $produk->harga = $validatedData['harga'];
        $produk->link_shopee = $validatedData['link_shopee'];
        $produk->foto = $imagePath; 
        $produk->save();

        if ($produk) {
            return redirect()->route('input_produk')->with('status', 'Produk berhasil ditambahkan');
        } else {
            return redirect()->route('input_produk')->with('error', 'Produk gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($produk)
    {
        $result = Produk::find($produk);
        return view('list_produk', ['produk' => $result]);
    }

    public function showUser()
    {
        $products = Produk::all();
        return view('product', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|regex:/^[A-Za-z0-9\s]+$/',
            'harga' => 'required|numeric',
            'link_shopee' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        if (!$id) {
            return redirect()->route('list_produk')->with('error', 'Product not found.');
        }

        // Handle image upload only if a new image is provided
        if ($request->hasFile('foto')) {
            // Delete old image if it exists
            Storage::disk('public')->delete($id->foto);

            // Upload new image
            $imagePath = $request->file('foto')->store('uploads', 'public');
            $validatedData['foto'] = $imagePath;
        }

        $id->update($validatedData);
    
        return redirect()->route('list_produk')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->route('list_produk')->with('error', 'Product not found.');
        }$deleted = $produk->delete();

        if ($deleted) {
            return redirect()->route('list_produk')->with('success', 'Product deleted successfully.');
        } else {
            return redirect()->route('list_produk')->with('error', 'Failed to delete the product.');
        }
    }
}
