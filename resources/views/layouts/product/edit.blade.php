@extends('layouts.app')

@section('content')

<h1> Product Update </h1>
<hr/>

@if($error->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors ->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update', product->id) }" }method="post">
@csrf
@method('put')
<input type="text" name="name" class="form-control mb-3" placeholder="Product Name" value={{$product->name}}"/>

<input type="number" name="price" class="form-control mb-3" placeholder="Price $€" value={{$product->price}}"/>

<textarea class="form-control mb-3" name="description" rows="4" PLACEHOLDER="Description">{{$product -> description}}</textarea>

<buttom class="btn btn-primary float-end px-5" type="submit">submit</buttom>

</form>
@endsection
