@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Program Reports and Dashboard</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">General Statistics</div>
                <div class="card-body">
                    <p><strong>Total Girls Enrolled:</strong> {{ $girlsCount }}</p>
                    <p><strong>Total Events Organized:</strong> {{ $eventsCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Girls by Age Group</div>
                <div class="card-body">
                    <ul>
                        @foreach ($girlsByAgeGroup as $group)
                            <li>{{ $group->age_group }}: {{ $group->total }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Events by Type</div>
                <div class="card-body">
                    <ul>
                        @foreach ($eventsByType as $eventType)
                            <li>{{ $eventType->event_type }}: {{ $eventType->total }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
