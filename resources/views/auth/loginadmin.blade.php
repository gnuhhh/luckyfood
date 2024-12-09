<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
        @include('admin.template.meta')
        @include('admin.template.css')


	</head>
	<style>
		.login-container{
			background-color: #e13837; 
		}
		.text-ad{
			color:#e13837;
		}
		.icon{
			background-color: #e13837;
		}
	</style>
	<body class="login-container">

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner">
                <div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
            </div>
		</div>
		<!-- Loading wrapper end -->

		<!-- Login box start -->
		<form action="" method="post">
            @csrf
			 @csrf
			@if (session('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('success') }}
				</div>
			@elseif(session('danger'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					{{ session('danger') }}
				</div>
			@endif
			<div class="login-box">
				<div class="login-form">
					<h3 class="text-center text-ad">Đăng nhập Admin</h3>
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input name='email' type="text" class="form-control" placeholder="Nhập email" >
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
					</div>
					<div class="mb-3">
						<div class="d-flex justify-content-between">
							<label class="form-label">Mật khẩu</label>
						</div>
						<input name="password" type="password" class="form-control" placeholder="Nhập mật khẩu" >
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
					</div>
					<div class="login-form-actions ">
						<button type="submit" class="btn"> <span class="icon"><i class="bi bi-arrow-right-circle"></i></span>
							Đăng nhập</button>
					</div>
				</div>
			</div>
		</form>
        @include('admin.template.script');
	</body>

</html>