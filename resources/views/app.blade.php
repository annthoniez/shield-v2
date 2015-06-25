<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{{ $title or 'S.H.I.E.L.D' }}}</title>

	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">S.H.I.E.L.D</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::guest())
					@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars fa-1x"></i> เมนูหลัก</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/register') }}"><i class="fa fa-user-plus"></i> เพิ่มผู้ใช้ใหม่</a></li>
							<li><a href="{{ url('/users') }}"><i class="fa fa-users"></i> รายชื่อในบัญชีทั้งหมด</a></li>
							<li><a href="{{ url('/signup') }}"><i class="fa fa-pencil-square-o"></i> เพิ่มรายชื่อ</a></li>
							<li><a href="{{ url('/list') }}"><i class="fa fa-pencil-square-o"></i> เพิ่มรายการที่ต้องทำ</a></li>
							<li><a href="{{ url('/result') }}"><i class="fa fa-book"></i> สรุปผลรายงาน</a></li>
							<li><a href="{{ url('/search') }}"><i class="fa fa-search"></i> ค้นหา</a></li>
						</ul>
					</li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}"><i class="fa fa-sign-in"></i> เข้าสู่ระบบ</a></li>
						<li><a href="{{ url('/auth/register') }}"><i class="fa fa-user-plus"></i> สมัครสมาชิก</a></li>
					@else
						<li><span id="servertime"></span></body></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->prefix }}{{ Auth::user()->name }} {{ Auth::user()->surname }}<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/profile') }}"><i class="fa fa-user"></i> โปรไฟล์</a></li>
								<li><a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
