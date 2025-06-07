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
                                        <h2>Recipe Details</h2>
                                    </div>
                                            <div class="mb-3">
                                                <label for="recipename" class="form-label">Recipe Name:</label>
                                           {{ $recipe->recipename }}

                                            </div>

                                            <div class="mb-3">
                                                <label for="ingredient_name" class="form-label">Ingredients:</label>
                                                {{ $recipe->ingredient_name }}

                                            </div>

                                            <div class="mb-3">
                                                <label for="quantity" class="form-label">Quantity:</label>
                                               {{ $recipe->quantity }}

                                            </div>

                                            <div class="mb-3">
                                                <label for="instructions" class="form-label">Instructions:</label>
                                               {{ $recipe->instructions }}
                                            </div>

                                            <div class="mb-3">
                                                chef: {{ $recipe->chef?->name ?? "N/A"}},
                                                Contact:{{ $recipe->chef?->phone ?? "N/A"}}

                                            </div>

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
