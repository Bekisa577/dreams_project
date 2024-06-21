@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Event</h2>
    <form action="{{ url('/events') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="event_type">Event Type</label>
            <input type="text" class="form-control" id="event_type" name="event_type" required>
        </div>
        <div class="form-group">
            <label for="learning_outcomes">Learning Outcomes</label>
            <textarea class="form-control" id="learning_outcomes" name="learning_outcomes" required></textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
