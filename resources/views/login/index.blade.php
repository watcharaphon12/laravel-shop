<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{URL::asset('login_public/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/jquery.growl/stylesheets/jquery.growl.css')}}">

	</head>

	<body>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4" >เข้าสู่ระบบ</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<div class="signin-form">
								<form method="post" action="{{url('sent-login')}}">
									@csrf
			      		<div class="form-group mt-3">
			      			<input type="text" name="username" class="form-control" required>
			      			<label class="form-control-placeholder" for="username">ชื่อผู้ใช้</label>
			      		</div>
		            <div class="form-group">
		              <input  type="password" name="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">รหัสผ่าน</label>
		              <span toggle="userpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button  class="form-control btn btn-primary rounded submit px-3">เข้าสู่ระบบ</button>
		            </div>
					</form>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="{{route('register')}}">สมัครสมาชิก</a>
									</div>
		            </div>
					
		          </div>

		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>


	</body>
</html>

