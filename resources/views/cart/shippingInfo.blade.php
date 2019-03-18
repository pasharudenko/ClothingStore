@extends('layouts.layout')
@section('content')

<div class="row">
    <h3>Shipping info</h3>
{!! Form::open(['method' => 'POST', 'action' => 'AddressController@store']) !!}
    <div class="form-group">
        {!! Form::label('country', 'Country:') !!}
        {!! Form::text('country', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::submit('Submit') !!}
    </div>
{!! Form::close() !!}
</div>


@endsection