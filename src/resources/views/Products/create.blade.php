@extends('layouts')

@section('content')

    {{Form::open(['route' => 'create', 'method' => 'post']) }}
    <div class="form-group">
        <label for="formGroupExampleInput">商品名</label>
        {{Form::text('product_name','', ['id' => 'formGroupExampleInput','class' => 'form-control' ,'placeholder' => '商品名']) }}
    </div>

    {{Form::submit('登録する', ['class' =>'btn btn-outline-secondary'])}}
    {{Form::close()}}
@endsection
