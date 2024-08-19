@extends('layouts.app')

@section('content')
{{-- @dd($singleRecipe) --}}

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card w-50">
                <div class="card-body">
                    <h5 class="card-title">{{$singleRecipe->name}}</h5>
                    <h5 class="card-title"><em>{{$singleRecipe->kitchen->name}} cuisine</em></h5>
                    @if ($singleRecipe->is_vegan==true)
                        <span class="badge rounded-pill text-bg-success">vegan</span>
                    @endif
                    @if ($singleRecipe->is_spicy==true)
                    <span class="badge rounded-pill text-bg-danger">spicy</span>
                    @endif

                    <h4 class="card-text">Ingredients</h4>
                    <ul>
                        @foreach ($ingredientList as $ingredient)
                            <li>
                                {{$ingredient->name}}
                            </li>
                        @endforeach
                    </ul>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
