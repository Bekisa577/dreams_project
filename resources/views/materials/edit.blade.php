@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Material</h2>
    <form action="{{ url('/materials/' . $material->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="material_name">Material Name</label>
            <input type="text" class="form-control" id="material_name" name="material_name" value="{{ $material->material_name }}" required>
        </div>
        <div class="form-group">
            <label for="target_audience">Target Audience</label>
            <select class="form-control" id="target_audience" name="target_audience" required>
                <option value="10-14" {{ $material->target_audience == '10-14' ? 'selected' : '' }}>10-14</option>
                <option value="15-19" {{ $material->target_audience == '15-19' ? 'selected' : '' }}>15-19</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
