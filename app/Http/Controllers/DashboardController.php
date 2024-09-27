<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DataPilar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
         // Total number of pillars
         $totalPillars = DataPilar::count();

         // Pillar conditions breakdown
         $pillarsByCondition = DataPilar::select('kondisi', DB::raw('count(*) as total'))
                                 ->groupBy('kondisi')
                                 ->get();
 
         // Last updated record
         $lastUpdated = DataPilar::latest('updated_at')->first()->updated_at ?? null;
 
         return view('index', [
             'totalPillars' => $totalPillars,
             'pillarsByCondition' => $pillarsByCondition,
             'lastUpdated' => $lastUpdated ? Carbon::parse($lastUpdated)->format('d M Y, H:i:s') : 'No updates yet',
         ]);
    }
}
