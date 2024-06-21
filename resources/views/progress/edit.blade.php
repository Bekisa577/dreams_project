@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Progress Record</h2>
    <form action="{{ url('/progress/' . $record->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="girl_id">Girl</label>
            <select class="form-control" id="girl_id" name="girl_id" required>
                @foreach($girls as $girl)
                    <option value="{{ $girl->id }}" {{ $record->girl_id == $girl->id ? 'selected' : '' }}>{{ $girl->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="event_id">Event</label>
            <select class="form-control" id="event_id" name="event_id" required>
                @foreach($events as $event)
                    <option value="{{ $event->id }}" {{ $record->event_id == $event->id ? 'selected' : '' }}>{{ $event->event_type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="skills_attained">Skills Attained</label>
            <input type="text" class="form-control" id="skills_attained" name="skills_attained" value="{{ $record->skills_attained }}" required>
        </div>
        <div class="form-group">
            <label for="assessment_parameters">Assessment Parameters</label>
            <textarea class="form-control" id="assessment_parameters" name="assessment_parameters" required>{{ $record->assessment_parameters }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
