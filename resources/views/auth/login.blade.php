@extends('applogin')

@section('content')
<body class="login-page" style="background-color: #ecf0f5;">
	<div class="col-xs-12 col-sm-4 col-sm-offset-4" style="margin-top: 4%;">
		<div class="login-box-body">
			<div class="row">
				<div class="col-xs-12 text-center login-logo text-light-blue">
						<img src="{{URL::to('assets/img/logo.png')}}" style="width: 40%; margin-top: 10px;">
					</div>
				<!-- -->
				<div class="col-xs-12 login-box-right" style="position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px;">
					<p style="text-align: center;">กองงานยุทธวิธีจัดระเบียบกำลังพิเศษแห่งมาตุภูมิ</p>
					<p style="text-align: center;">ส่วนนี้เฉพาะเจ้าหน้าที่ - เข้าสู่ระบบ</p>
						@if (count($errors) > 0)
						<div class="alert alert-danger alert-dismissible alert-popup fade in">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					<form role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group has-feedback">
								<input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้" value="{{ old('username') }}">

								<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
								<input type="password" class="form-control" name="password" placeholder="รหัสผ่าน"/>
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>

							<div class="row">
								<div class="col-xs-7">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember" value="1" > จดจำการเข้าสู่ระบบ
										</label>
									</div>
								</div>
								<div class="col-xs-5">
									<button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection
