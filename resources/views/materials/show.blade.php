@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Material Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $material->material_name }}
        </div>
        <div class="card-body">
            <p><strong>Target Audience:</strong> {{ $material->target_audience }}</p>
            <a href="{{ url('/materials') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
