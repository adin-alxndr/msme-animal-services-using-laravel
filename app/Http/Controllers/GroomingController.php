<?php

namespace App\Http\Controllers;

use App\Models\Grooming;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class GroomingController extends Controller
{
    /**
     * Display the specified resource with status 'menunggu'.
     */
    public function showMenunggu()
    {
        $result = Grooming::where('status', 'Menunggu...')->get();

        return view('menunggu_grooming', ['groomings' => $result]);
    }

    /**
     * Display the specified resource with status 'disetujui'.
     */
    public function showDisetujui()
    {
        $result = Grooming::where('status', 'Disetujui')->get();

        return view('disetujui_grooming', ['groomings' => $result]);
    }

    /**
     * Display the specified resource with status 'diselesaikan/dibatalkan'.
     */
    public function showRiwayat()
    {
        $result = Grooming::whereIn('status', ['Diselesaikan', 'Dibatalkan'])->get();

        return view('riwayat_grooming', ['groomings' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_owner' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:50',
            'nama_anabul' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:50',
            'jenis' => 'required|string',
            'tipe' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required|string|max:20',
        ], [
            'nama_owner.required' => 'Nama owner harus diisi',
            'nama_owner.regex' => 'Nama owner hanya boleh mengandung huruf dan angka.',
            'nama_owner.max' => 'Nama tidak boleh lebih dari :max karakter',
            'nama_anabul.required' => 'Nama anabul harus diisi',
            'nama_anabul.regex' => 'Nama anabul hanya boleh mengandung huruf dan angka.',
            'nama_anabul.max' => 'Nama tidak boleh lebih dari :max karakter',
            'jenis.required' => 'Jenis harus diisi',
            'tanggal.required' => 'Tanggal harus diisi',
            'tipe.required' => 'Tipe harus diisi',
            'jam.required' => 'Jam harus diisi',
        ]);

        $randomCode = Str::random(4);
        $kode_reservasi = 'GR' . $randomCode;

        $grooming = new Grooming();
        $grooming->nama_owner = $validatedData['nama_owner'];
        $grooming->nama_anabul = $validatedData['nama_anabul'];
        $grooming->jenis = $validatedData['jenis'];
        $grooming->tanggal = $validatedData['tanggal'];
        $grooming->tipe = $validatedData['tipe']; 
        $grooming->jam = $validatedData['jam']; 
        $grooming->status = 'Menunggu...'; // Default status
        $grooming->timestamp = now();
        $grooming->kode_reservasi = $kode_reservasi;

        $grooming->save();

        return redirect()->route('reservasi_grooming')->with([
            'success' => true,
            'kode_reservasi' => $kode_reservasi, // Replace with the actual code generation logic
        ]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        $searchResults = Grooming::where('kode_reservasi', 'like', '%' . $searchQuery . '%')
            ->orWhere('nama_owner', 'like', '%' . $searchQuery . '%')
            ->orWhere('nama_anabul', 'like', '%' . $searchQuery . '%')
            ->get();

        return view('booking', compact('searchResults'));
    }

     /**
     * Update status to 'Disetujui'.
     */
    public function updateStatus($id)
    {
        $grooming = Grooming::findOrFail($id);
        $grooming->timestamps = false;
        $grooming->status = 'Disetujui';
        $grooming->save();

        if ($grooming) {
            return redirect()->route('menunggu_grooming')->with('status', 'Status berhasil diperbarui.');
        } else {
            return redirect()->route('menunggu_grooming')->with('error', 'Status gagal diperbarui.');
        }
    }

    /**
     * Update status to 'Diselesaikan'.
     */
    public function updateStatusDone($id)
    {
        $grooming = Grooming::findOrFail($id);
        $grooming->timestamps = false;
        $grooming->status = 'Diselesaikan';
        $grooming->save();

        return redirect()->route('disetujui_grooming')->with('status', 'Status berhasil diperbarui.');
    }

    /**
     * Update status to 'Dibatalkan'.
     */
    public function updateStatusFail($id)
    {
        $grooming = Grooming::findOrFail($id);
        $grooming->timestamps = false;
        $grooming->status = 'Dibatalkan';
        $grooming->save();

        $currentRoute = request()->route()->getName();

        if ($currentRoute === 'grooming.batalkan.disetujui') {
            return redirect()->route('disetujui_grooming')->with('status', 'Status berhasil diperbarui.');
        } elseif ($currentRoute === 'grooming.batalkan.menunggu') {
            return redirect()->route('menunggu_grooming')->with('status', 'Status berhasil diperbarui.');
        }
    }
    
}
