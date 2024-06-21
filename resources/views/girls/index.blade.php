@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Enrolled Girls</h2>
    <a href="{{ url('/girls/create') }}" class="btn btn-primary mb-3">Add New Girl</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Age Group</th>
                <th>HIV Status</th>
                <th>DOB</th>
                <th>Village</th>
                <th>Schooling Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($girls as $girl)
            <tr>
                <td>{{ $girl->name }}</td>
                <td>{{ $girl->address }}</td>
                <td>{{ $girl->age_group }}</td>
                <td>{{ $girl->hiv_status }}</td>
                <td>{{ $girl->dob }}</td>
                <td>{{ $girl->village }}</td>
                <td>{{ $girl->schooling_status }}</td>
                <td>
                    <a href="{{ url('/girls/' . $girl->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('/girls/' . $girl->id) }}" method="POST" style="display:inline;">
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
