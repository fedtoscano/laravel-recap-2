@extends('layouts.app')

@section('content')
    {{-- @dd($recipes) --}}



    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>MUMI SUSHI</h1>
                <h3>RECIPES LIST</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cuisine</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Spicy</th>
                            <th scope="col">Vegan</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recipes as $recipe)
                            <tr>
                                <td>
                                    {{$recipe->id}}
                                </td>
                                <td>
                                    {{$recipe->kitchen->name}}
                                </td>
                                <td>
                                    {{$recipe->name}}
                                </td>
                                <td>
                                    {{$recipe->price}} EUR
                                </td>
                                <td>
                                    @if ($recipe->is_spicy==true)
                                    yes
                                    @else
                                    no
                                    @endif
                                </td>
                                <td>
                                    @if ($recipe->is_vegan==true)
                                    yes
                                    @else
                                    no
                                    @endif
                                </td>
                                <td>
                                    <button>Show</button>
                                    <button>Update</button>
                                    <button>Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
