@extends('layouts.app')

@section('content')

    <form method="post" action="index.blade.php">
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
            <textarea id="content" name="content" rows="7" class="form-control" placeholder="255文字以内で入力してください。"></textarea>
        </div>
            <button type="submit" value="投稿" class="btn btn-success">投稿</button>
    </form>
    
@endsection