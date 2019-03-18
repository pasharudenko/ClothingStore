@extends('layouts.layout')
@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Hey! Welcome to MC- Mykey's Store
            </strong>
        </h2>
        <br>
        <a href={{route('shirts')}}><button class="button large">Check out My Shirts</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            MyKey&rsquo;s Latest Shirts
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        @foreach($products as $product)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart" href="{{route('cart.edit', $product->id)}}">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="{{asset('images').'/'.$product->photo->name}}"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                       {{$product->name}}
                    </h3>
                </a>
                <h5>
                    ${{$product->price}}
                </h5>
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
@endsection