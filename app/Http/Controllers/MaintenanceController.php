<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Equipment;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenances = Maintenance::with('equipment')->latest()->paginate(10);
        return view('maintenances.index', compact('maintenances'));
    }

    public function create()
    {
        $equipment = Equipment::all();
        return view('maintenances.create', compact('equipment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipment_id' => 'required|exists:equipment,id',
            'description' => 'required|string',
            'maintenance_date' => 'required|date',
            'cost' => 'nullable|numeric',
            'duration' => 'nullable|integer',
        ]);

        $request = $request->merge(['status' => 'repaired']);

        Maintenance::create($request->all());

        return redirect()->route('maintenances.index')->with('success', 'Jadwal pemeliharaan berhasil ditambahkan.');
    }

    public function show(Maintenance $maintenance)
    {
        return view('maintenances.show', compact('maintenance'));
    }

    public function edit(Maintenance $maintenance)
    {
        $equipment = Equipment::all();
        return view('maintenances.edit', compact('maintenance', 'equipment'));
    }

    public function update(Request $request, Maintenance $maintenance)
    {
        $request->validate([
            'equipment_id' => 'required|exists:equipment,id',
            'description' => 'required|string',
            'maintenance_date' => 'required|date',
            'cost' => 'nullable|numeric',
            'duration' => 'nullable|integer',
        ]);

        $maintenance->update($request->all());

        return redirect()->route('maintenances.index')->with('success', 'Data pemeliharaan berhasil diperbarui.');
    }

    public function fixed(Maintenance $maintenance)
    {
        $maintenance->update(['status' => 'fixed']);

        return redirect()->route('maintenances.index')->with('success', 'Equipment Berhasil Di Perbaiki.');
    }

    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();

        return redirect()->route('maintenances.index')->with('success', 'Data pemeliharaan berhasil dihapus.');
    }
}
