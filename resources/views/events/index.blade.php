@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Events</h2>
    <a href="{{ url('/events/create') }}" class="btn btn-primary mb-3">Add New Event</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Event Type</th>
                <th>Learning Outcomes</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->event_type }}</td>
                <td>{{ $event->learning_outcomes }}</td>
                <td>{{ $event->start_date }}</td>
                <td>{{ $event->end_date }}</td>
                <td>
                    <a href="{{ url('/events/' . $event->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('/events/' . $event->id) }}" method="POST" style="display:inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
