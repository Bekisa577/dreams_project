@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Girl</h2>
    <form action="{{ url('/girls') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="age_group">Age Group</label>
            <select class="form-control" id="age_group" name="age_group" required>
                <option value="10-14">10-14</option>
                <option value="15-19">15-19</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hiv_status">HIV Status</label>
            <input type="text" class="form-control" id="hiv_status" name="hiv_status" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="village">Village</label>
            <input type="text" class="form-control" id="village" name="village" required>
        </div>
        <div class="form-group">
            <label for="schooling_status">Schooling Status</label>
            <input type="text" class="form-control" id="schooling_status" name="schooling_status" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
