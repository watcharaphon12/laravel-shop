<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{URL::asset('login_public/css/style.css')}}">

	</head>

	<body>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<center><h3 class="mb-4" >สมัครสมาชิก</h3></center>
			      		</div>
								
			      	</div>
					<form method="post" action="{{route('sentResgister')}}">
						@csrf
							<div class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" name="name" class="form-control" required>
			      			<label class="form-control-placeholder" for="username">ชื่อผู้ใช้</label>
			      		</div>
						  <div class="form-group mt-3">
			      			<input type="email" name="email" class="form-control" required>
			      			<label class="form-control-placeholder" for="email">อีเมล</label>
			      		</div>
		            <div class="form-group">
		              <input  type="password" name="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">รหัสผ่าน</label>
		              <span toggle="userpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
					<div class="form-group">
		              <input  type="password" name="confirm_password" class="form-control" required>
		              <label class="form-control-placeholder" for="confirm_password">ยืนยันรหัสผ่าน</label>
		              <span toggle="userpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" style="background-color:#343a40 ;color:white"  class="form-control btn btn-dark rounded submit px-3">ยืนยัน</button>
		            </div>
		           
		          </div>
				  </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
  

	</body>
</html>

