<?php

// app/Http/Controllers/UsageController.php

// app/Http/Controllers/UsageController.php

namespace App\Http\Controllers;

use App\Models\Usage;
use App\Models\Equipment;
use App\Models\Farmer;  // Import model Farmer
use Illuminate\Http\Request;

class UsageController extends Controller
{
    public function create()
    {
        $equipment = Equipment::where('status', 'available')->get();
        $farmers = Farmer::all();  // Ambil data petani untuk dropdown (optional)
        return view('usages.create', compact('equipment', 'farmers'));  // Pass farmers to view
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipment_id' => 'required|exists:equipment,id',
            'farmer_id' => 'required|exists:farmers,id',
            'usage_date' => 'required|date',
            'duration' => 'required|numeric',
            'area' => 'required|numeric',
            'result' => 'required|string',
        ]);

        Usage::create($request->all());

        return redirect()->route('usages.index')->with('success', 'Pemesanan Alsintan berhasil dibuat.');
    }

    public function index()
    {
        $usages = Usage::with('equipment', 'farmer')->latest()->paginate(10);
        return view('usages.index', compact('usages'));
    }

    public function confirm(Usage $usage)
    {
        return view('usages.confirm', compact('usage'));
    }

    public function update(Request $request, Usage $usage)
    {
        $usage->update(['status' => 'confirmed']);
        return redirect()->route('usages.index')->with('success', 'Penggunaan Alsintan berhasil dikonfirmasi.');
    }
}
