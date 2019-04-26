<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Diary:Sign Up Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="bgImg">
 <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card text-center">
		    <div class="logo"><img src="{{ asset('image/logo1.png') }}" alt="logo"></div>
			<div class="card-header">
				<h3>アカウント作成</h3>
			</div>
		<div class="card-body">
     <p class="text-center m-3">or</p>
     <p class="acountPage_link"><a href="{{ route('login') }}">Log In</a></p>
    <form class="new_user" id="new_user" action="{{ route('register') }}" accept-charset="UTF-8" method="post">
       {{ csrf_field() }}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="user_name">お名前</label>
        <input class="form-control" placeholder="名前を入力してください" type="text" name="name" value="{{ old('name') }}" required autofocus>
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
        <label for="user_password">パスワード</label>
         <em>(6文字以上入力してください)</em>
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
       <div class="card-footer">
       <div class="form-group">
         <input type="submit" name="commit" value="アカウントを作成" class="btn login_btn" data-disable-with="アカウントを作成">
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