<!DOCTYPE html>
<html lang="ja">
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
        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/favicon/favicon.ico">
        <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="48x48" href="../favicon/favicon-48x48.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-160x160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-196x196.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="manifest" href="../favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#2d88ef">
        <meta name="msapplication-TileImage" content="../favicon/mstile-144x144.png">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="header" style="background: skyblue;">@include('commons.navbar')</div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        
        <!-- データ属性でオプション設定 -->
        <div id="carousel_sample" class="carousel slide" data-interval="200" data-wrap="true">
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
                            
                            </div>
                        </div>
                        <div class="item">
                                <img src="../images/img_mainvisual_lg3.jpg" alt="test_photo3" width="100%">
                            <div class="carousel-caption">
                                 
                            </div>
                        </div>
                        <div class="item">
                                <img src="../images/img_mainvisual_lg4.jpg" alt="test_photo4" width="100%">
                            <div class="carousel-caption">
                            
                            </div>
                        </div>
                        <div class="item">
                                <img src="../images/img_mainvisual_lg5.jpg" alt="test_photo4" width="100%">
                            <div class="carousel-caption">
                            
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
                <div class="col-xs-12">
                    <ul	class="nav nav-tabs" style="margin-bottom:15px;">
                        <li	class="active"><a href="messages/index.blade.php" data-toggle="tab">一覧ページ</a></li>
                        <li><a href="../messages/create.blade.php" data-toggle="tab">新規作成</a></li>
                        <li><a href="../messages/show.blade.php" data-toggle="tab">書き込み詳細</a></li>
                        <li><a href="../messages/edit.blade.php" data-toggle="tab">編集ページ</a></li>
                        <li><a href="../messages/delete.blade.php" data-toggle="tab">削除ページ</a></li>
                    </ul>			
                </div>
            </div>
        </div>
    
    <div class="container">
        <div class="row">    
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="/images/btn_plan_1.jpg" alt="test_image1" class="plan-image" />
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="/images/btn_plan_2.jpg" alt="test_image1" class="plan-image" />
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="/images/btn_plan_3.jpg" alt="test_image1" class="plan-image" />
            </div>
        </div>
    </div>
    
    <div class="container top-plan">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img src="/images/banner_2.jpg" alt="top-banner" class="plan-image" />
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img src="/images/top_iphone.png" alt="top-iphone" class="plan-image" />
            </div>

        </div>
    </div>
        
    
        <div class="container">
            <div class="row">
                    <!-- main -->
                <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12">@yield('content')</div>                    
                    <!-- asaide -->
                    <div class="container">
                        <div class="row">
                            <aside class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                                
                                    <h2>ご利用中のお客様</h2>
                                    <div class="customer">
                                        <div class="mypage"><a href="#" target="_self"><img src="/images/mypage_btn.png" alt="mypage" class="mypage-btn" /></a></div>
                                            <ul class="user">
                                                <div><li><span style="color: #00A5B9; font-size: 25px;">●</span><a href="#">SIMパッケージをご購入はこちら</a></li></div>
                                                <div><li><span style="color: #00A5B9; font-size: 25px;">●</span><a href="#">Android／iOS APN設定</a></li></div>
                                                <div><li><span style="color: #00A5B9; font-size: 25px;">●</span><a href="#">よくある質問(FAQ)</a></li></div>
                                                <li class="user2"><a href="#">通話プラス／データ専用</a></li>
                                            </ul>
                                    </div>
                                </div>
                            </aside>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer">
            <div class="col-xs-12 fnav">ftrnav</div>        
            <small><p>Copyright 2017 &copy; 掲示板＠猫飯店. All Rights Reserved.</p></small>
        </div>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

