<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Posisi;

class KaryawanController extends Controller
{
    public function index() {
        // Get all data karyawan
        $karyawans = Karyawan::all();
        // dd($karyawans);

        return view('project-karyawan', ['karyawanList' => $karyawans]);
    }

    public function addKaryawan() {
        // Get data posisi
        $posisis = Posisi::select('id', 'posisi_name')->get();
        // dd($karyawans);

        return view('project-karyawan-add', ['posisiList' => $posisis]);
    }

    public function saveKaryawan(Request $request) {
        // Set Kolom yang boleh diisi pada model
        $karyawan = Karyawan::create($request->all());

        return redirect('/karyawan');
    }

    public function editKaryawan(Request $request, $id) {
        // Load Data by Id
        // $karyawan = Karyawan::find($id)
        // $karyawan = Karyawan::findOrFail($id)

        // Load Data by Id + data belogsTo
        $karyawan = Karyawan::with('posisis')->findOrFail($id);
        $posisis = Posisi::select('id', 'posisi_name')->get();
        return view('project-karyawan-edit', ['karyawan' => $karyawan, 'posisiList' => $posisis]);
    }

    public function updateKaryawan(Request $request, $id) {
        // Load Data by Id
        $karyawan = Karyawan::findOrFail($id);

        // Eloquent
        $karyawan->update($request->all());

        return redirect('/karyawan');
    }

    public function deleteKaryawan($id) {
        $karyawan = Karyawan::findOrFail($id);

        return view('project-karyawan-delete', ['karyawan' => $karyawan]);
    }

    public function destroyKaryawan($id) {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect('/karyawan');
    }
}

