@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped table-bordered table-hover table-contented">
            <thead>
                <tr class="warning">
                    <th>書き込み番号</th><th>日時</th><th>ハンドルネーム</th><th>本文</th>
                </tr>
            </thead>
            @foreach ($messages as $message)
            <tbody>
                <tr>
                    <td>{{ $message->id }}</td><td>{{ $message->created_at }}</td><td>{{ $message->name }}</td><td>{{ $message->content }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    @endif
    
    <form method="delete" action="messages/delete.blade.php">
    
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    {!! Form::label('password', 'パスワード入力欄：') !!}
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        {!! Form::submit('削除', ['class' => 'btn btn-warning']) !!}
    
    </form>


@endsection