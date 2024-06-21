@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Progress Record Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $record->girl->name }} - {{ $record->event->event_type }}
        </div>
        <div class="card-body">
            <p><strong>Skills Attained:</strong> {{ $record->skills_attained }}</p>
            <p><strong>Assessment Parameters:</strong> {{ $record->assessment_parameters }}</p>
            <a href="{{ url('/progress') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
