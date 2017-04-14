@extends('layouts.app')

@section('content')

    <h1>{{ $message->id }}の投稿の削除</h1>
    
    {!! Form::model($message, ['route' => 'messages.destroy'], 'method' => 'delete') !!}
    
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    {!! Form::label('password', 'パスワード入力欄：') !!}
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        {!! Form::submit('削除', ['class' => 'btn btn-warning']) !!}
    
    {!! Form::close() !!}


@endsection