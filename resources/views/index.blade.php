@extends('layout.layout')
@section('content')
      <div class="container">
        <div class="row">
            <div class="col-md12">
                <div class="card">
                    <div class="card d-flex w-50">
                        <a class="btn btn-primary" href="{{ route('createrecipe') }}" role="button">Add Recipe</a>

                    </div>
                    <div class="card">
                        <table class="table table-stiped table-boardered" >
                            <thead>
                                <tr>

                                    <th>Recipe_name</th>
                                    <th>ingredient_name</th>
                                    <th>quantity</th>
                                    <th>instructions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $recipes as $recipe )

                                <tr>
                                    <td>{{  $recipe->recipename }}</td>
                                    <td>{{  $recipe->ingredient_name }}</td>
                                    <td>{{ $recipe->quantity }}</td>
                                    <td>{{ $recipe->instructions }}</td>
                                    <td>
                                        <a href="{{ route('editrecipe', $recipe->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('showrecipe', $recipe->id) }}" class="btn btn-info">Details</a>


                                        <form action="{{ route('deleterecipe', $recipe->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class="btn btn-danger">Delete</a>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
@endsection
