@extends('layouts.layout')
@section('content')
<h3>Shoping cart</h3>
    <ol>

    </ol>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $cartItem)
        <tr>
                <td>{{$cartItem->name}}</td>
                <td>{{$cartItem->price}}</td>
            {!! Form::open(['method' => 'PUT', 'route' => ['cart.update', $cartItem->rowId] ]) !!}
                <td width="50px">
                    <input type="text" value="{{$cartItem->qty}}" name="qty">


                </td>
                <td>
                    {!! Form::select('size', ['small' => 'Small', 'medium' => 'Medium','big' => 'Big'], $cartItem->options->size)!!}
                </td>
            <td>

                <input type="submit" class="btn btn-sm btn-default">
                {!! Form::close() !!}
                {!! Form::open(['method' => 'DELETE', 'route' => ['cart.destroy', $cartItem->rowId]]) !!}
                <input type="submit" value="Delete">
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td>
                Tax {{Cart::tax()}}<br>
                Subtotal {{Cart::subtotal()}}<br>
                Total {{Cart::total()}}<br>
            </td>
            <td>{{Cart::count()}}</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
{!! Form::open(['method' => 'GET', 'route' => 'shipping-info']) !!}
<input type="submit" >
{!! Form::close() !!}




@endsection