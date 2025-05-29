@extends('layout.layout')

@section('content')
<div class="container my-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Chef List</h4>
            <a class="btn btn-light" href="{{ route('addchef') }}">Add Chef</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Experience</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($chefs as $index => $chef)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $chef->name }}</td>
                            <td>{{ $chef->email }}</td>
                            <td>{{ $chef->experience }} years</td>
                            <td>
                                <a href="{{ route('editchef', $chef->id) }}" class="btn btn-sm btn-success">Edit</a>
                                 <a href="{{ route('showchef', $chef->id) }}" class="btn btn-sm btn-info">Details</a>
                                <form action="{{ route('deletechef', $chef->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                         @endforeach
                        @if(count($chefs) == 0)
                        <tr>
                            <td colspan="5" class="text-center text-muted">No chefs available.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
