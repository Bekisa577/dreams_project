@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Progress</h2>
    <a href="{{ url('/progress/create') }}" class="btn btn-primary mb-3">Add New Progress Record</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Girl</th>
                <th>Event</th>
                <th>Skills Attained</th>
                <th>Assessment Parameters</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($progress as $record)
            <tr>
                <td>{{ $record->girl->name }}</td>
                <td>{{ $record->event->event_type }}</td>
                <td>{{ $record->skills_attained }}</td>
                <td>{{ $record->assessment_parameters }}</td>
                <td>
                    <a href="{{ url('/progress/' . $record->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('/progress/' . $record->id) }}" method="POST" style="display:inline;">
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
