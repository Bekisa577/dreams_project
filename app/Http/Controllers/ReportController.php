<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Girl;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $girlsCount = Girl::count();
        $eventsCount = Event::count();

        $girlsByAgeGroup = Girl::select('age_group', DB::raw('count(*) as total'))
                                ->groupBy('age_group')
                                ->get();

        $eventsByType = Event::select('event_type', DB::raw('count(*) as total'))
                             ->groupBy('event_type')
                             ->get();

        return view('reports.index', compact('girlsCount', 'eventsCount', 'girlsByAgeGroup', 'eventsByType'));
    }
}
