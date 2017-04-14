@extends('layouts.app')

@section('content')

    <h1>{{ $message->id }}書き込み編集ページ</h1>

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}

    
        <div class="form-inline">        
            <div class="form-group">
                {!! Form::label('name', 'ハンドルネーム：') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
    
            <div class="form-group">
                {!! Form::label('password', 'パスワード：') !!}
                {!! Form::text('password', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('content', '本文') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('編集', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
        
    
@endsection