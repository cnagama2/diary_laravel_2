<!DOCTYPE html>
<html>
<head>
    <title>Diary</title>
  <!--normalizeスタイルシート-->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!--カスタムスタイルシート読み込み-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="bgImg">
	
<div class="main">
	<div id="logo"><img src="{{ asset('image/logo1.png') }}" alt="logo"></div>

	
	<div class="main-body">
			  <span class="input-group">log in</span>
			
		  <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
             {{ csrf_field() }}
		  	<div class="input-group form-group">
			    <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fas fa-user"></i></span>
			    </div>
			     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
			      @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
		    </div>
			  <div class="input-group form-group">
			    <div class="input-group-prepend">
				   <span class="input-group-text"><i class="fas fa-key"></i></span>
			    </div>
			    <input id="password" type="password" class="form-control" name="password" required>
			  @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
        </div>
			  <div class="input-group form-group">
			  <input type="submit" name="commit" value="Login" class="btn float-right loginBtn">
			  </div>
		  </form>
	</div><!--main-body終了-->
		  
	<div class="main-footer">
				<div class="d-flex justify-content-center links">
					アカウントを作成する：  <a href="{{ route('register') }}">Sign Up</a>
				</div>
	</div><!--main-footer終了-->
		</div>
	</div>
</div>
</body>
</html>