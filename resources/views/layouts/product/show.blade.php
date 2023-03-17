@extends('layout.app')

@section('content')

<h1>Voir produits</h1>
</hr>

<div class="bg-dark text-white rounded p-3">
    <h5 class= "text-warning">Name</h5>
    <p class="fw-bold">{{$product ->name}}</p>

    <h5 class= "text-warning">price</h5>
    <p class="fw-bold">{{$product ->price}}</p>

    <h5 class= "text-warning">Description</h5>
    <p class="fw-bold">{{$product ->description}}</p>
</div>

@endsection