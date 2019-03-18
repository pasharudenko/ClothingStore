@extends('layouts.layout')
@section('content')
    <div class="row">
        @foreach($products as $product)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart" href="{{route('cart.edit', $product->id)}}">
                        Add to Cart
                    </a>
                    <a href="{{route('shirt')}}">
                        <img src="{{asset('images').'/'.$product->photo->name}}"/>
                    </a>
                </div>
                <a href="{{route('shirt')}}">
                    <h3>
                        {{$product->name}}
                    </h3>
                </a>
                <h5>
                   {{$product->price}} $
                </h5>
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
@endsection