<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Girl;
use App\Models\Event;

class GirlController extends Controller
{
    // ... other methods

    public function registerToEvent(Request $request, Girl $girl)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
        ]);

        $event = Event::find($request->event_id);
        $girl->events()->attach($event);

        return redirect()->route('girls.show', $girl->id)->with('success', 'Girl registered to event successfully.');
    }
}
