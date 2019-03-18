@extends('admin.layout.admin')
@section('content')
    <h3>Create Product</h3>
    {!! Form::open(['method' => 'POST', 'action' => 'ProductsController@store', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('size', 'Size:') !!}
        {!! Form::select('size', ['small' => 'small', 'medium' => 'medium', 'big' => 'big'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo', 'Photo:') !!}
        {!! Form::file('photo_id',  ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Select category']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
@endsection