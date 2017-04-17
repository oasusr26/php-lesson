@extends('layouts.app')

@section('content')
        
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
    
    
    <!--<form action="create.blade.php" method="post">-->
    <!--    <div class="form-inline">-->
    <!--        <div class="form-group">-->
    <!--            <label for="name">名前：</label>-->
    <!--            <input type="text" name="name" id="name" placeholder="ハンドルネーム" class="form-control" autofocus>-->
    <!--        </div>-->
    <!--        <div class="form-group">-->
    <!--            <label for="passwod">パスワード：</label>-->
    <!--            <input type="password" name="passowrd" id="password" placeholder="必須項目" class="form-control">-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="form-group">-->
    <!--        <label for="content">本文：</label>-->
    <!--        <textarea name="content" id="content"  rows="10" placeholder="ここに本文を入力してください。（255文字以内）" class="form-control"></textarea>-->
    <!--    </div>-->
        <!--<button type="button" class="btn btn-success"><a href="create.blade.php">投稿</a></button>-->
        {!! link_to_route('messages.create', '新規作成ページへ', null, ['class' => 'btn btn-primary']) !!}
    <!--</form>-->
    
    
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