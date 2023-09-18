<?php

namespace App\Http\Controllers;

use App\Models\saran;
use Illuminate\Http\Request;
use App\Services\SaranService;

class SaranMasukanController extends Controller
{
    public function index(Request $request)
    {
        $data = SaranService::saranList($request);
        return view('admin.saran.index', compact('data'));
    }

    public function save_saran(Request $request)
    {
        // dd($request);
            $validated = $request->validate([
                'name' => 'required',
                'kontak' => 'required',
                'pesan' => 'required',
            ]);
            $params = $validated;
        $data = SaranService::SaranStore($params);
        // return redirect('admin')->with('success', 'Berhasil menambahkan data');
        return redirect()->back()->with('success', 'Berhasil dihapus');
    }

    public function show($id)
    {
        $data = saran::find($id);
        return view('admin.saran.show', compact('data'));
    }

    public function delete($id)
    {
        $data = SaranService::delete($id);
        return redirect()->back()->with('success_hapus', 'Berhasil dihapus');
    }
}
