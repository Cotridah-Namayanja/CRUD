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
                                        <h2>Edit Recipe</h2>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('updaterecipe', $recipe->id) }}" method="POST">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="recipename" class="form-label">Recipe Name</label>
                                                <input type="text" class="form-control  @error('recipename') is-invalid @enderror"
                                                    id="recipename" name="recipename" value="{{ $recipe->recipename }}" required>
                                                @error('recipename')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="ingredient_name" class="form-label">Ingredients</label>
                                                <input type="text" class="form-control @error('ingredient_name') is-invalid @enderror"
                                                    id="ingredient_name" name="ingredient_name" value="{{ $recipe->ingredient_name }}" required>
                                                @error('ingredient_name')
                                                    < div class="invalid-feedback">{{ $message }}</>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="text" class="form-control @error('quantity') is-invalid @enderror"
                                                    id="quantity" name="quantity" value="{{ $recipe->quantity }}" required>
                                                @error('quantity')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="instructions" class="form-label">Instructions</label>
                                                <textarea class="form-control @error('instructions') is-invalid @enderror"
                                                    id="instructions" name="instructions" rows="4" required>{{ $recipe->instructions }}</textarea>
                                                @error('instructions')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="chef" class="form-label">Chef</label>
                                                <select class="form-control @error('instructions') is-invalid @enderror" name="chef" id="chef">
                                                    @if ($recipe->chef)
                                                    <option value='{{ $recipe->chef_id }}'>{{ $recipe->chef->name }}</option>
                                                    @else
                                                    <option>Select chef</option>
                                                    @endif
                                                    @foreach ($chefs as $chef)
                                                    <option value="{{ $chef->id }}"> {{ $chef->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Save Recipe</button>
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
