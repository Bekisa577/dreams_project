@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Girl</h2>
    <form action="{{ url('/girls/' . $girl->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $girl->name }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $girl->address }}" required>
        </div>
        <div class="form-group">
            <label for="age_group">Age Group</label>
            <select class="form-control" id="age_group" name="age_group" required>
                <option value="10-14" {{ $girl->age_group == '10-14' ? 'selected' : '' }}>10-14</option>
                <option value="15-19" {{ $girl->age_group == '15-19' ? 'selected' : '' }}>15-19</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hiv_status">HIV Status</label>
            <input type="text" class="form-control" id="hiv_status" name="hiv_status" value="{{ $girl->hiv_status }}" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ $girl->dob }}" required>
        </div>
        <div class="form-group">
            <label for="village">Village</label>
            <input type="text" class="form-control" id="village" name="village" value="{{ $girl->village }}" required>
        </div>
        <div class="form-group">
            <label for="schooling_status">Schooling Status</label>
            <input type="text" class="form-control" id="schooling_status" name="schooling_status" value="{{ $girl->schooling_status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
