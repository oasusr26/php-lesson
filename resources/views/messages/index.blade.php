@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3"><img src="/images/phone_1_pc.png" alt=""></div>
            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2"><img src="/images/phone_2_pc.png" alt=""></div>
            <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3"><img src="/images/phone_3_pc.png" alt=""></div>
        </div>
    </div>
        
    <h1>投稿一覧</h1>

    @if (count($messages) > 0)
    
    
    <table class="table table-striped table-bordered table-hover">
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
    
    <div class="container" style="padding: 20px 0;">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <ul	class="pagination">		
                    <li	class="disabled"><a	href="">&laquo;</a></li>	
                    <li	class="active"><a href="">1</a></li>	
                    <li><a href="">2</a></li>		
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="">&raquo;</a></li>		
                </ul>
            </div>
        </div>
    </div>


@endsection