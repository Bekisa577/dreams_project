
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Event Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $event->event_type }}
        </div>
        <div class="card-body">
            <p><strong>Learning Outcomes:</strong> {{ $event->learning_outcomes }}</p>
            <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
            <p><strong>End Date:</strong> {{ $event->end_date }}</p>
            <a href="{{ url('/events') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection

