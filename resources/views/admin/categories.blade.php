@extends('admin.layout.admin')
@section('content')
    <h3>Categories</h3>
    <div class="row">
        <div class="col-md-6">
            <h3>Form</h3>
            {!! Form::open(['method' => 'POST', 'action' => 'CategoriesController@store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Submit' ,['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-6">
        @foreach($categories as $category)
            <p><a href="categories/{{$category->id}}">{{$category->name}}</a></p>
                <p><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></p>
            @endforeach
        </div>
    </div>
@endsection