@extends('admin.layout.admin')
@section('content')
    <h3>Products</h3>
    @foreach($products as $product)
        <p>{{$product->name}}</p>
    @endforeach
@endsection