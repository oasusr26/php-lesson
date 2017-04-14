<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="掲示板, 猫飯店, message-board">
        <meta name="description" content="掲示板＠猫飯店のサイトです！書き込みはどなたでもご自由にどうぞ！！">
        <meta name="copyright" content="掲示板＠猫飯店">
        <meta name="author" content="oasusr26">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>掲示板＠猫飯店</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div id="header" style="background: skyblue;">@include('commons.navbar')</div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        
        <!-- データ属性でオプション設定 -->
        <div id="carousel_sample" class="carousel slide" data-interval="2000" data-wrap="true">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="../images/img_mainvisual_lg1.jpg" alt="test_photo1" width="100%">
                        <div class="carousel-caption">
                        </div>
                        </div>
                        <div class="item">
                            <img src="../images/img_mainvisual_lg2.jpg" alt="test_photo2" width="100%">
                        <div class="carousel-caption">
                        　photo1
                        </div>
                        </div>
                        <div class="item">
                            <img src="../images/img_mainvisual_lg3.jpg" alt="test_photo3" width="100%">
                        <div class="carousel-caption">
                        photo2     
                        </div>
                        </div>
                        <div class="item">
                            <img src="../images/img_mainvisual_lg4.jpg" alt="test_photo4" width="100%">
                        <div class="carousel-caption">
                          photo3
                        </div>
                        </div>
                        <div class="item">
                            <img src="../images/img_mainvisual_lg5.jpg" alt="test_photo4" width="100%">
                        <div class="carousel-caption">
                          photo4
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <div class="container" style="padding:20px 0">
            <div class="row">
            <ul	class="nav nav-tabs" style="margin-bottom:15px;">
                <li	class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <!-- <li><a href="#about" data-toggle="tab">新規作成ページ</a> -->
                <li>{!! link_to_route('messages.create', '新規作成ページ', ['data-toggle' => 'tab']) !!}</li>
                <li>{!! link_to_route('messages.show', '書き込み詳細', ['data-toggle' => 'tab']) !!}</li>
                <li>{!! link_to_route('messages.edit', '編集', ['data-toggle' => 'tab']) !!}</li>
                <li>{!! link_to_route('messages.destroy', '削除', ['data-toggle' => 'tab']) !!}</li>
            </ul>			
            			
            <div class="tab-content">		
                <div class="tab-pane" id="home">ほーむだよー</div>
                <div class="tab-pane" id="about">あばうとだよー</div>	
            </div>
            </div>
        </div>

        <div class="container">
                <div class="row">
                    <aside class="col-sm-12 col-md-2 col-lg-2 col-xs-12">
                        <ul>
                            <li>{!! link_to_route('messages.create', '新規作成ページへ') !!}</li>
                            <li>{!! link_to_route('messages.show', '書き込み詳細ページへ') !!}</li>
                            <li>{!! link_to_route('messages.edit', '編集ページへ') !!}</li>
                            <!--<li><a href="../messages/delete.blade.php">削除ページへ</a></li>-->
                            <li>{!! link_to_route('messages.destroy', '削除ページへ') !!}</li>
                        </ul>
                    </aside>
                    
                <div class="col-sm-12 col-md-10 col-lg-10 col-xs-12">@yield('content')</div>
            </div>
        </div>
        
        <div id="footer">
            <div class="col-xs-12 fnav" style="">ftrnav</div>        
            <small><p>Copyright 2017 &copy; 掲示板＠猫飯店. All Rights Reserved.</p></small>
        </div>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

