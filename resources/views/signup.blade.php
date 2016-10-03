<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Creative Bucket | Login</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					
					<h2>@if(count($errors))
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif</h2>
					<h2>Signup</h2>
					{!! Form::open(array('route' => 'users.store')) !!}
					<fieldset>
						
							
							{!! Form::hidden('user_id', null) !!}
							{!! Form::hidden('verification_code', null) !!}
						
						
						<div class="input-prepend" title="Username">
							<span class="add-on"><i class="halflings-icon user"></i></span>
							{!! Form::text('first_name', null, array('class' => 'form-control input-large span10')) !!}							
							<!--<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>-->
						</div>
						<div class="clearfix"></div>

						<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								{!! Form::text('last_name', null, array('class' => 'form-control input-large span10')) !!}
								<!--<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>-->
							</div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								{!! Form::text('email', null, array('class' => 'form-control input-large span10')) !!}
								<!--<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>-->
							</div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								{!! Form::password('password', array('class' => 'form-control input-large span10')) !!}
								<!--<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>-->
							</div>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								{!! Form::date('date', null, array('class' => 'form-control input-large span10')) !!}
								<!--<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>-->
							</div>							
							<div class="clearfix"></div>
							<div class="button-login">	
								{!! Form::token() !!}
    							{!! Form::submit('Sign Up', array('class' => 'btn btn-primary')) !!}
							</div>
					{!! Form::close() !!}
					<!--
					<form class="form-horizontal" action="index.html" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>-->
					<hr>
					<h2>If already you have account <a href="{{ url('login') }}">Signin</a></h2>
				</div><!--/span-->

			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

			<script src="{{ URL::asset('js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-migrate-1.0.0.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.ui.touch-punch.js') }}"></script>
	
		<script src="{{ URL::asset('js/modernizr.js') }}"></script>
	
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.cookie.js') }}"></script>
	
		<script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ URL::asset('js/excanvas.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.pie.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.stack.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.resize.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.chosen.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.uniform.min.js') }}"></script>
		
		<script src="{{ URL::asset('js/jquery.cleditor.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.noty.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.elfinder.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.raty.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.iphone.toggle.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.uploadify-3.1.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.gritter.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.imagesloaded.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.masonry.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.knob.modified.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.sparkline.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/counter.js') }}"></script>
	
		<script src="{{ URL::asset('js/retina.js') }}"></script>

		<script src="{{ URL::asset('js/custom.js') }}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
