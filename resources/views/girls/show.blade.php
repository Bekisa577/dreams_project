@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Girl Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $girl->name }}
        </div>
        <div class="card-body">
            <p><strong>Address:</strong> {{ $girl->address }}</p>
            <p><strong>Age Group:</strong> {{ $girl->age_group }}</p>
            <p><strong>HIV Status:</strong> {{ $girl->hiv_status }}</p>
            <p><strong>Date of Birth:</strong> {{ $girl->dob }}</p>
            <p><strong>Village:</strong> {{ $girl->village }}</p>
            <p><strong>Schooling Status:</strong> {{ $girl->schooling_status }}</p>

            <h3>Events Attended</h3>
            <ul>
                @foreach ($girl->events as $event)
                    <li>{{ $event->event_type }} ({{ $event->start_date }} - {{ $event->end_date }})</li>
                @endforeach
            </ul>

            <h3>Register to Event</h3>
            <form action="{{ route('girls.register', $girl->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="event_id">Event</label>
                    <select class="form-control" id="event_id" name="event_id">
                        @foreach ($events as $event)
                            <option value="{{ $event->id }}">{{ $event->event_type }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
