<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
    <title>Diary</title>
  <!--normalizeスタイルシート-->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<!--カスタムスタイルシート読み込み-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="bgImg">
 <div class="main">
	 <div id="logo"><img src="{{ asset('image/logo1.png') }}" alt="logo"></div>
			<div class="main-body">
				<h1>アカウント作成</h1>

     <h2>or</h2>
     
     <p class="acountPage_link"><a href="{{ route('login') }}"><h1>Log In</h1></a></p>
    <form class="new_user" id="new_user" action="{{ route('register') }}" accept-charset="UTF-8" method="post">
       {{ csrf_field() }}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="user_name">ユーザ名</label>
        <input class="form-control" placeholder="ユーザ名（headerに表示されます）" type="text" name="name" value="{{ old('name') }}" required autofocus>
         @if ($errors->has('name'))
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
         @endif
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="user_email">メールアドレス</label>
        <input class="form-control" placeholder="emailを入力してください" autocomplete="email" type="email" name="email" value="{{ old('email') }}" required>
           @if ($errors->has('email'))
            <span class="help-block">
               <strong>{{ $errors->first('email') }}</strong>
            </span>
           @endif
    </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="user_password">パスワード
         <em>(6文字以上入力してください)</em></label>
         <br>
        <input class="form-control" placeholder="パスワードを入力してください" autocomplete="off" type="password" name="password" required>
           @if ($errors->has('password'))
            <span class="help-block">
             <strong>{{ $errors->first('password') }}</strong>
            </span>
           @endif
       </div>
       <div class="form-group">
         <label for="user_password_confirmation">パスワード確認</label>
         <input class="form-control" placeholder="パスワードを再度入力してください" autocomplete="off" type="password" name="password_confirmation" required>
       </div>
       <div class="main-footer">
       <div class="input-group form-group">
         <input type="submit" name="commit" value="アカウントを作成" class="btn loginBtn" data-disable-with="アカウントを作成">
       </div>
      </div>
    </form>
   </div>
  </div>
 </div>
</div>
</div>
</body>
</html>