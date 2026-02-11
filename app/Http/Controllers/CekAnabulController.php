<?php

namespace App\Http\Controllers;

use App\Models\CekAnabul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CekAnabulController extends Controller
{
    /**
     * Display the specified resource with status 'menunggu'.
     */
    public function showMenunggu()
    {
        $result = CekAnabul::where('status', 'Menunggu...')->get();

        return view('menunggu_dokter', ['dokters' => $result]);
    }

    /**
     * Display the specified resource with status 'disetujui'.
     */
    public function showDisetujui()
    {
        $result = CekAnabul::where('status', 'Disetujui')->get();

        return view('disetujui_dokter', ['dokters' => $result]);
    }

    /**
     * Display the specified resource with status 'diselesaikan/dibatalkan'.
     */
    public function showRiwayat()
    {
        $result = CekAnabul::whereIn('status', ['Diselesaikan', 'Dibatalkan'])->get();

        return view('riwayat_dokter', ['dokters' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_owner' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:50',
            'nama_anabul' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:50',
            'tanggal' => 'required|date',
            'sesi' => 'required|string|max:20',
            'catatan' => 'required|string|max:255', 
        ], [
            'nama_owner.required' => 'Nama owner harus diisi',
            'nama_owner.regex' => 'Nama owner hanya boleh mengandung huruf dan angka.',
            'nama_owner.max' => 'Nama tidak boleh lebih dari :max karakter',
            'nama_anabul.required' => 'Nama anabul harus diisi',
            'nama_anabul.regex' => 'Nama anabul hanya boleh mengandung huruf dan angka.',
            'nama_anabul.max' => 'Nama tidak boleh lebih dari :max karakter',
            'tanggal.required' => 'Tanggal harus diisi',
            'sesi.required' => 'Sesi harus diisi',
            'catatan.required' => 'Keluhan harus diisi',
            'catatan.max' => 'Keluhan tidak boleh lebih dari :max karakter',
        ]);

        $randomCode = Str::random(4);
        $kode_reservasi = 'CA' . $randomCode;

        $dokter = new CekAnabul();
        $dokter->nama_owner = $validatedData['nama_owner'];
        $dokter->nama_anabul = $validatedData['nama_anabul'];
        $dokter->sesi = $validatedData['sesi'];
        $dokter->tanggal = $validatedData['tanggal'];
        $dokter->catatan = $validatedData['catatan']; 
        $dokter->status = 'Menunggu...'; // Default status
        $dokter->timestamp = now();
        $dokter->kode_reservasi = $kode_reservasi;

        $dokter->save();

        return redirect()->route('reservasi_dokter')->with([
            'success' => true,
            'kode_reservasi' => $kode_reservasi, // Replace with the actual code generation logic
        ]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        $searchResults = CekAnabul::where('kode_reservasi', 'like', '%' . $searchQuery . '%')
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
        $dokter = CekAnabul::findOrFail($id);
        $dokter->timestamps = false;
        $dokter->status = 'Disetujui';
        $dokter->save();

        if ($dokter) {
            return redirect()->route('menunggu_dokter')->with('status', 'Status berhasil diperbarui.');
        } else {
            return redirect()->route('menunggu_dokter')->with('error', 'Status gagal diperbarui.');
        }
    }

    /**
     * Update status to 'Diselesaikan'.
     */
    public function updateStatusDone($id)
    {
        $dokter = CekAnabul::findOrFail($id);
        $dokter->timestamps = false;
        $dokter->status = 'Diselesaikan';
        $dokter->save();

        return redirect()->route('disetujui_dokter')->with('status', 'Status berhasil diperbarui.');
    }

    /**
     * Update status to 'Dibatalkan'.
     */
    public function updateStatusFail($id)
    {
        $dokter = CekAnabul::findOrFail($id);
        $dokter->timestamps = false;
        $dokter->status = 'Dibatalkan';
        $dokter->save();

        $currentRoute = request()->route()->getName();

        if ($currentRoute === 'dokter.batalkan.disetujui') {
            return redirect()->route('disetujui_dokter')->with('status', 'Status berhasil diperbarui.');
        } elseif ($currentRoute === 'dokter.batalkan.menunggu') {
            return redirect()->route('menunggu_dokter')->with('status', 'Status berhasil diperbarui.');
        }
    }
    
}
