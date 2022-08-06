<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ - 確認</title>
</head>
<body>
    @php
$title = 'お問い合わせ - 確認';
@endphp

@extends('layout')

@section('content')
    <h1 class="text-center mt-2 mb-5">内容確認</h1>
    <div class="container">
        {!! Form::open(['route' => 'complete', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前（10文字以内） {{ $inputs['name'] }}<span class="badge badge-danger ml-1"></span></p>
                <div class="col-sm-8">
                </div>
            </div>
            <input type="hidden" name="name" value="{{ $inputs['name'] }}">
            
                <div class="form-group row">
                <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1"></span> {{ $inputs['gender'] }}</p>
                <div class="col-sm-8">
                </div>
            </div>
            <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">


            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ $inputs['email'] }}
                </div>
            </div>
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1"></span>{{ $inputs['postcode'] }}</p>
                <div class="col-sm-8">
                    
                </div>
            </div>
            <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1"></span> {{ $inputs['address'] }}</p>
                <div class="col-sm-8">
                   
                </div>
            </div>
            <input type="hidden" name="address" value="{{ $inputs['address'] }}">

             <div class="form-group row">
                <p class="col-sm-4 col-form-label">建物名<span class="badge badge-danger ml-1"></span>{{ $inputs['building_game'] }}</p>
                <div class="col-sm-8">
                    
                </div>
            </div>
            <input type="hidden" name="building_game" value="{{ $inputs['building_game'] }}">

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1"></span>{{ $inputs['contents'] }}</p>
                <div class="col-sm-8">
                    
                </div>
            </div>
            <input type="hidden" name="contents" value="{{ $inputs['contents'] }}">
            
          

            <div class="text-center">
                <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
                <button name="action" type="submit" value="return" class="btn btn-dark">修正する</button>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
</body>
</html>