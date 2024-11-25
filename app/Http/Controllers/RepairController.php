<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index()
    {
        $repairs = Repair::all();
        return view('repairs.index', compact('repairs'));
    }

    public function create()
    {
        return view('repairs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required|string',
            'tanggal_perbaikan' => 'required|date',
            'kebutuhan_perbaikan' => 'required|string',
            'deskripsi_perbaikan' => 'nullable|string',
        ]);

        Repair::create($request->all());

        return redirect()->route('repairs.index')->with('success', 'Data perbaikan berhasil ditambahkan.');
    }

    public function edit(Repair $repair)
    {
        return view('repairs.edit', compact('repair'));
    }

    public function update(Request $request, Repair $repair)
    {
        $request->validate([
            'nama_alat' => 'required|string',
            'tanggal_perbaikan' => 'required|date',
            'kebutuhan_perbaikan' => 'required|string',
            'deskripsi_perbaikan' => 'nullable|string',
        ]);

        $repair->update($request->all());

        return redirect()->route('repairs.index')->with('success', 'Data perbaikan berhasil diperbarui.');
    }

    public function destroy(Repair $repair)
    {
        $repair->delete();

        return redirect()->route('repairs.index')->with('success', 'Data perbaikan berhasil dihapus.');
    }
}
