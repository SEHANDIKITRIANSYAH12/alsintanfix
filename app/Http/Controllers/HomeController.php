<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Maintenance;
use App\Models\Repair;
use App\Models\Material;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $equipments = Equipment::all(); // Atau gunakan pagination dengan paginate(10)
        $maintenances = Maintenance::latest()->take(5)->get(); // Data terbaru
        $repairs = Repair::count(); // Total repairs


        // Kirim data ke view
        return view('home', compact('equipments', 'maintenances', 'repairs', ));
    }
}
