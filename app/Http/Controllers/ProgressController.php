<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\Girl;
use App\Models\Event;

class ProgressController extends Controller
{
    public function index()
    {
        $progress = Progress::with('girl', 'event')->get();
        return view('progress.index', compact('progress'));
    }

    public function create()
    {
        $girls = Girl::all();
        $events = Event::all();
        return view('progress.create', compact('girls', 'events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'girl_id' => 'required|exists:girls,id',
            'event_id' => 'required|exists:events,id',
            'skills_attained' => 'required',
            'assessment_parameters' => 'required',
        ]);

        Progress::create($request->all());

        return redirect()->route('progress.index')->with('success', 'Progress record created successfully.');
    }

    public function show(Progress $progress)
    {
        $progress->load('girl', 'event');
        return view('progress.show', compact('progress'));
    }

    public function edit(Progress $progress)
    {
        $girls = Girl::all();
        $events = Event::all();
        return view('progress.edit', compact('progress', 'girls', 'events'));
    }

    public function update(Request $request, Progress $progress)
    {
        $request->validate([
            'girl_id' => 'required|exists:girls,id',
            'event_id' => 'required|exists:events,id',
            'skills_attained' => 'required',
            'assessment_parameters' => 'required',
        ]);

        $progress->update($request->all());

        return redirect()->route('progress.index')->with('success', 'Progress record updated successfully.');
    }

    public function destroy(Progress $progress)
    {
        $progress->delete();

        return redirect()->route('progress.index')->with('success', 'Progress record deleted successfully.');
    }
}
