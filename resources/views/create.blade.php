@extends('layout.layout')
@section('content')
      <div class="container">
        <div class="row">
            <div class="col-md12">
                <div class="card">
                    <div class="card h">
                     {{-- <a href="" class="btn btn-primary float-end">Add Recipe</a> --}}
                    </div>
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Create New Recipe</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('saverecipe') }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="recipename" class="form-label">Recipe Name</label>
                                                <input type="text" class="form-control @error('recipename') is-invalid @enderror"
                                                    id="recipename" name="recipename" value="{{ old('recipename') }}" required>
                                                @error('recipename')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="ingredient_name" class="form-label">Ingredients</label>
                                                <input type="text" class="form-control @error('ingredient_name') is-invalid @enderror"
                                                    id="ingredient_name" name="ingredient_name" value="{{ old('ingredient_name') }}" required>
                                                @error('ingredient_name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="text" class="form-control @error('quantity') is-invalid @enderror"
                                                    id="quantity" name="quantity" value="{{ old('quantity') }}" required>
                                                @error('quantity')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="instructions" class="form-label">Instructions</label>
                                                <textarea class="form-control @error('instructions') is-invalid @enderror"
                                                    id="instructions" name="instructions" rows="4" required>{{ old('instructions') }}</textarea>
                                                @error('instructions')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="chef" class="form-label">Chef</label>
                                                <select name="chef" id="chef">
                                                    <option>Select chef</option>
                                                    @foreach ($chefs as $chef)
                                                    <option value="{{ $chef->id }}"> {{ $chef->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Create Recipe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection
