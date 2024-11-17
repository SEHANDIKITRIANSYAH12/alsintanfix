<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::all();
        return view('equipment.index', compact('equipment'));
    }

    public function create()
    {
        return view('equipment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'alsintan' => 'required',
            'type' => 'nullable|string',
            'tahun_terbit' => 'nullable|integer',
            'hp' => 'nullable|numeric',
            'kondisi_baik' => 'required|integer',
            'kondisi_rusak' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        Equipment::create($request->all());

        return redirect()->route('equipment.index')->with('success', 'Data Alsintan berhasil ditambahkan.');
    }

    public function edit(Equipment $equipment)
    {
        return view('equipment.edit', compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'alsintan' => 'required',
            'type' => 'nullable|string',
            'tahun_terbit' => 'nullable|integer',
            'hp' => 'nullable|numeric',
            'kondisi_baik' => 'required|integer',
            'kondisi_rusak' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $equipment->update($request->all());

        return redirect()->route('equipment.index')->with('success', 'Data Alsintan berhasil diupdate.');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();

        return redirect()->route('equipment.index')->with('success', 'Data Alsintan berhasil dihapus.');
    }
}
