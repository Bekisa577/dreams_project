@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Progress Record</h2>
    <form action="{{ url('/progress') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="girl_id">Girl</label>
            <select class="form-control" id="girl_id" name="girl_id" required>
                @foreach($girls as $girl)
                    <option value="{{ $girl->id }}">{{ $girl->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="event_id">Event</label>
            <select class="form-control" id="event_id" name="event_id" required>
                @foreach($events as $event)
                    <option value="{{ $event->id }}">{{ $event->event_type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="skills_attained">Skills Attained</label>
            <input type="text" class="form-control" id="skills_attained" name="skills_attained" required>
        </div>
        <div class="form-group">
            <label for="assessment_parameters">Assessment Parameters</label>
            <textarea class="form-control" id="assessment_parameters" name="assessment_parameters" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
