@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-md-10 col-lg-10 col-xs-12">
            {!! Form::model($message, ['route' => 'messages.store']) !!}
            
            <div class="form-inline">
                <div class="form-group">
                    {!! Form::label('name', 'ハンドルネーム:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'autofocus' => 'autofocus']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'パスワード：') !!}
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                </div>
            </div>
                    
                <div class="form-group">
                    {!! Form::label('content', '本文内容') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>


@endsection