<!DOCTYPE html>
<html>
<head>
    <title>Diary</title>

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
			  <h3>log in</h3>
			</div>
		  <div class="card-body">
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
			<div class="form-group">
			  <input type="submit" name="commit" value="Login" class="btn float-right login_btn">
			</div>
		  </form>
		  </div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					アカウントを作成する：  <a href="{{ route('register') }}">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>