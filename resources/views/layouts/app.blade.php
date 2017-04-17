<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="掲示板, PHP, mobile, message-board">
        <meta name="description" content="PhP-mobileのサイトです！書き込みはどなたでもご自由にどうぞ！！">
        <meta name="copyright" content="PHP-mobile">
        <meta name="author" content="oasusr26">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP-mobile</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--slick-->
        <link rel="stylesheet" type="text/css" href="../css/slick.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../css/slick-theme.css" media="screen" />
        <!--stylesheet-->
        <link rel="stylesheet" href="../css/style.css">
        <!-- favicon -->
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
        <!--ヘッダーエリア-->
        <div id="header">
            @include('commons.navbar')
            @include('commons.slide')
        </div>
            @include('commons.top_plan')
    
        <div class="container">
            <div class="row">
                
                <!--メインエリア -->
                <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12">
                    @include('commons.errors_messages')
                    
                    @yield('content')
                </div>
                
                 <!--サイドバーエリア-->
                @include('commons.sidebar')
            </div>
        </div>
        <!--フッターエリア-->
        <div id="footer">
            @include('commons.footer')
        </div>    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/slick.min.js"></script>
        <script src="/js/jquery.lazyload.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
    </body>
</html>

