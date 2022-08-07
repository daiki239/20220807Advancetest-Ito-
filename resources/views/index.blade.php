<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="/css/style.css">
    
</head>
<body>
    @php
$title = 'お問い合わせ';
@endphp

@extends('layout')

@section('content')
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
    <div class="container">
        {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前（10文字以内）<span class="badge badge-danger ml-1">※  {{ Form::text('name', null, ['class' => 'form-control']) }}
                      {{ Form::text('name', null, ['class' => 'form-control']) }}</span></p>
               
            </div>
            @if ($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
            @endif
　　　　　　　
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">※
                    <label>{{ Form::radio('gender', "男性") }}男性</label>
                    <label>{{ Form::radio('gender', "女性") }}女性</label>
                </span></p>
                
            </div>
            @if ($errors->has('gender'))
                <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
            @endif


            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">※{{ Form::text('email', null, ['class' => 'form-control']) }}</span></p>
            
            </div>
            @if ($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1">※</span>{{ Form::text('postcode', null, ['class' => 'form-control']) }}</p>
            </div>
            @if ($errors->has('poctcode'))
                <p class="alert alert-danger">{{ $errors->first('postcode') }}</p>
            @endif

               <div class="form-group row">
                <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1">※</span> {{ Form::text('address', null, ['class' => 'form-control']) }}</p>
            </div>
            @if ($errors->has('address'))
                <p class="alert alert-danger">{{ $errors->first('address') }}</p>
            @endif

               <div class="form-group row">
                <p class="col-sm-4 col-form-label">建物名<span class="badge badge-danger ml-1">※</span>{{ Form::text('building_game', null, ['class' => 'form-control']) }}</p>
            </div>
            @if ($errors->has('building_game'))
                <p class="alert alert-danger">{{ $errors->first('building_game') }}</p>
            @endif
　　　　　　
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">ご意見<span class="badge badge-danger ml-1">※</span> {{ Form::textarea('contents', null, ['class' => 'form-control']) }}</p>
            </div>
            @if ($errors->has('text'))
                <p class="alert alert-danger">{{ $errors->first('contents') }}</p>
            @endif
            
            <div class="text-center">
                {{ Form::submit('確認', ['class' => 'btn btn-primary']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
</body>
</html>