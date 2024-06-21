@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Materials</h2>
    <a href="{{ url('/materials/create') }}" class="btn btn-primary mb-3">Add New Material</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Material Name</th>
                <th>Target Audience</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materials as $material)
            <tr>
                <td>{{ $material->material_name }}</td>
                <td>{{ $material->target_audience }}</td>
                <td>
                    <a href="{{ url('/materials/' . $material->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('/materials/' . $material->id) }}" method="POST" style="display:inline;">
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
