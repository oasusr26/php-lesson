@extends('layouts.app')

@section('content')

    <h1>詳細ページ</h1>
    
    
    
    <div class="row">
        <div class="col-xs-12">
            <form method="delete" action="delete.blade.php">
                <div class="form-group">
                    <label for="password">パスワード：</label>
                    <input type="password" id="password" name="password" class="form-control" autofocus>
                </div>
            <input type="submit" value="送信" class="btn btn-success">
            </form>
        </div>
    </div>


@endsection