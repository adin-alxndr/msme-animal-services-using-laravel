<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class HotelController extends Controller
{
    /**
     * Display the specified resource with status 'menunggu'.
     */
    public function showMenunggu()
    {
        $result = Hotel::where('status', 'Menunggu...')->get();

        return view('menunggu_hotel', ['hotels' => $result]);
    }

    /**
     * Display the specified resource with status 'disetujui'.
     */
    public function showDisetujui()
    {
        $result = Hotel::where('status', 'Disetujui')->get();

        return view('disetujui_hotel', ['hotels' => $result]);
    }
    
    /**
     * Display the specified resource with status 'diselesaikan/dibatalkan'.
     */
    public function showRiwayat()
    {
        $result = Hotel::whereIn('status', ['Diselesaikan', 'Dibatalkan'])->get();

        return view('riwayat_hotel', ['hotels' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_owner' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:50',
            'nama_anabul' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:50',
            'jenis' => 'required',
            'tgl_antar' => 'required|date',
            'tgl_jemput' => 'required|date',
            'jam_antar' => 'required|string|max:20',
            'jam_jemput' => 'required|string|max:20',
        ], [
            'nama_owner.required' => 'Nama owner harus diisi',
            'nama_owner.regex' => 'Nama owner hanya boleh mengandung huruf dan angka.',
            'nama_owner.max' => 'Nama tidak boleh lebih dari :max karakter',
            'nama_anabul.required' => 'Nama anabul harus diisi',
            'nama_anabul.regex' => 'Nama anabul hanya boleh mengandung huruf dan angka.',
            'nama_anabul.max' => 'Nama tidak boleh lebih dari :max karakter',
            'jenis.required' => 'Jenis anabul harus diisi',
            'tgl_antar.required' => 'Tanggal Pengantaran harus diisi',
            'tgl_jemput.required' => 'Tanggal Penjemputan harus diisi',
            'jam_antar.required' => 'Jam Pengantaran harus diisi',
            'jam_jemput.required' => 'Jam Penjemputan harus diisi',
        ]);

        $randomCode = Str::random(4);
        $kode_reservasi = 'HO' . $randomCode;

        $hotel = new Hotel();
        $hotel->nama_owner = $validatedData['nama_owner'];
        $hotel->nama_anabul = $validatedData['nama_anabul'];
        $hotel->jenis = $validatedData['jenis'];
        $hotel->tgl_antar = $validatedData['tgl_antar'];
        $hotel->tgl_jemput = $validatedData['tgl_jemput'];
        $hotel->jam_antar = $validatedData['jam_antar'];
        $hotel->jam_jemput = $validatedData['jam_jemput']; 
        $hotel->status = 'Menunggu...'; // Default status
        $hotel->timestamp = now();
        $hotel->kode_reservasi = $kode_reservasi;

        $hotel->save();

        return redirect()->route('reservasi_hotel')->with([
            'success' => true,
            'kode_reservasi' => $kode_reservasi, // Replace with the actual code generation logic
        ]);
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        $searchResults = Hotel::where('kode_reservasi', 'like', '%' . $searchQuery . '%')
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
        $hotel = Hotel::findOrFail($id);
        $hotel->timestamps = false;
        $hotel->status = 'Disetujui';
        $hotel->save();

        if ($hotel) {
            return redirect()->route('menunggu_hotel')->with('status', 'Status berhasil diperbarui.');
        } else {
            return redirect()->route('menunggu_hotel')->with('error', 'Status gagal diperbarui.');
        }
    }

    /**
     * Update status to 'Diselesaikan'.
     */
    public function updateStatusDone($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->timestamps = false;
        $hotel->status = 'Diselesaikan';
        $hotel->save();

        return redirect()->route('disetujui_hotel')->with('status', 'Status berhasil diperbarui.');
    }

    /**
     * Update status to 'Dibatalkan'.
     */
    public function updateStatusFail($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->timestamps = false;
        $hotel->status = 'Dibatalkan';
        $hotel->save();

        $currentRoute = request()->route()->getName();

        if ($currentRoute === 'hotel.batalkan.disetujui') {
            return redirect()->route('disetujui_hotel')->with('status', 'Status berhasil diperbarui.');
        } elseif ($currentRoute === 'hotel.batalkan.menunggu') {
            return redirect()->route('menunggu_hotel')->with('status', 'Status berhasil diperbarui.');
        }
    }
}
