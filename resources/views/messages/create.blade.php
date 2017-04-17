@extends('layouts.app')

@section('content')

    <form method="post" action="messages.store">
        <div class="form-group">
            <label for="name">ハンドルネーム：</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="100文字以内" autofocus>
        </div>
        <div class="form-group">
            <label for="password">パスワード：</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="パスワード">
        </div>
        <div class="form-group">
            <label for="content">本文：</label>
            <input type="textarea" in="content" name="content" class="form-control" pladeholder="255文字以内で入力してください。">
        </div>
            <button type="submit" value="送信" class="btn btn-success"></button>
    </form>
    
@endsection