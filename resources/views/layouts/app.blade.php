<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Diary</title>

   <!-- Styles(ローカルの場合、secure_asset=>assetにすること) -->
   <link href="{{ secure_asset('css/sign_up.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/sign_in.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/button.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/common.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/header.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/card_edit.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/card_new.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/card_show.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/list_new.css') }}" rel="stylesheet">
   <link href="{{ secure_asset('css/list_edit.css') }}" rel="stylesheet">

    <!-- awesome fonts -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

   <!--bootstrap-->
   <!--CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   <!--JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <!--flatpickr-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
   
</head>
<body>
<!-- ログインしている場合のみヘッダを表示する --->
@auth
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #712827;">
 <div class ="container">
 <div class="navbar-header">
  <span class="navbar-brand">Diary</span>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
      <span class="sr-only">メニュー</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
 
  <div id="gnavi" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link" href="#">{{Auth::user()->name }}さん</a></li>
      <li><a class="nav-link listNew" href="/">一覧</a></li>
      <li><a class="nav-link listNew" href="{{ route('new') }}">新規作成</a></li>
      <li><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
             <i class="glyphicon glyphicon-log-out"></i>ログアウト</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
             </form></li>
    </ul>
  </div></div>
 
</nav>


@endauth
@yield('content')
</body>
</html>