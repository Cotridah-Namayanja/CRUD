@extends('layout.layout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2>Chef Details</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Full Name:</strong> {{ $chef->name }}</p>
                        <p><strong>Email:</strong> {{ $chef->email }}</p>
                        <p><strong>Phone:</strong> {{ $chef->phone }}</p>
                        <p><strong>Years of Experience:</strong> {{ $chef->experience }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('cheflist') }}" class="btn btn-secondary">Back to List</a>
                        <a href="{{ route('editchef', $chef->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
