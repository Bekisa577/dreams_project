@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Event</h2>
    <form action="{{ url('/events/' . $event->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="event_type">Event Type</label>
            <input type="text" class="form-control" id="event_type" name="event_type" value="{{ $event->event_type }}" required>
        </div>
        <div class="form-group">
            <label for="learning_outcomes">Learning Outcomes</label>
            <textarea class="form-control" id="learning_outcomes" name="learning_outcomes" required>{{ $event->learning_outcomes }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start
