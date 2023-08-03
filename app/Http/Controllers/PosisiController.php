<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posisi;

class PosisiController extends Controller
{
    public function index() {
        $posisis = Posisi::all();
        return view('posisi', ['posisis' => $posisis]);
    }

    public function add() {
        $posisis = Posisi::select('id', 'posisi_name')->get();
        // dd($posisis);
        return view('posisi-add', ['posisis' => $posisis]);
    }

    public function save(Request $request) {
        $posisi = Posisi::create($request->all());
        return redirect('/posisi');
    }

    public function edit(Request $request, $id) {
        // By id
        $posisi = Posisi::findOrFail($id);
        return view('posisi-edit', ['posisi' => $posisi]);
    }

    public function update(Request $request, $id) {
        // By id
        $posisi = Posisi::findOrFail($id);
        $posisi->update($request->all());

        return redirect('/posisi');
    }

    public function destroy($id) {
        $posisi = Posisi::findOrFail($id);
        $posisi->delete();

        return redirect('/posisi');
    }
}
