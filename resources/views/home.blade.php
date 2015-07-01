@extends('app')

@section('content')
<div class="container">
	<div class="row">
			<div class="alert alert-info alert-popup alert-dismissable fade in" data-dismiss="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<div class="alert alert-info alert-dismissible alert-popup fade in">
			<button type="button" class="close" data-dismiss="alert">
				<span>&times;</span>
			</button>
			<strong>Success !</strong>
			<ul>
					You are logged in!
			</ul>

		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
