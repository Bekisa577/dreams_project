@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Material</h2>
    <form action="{{ url('/materials') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="material_name">Material Name</label>
            <input type="text" class="form-control" id="material_name" name="material_name" required>
        </div>
        <div class="form-group">
            <label for="target_audience">Target Audience</label>
            <select class="form-control" id="target_audience" name="target_audience" required>
                <option value="10-14">10-14</option>
                <option value="15-19">15-19</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
