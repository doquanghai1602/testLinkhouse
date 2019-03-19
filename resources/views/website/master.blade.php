<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Linkhouse Miền Trung</title>
        <base href="{{asset('')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>

        <link href="{{$css_web}}css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="{{$css_web}}css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="{{$css_web}}css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header role="banner" id="menu-header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs logo-nav">
                            <div class="menu-navbar-brand menu-logo">
                                <a class="logo" href="./">
                                    <img class="img-responsive img-logo" src="{{$css_web}}images/logo.png" alt="Logo LinkHouse">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-9 main-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Home</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="./" class="img-navbar-header visible-xs logo-xs">
                                    <img class="img-responsive" src="{{$css_web}}images/logo.png" alt="Logo LinkHouse">
                                </a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul id="top-menu" class="nav text-right">
                                    @foreach($shareMenuHorizontal as $itemMenuHorizontal)
                                    <li><a href="#">{{$itemMenuHorizontal->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="main-container">
                <div class="menu-left col-xs-12 col-sm-3" id="menu-left">
                    <div class="row">
                        <ul class="group-menu-left">
                            <li><a>Danh mục</a></li>
                            <li><a href="menu/horizontal">Danh sách menu ngang</a></li>
                            <li><a href="menu/vertical">Danh sách menu dọc</a></li>
                            @foreach($shareMenuVertical as $itemMenuVertical)
                            <li><a href="#">{{$itemMenuVertical->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="content-right col-xs-12 col-sm-9" id="content-right">
                    @yield('content')
                </div>
                <div class="clearfix"></div>
            </div>
        </main>
        <footer>
            <div id="footer" class="col-xs-12">
                <p>©2019 LinkHouse</p>
            </div>
        </footer>
        <script type="text/javascript" src="{{$css_web}}js/jquery.1.8.3.min.js"></script>
        <script type="text/javascript" src="{{$css_web}}js/bootstrap.js"></script>
        <script type="text/javascript" src="{{$css_web}}js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="{{$css_web}}js/main.js"></script>
        <script type="text/javascript">
            $('.switch-choice .close-choice').click(function(){
                if(!$(this).hasClass('btn-danger')){
                    $(this).addClass('btn-danger');
                    $(this).removeClass('btn-default');
                    $(this).parent().find('.open-choice').removeClass('btn-primary');
                    $(this).parent().find('.open-choice').addClass('btn-default');
                }
            })
            $('.switch-choice .open-choice').click(function(){
                if(!$(this).hasClass('btn-primary')){
                    $(this).addClass('btn-primary');
                    $(this).removeClass('btn-default');
                    $(this).parent().find('.close-choice').removeClass('btn-danger');
                    $(this).parent().find('.close-choice').addClass('btn-default');
                }
            })
        </script>
        <script type="text/javascript">
            $('.display .open_display').click(function(){
                $(this).addClass('hidden');
                $(this).parent().find('.close_display').removeClass('hidden');
            })
            $('.display .close_display').click(function(){
                $(this).addClass('hidden');
                $(this).parent().find('.open_display').removeClass('hidden');
            })
        </script>
        <script type="text/javascript">
            $("#display .view_display").click(function(){
                var id = $(this).data("id");
                var com = $(this).data("com");
                var _token = '{{ csrf_token() }}';
                $.ajax({
                    url: 'ajax/by_display',
                    data:{id: id, _token: _token, com: com, ajax_sort:true},
                    type:"POST",
                    success:function(data) {
                        if(data != 'oke'){
                            alert("Lỗi hệ thống.");
                            location.reload();
                        }
                    }
                })
            })
        </script>
        @yield('js')
    </body>
</html>