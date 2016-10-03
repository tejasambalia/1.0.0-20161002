@extends('header')
@section('content')
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Add users</a></li>
			</ul>
			
						
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
					<h2>Create user</h2>
					{!! Form::open(array('route' => 'users.store')) !!}
					<fieldset>
						<div class="input-prepend" title="first name">
							<span class="add-on"><i class="halflings-icon name"></i></span>
							{!! Form::text('FirstName', 'first name', array('class' => 'form-control input-large span10')) !!}
							<!--<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>-->
						</div>
						<div class="input-prepend" title="last name">
							<span class="add-on"><i class="halflings-icon name"></i></span>
							{!! Form::text('LastName', 'last name', array('class' => 'form-control input-large span10')) !!}
							<!--<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>-->
						</div>
						<div class="input-prepend" title="email">
							<span class="add-on"><i class="halflings-icon user"></i></span>
							{!! Form::text('Email', 'mail@example.com', array('class' => 'form-control input-large span10')) !!}
							<!--<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>-->
						</div>
						<div class="input-prepend" title="Password">
							<span class="add-on"><i class="halflings-icon lock"></i></span>
							{!! Form::password('Password', array('class' => 'form-control input-large span10')) !!}
							<!--<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>-->
						</div>
						<div class="input-prepend" title="user role">
							<span class="add-on"><i class="icon-eye-open"></i></span>
							{!! Form::select('role', array('m' => 'Manager', 'u' => 'User'), 'role', array('class' => 'form-control input-large span10')) !!}
							<!--<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>-->
						</div>
						<div class="input-prepend" title="user role">
							<span class="add-on"><i class="icon-calendar"></i></span>
							{!! Form::date('date', 'YYYY-MM-DD', array('class' => 'form-control input-large span10')) !!}
							<!--<input class="input-large span10" name="username" id="username" type="text" placeholder="type username"/>-->
						</div>						
						<div class="clearfix"></div>
							<div class="clearfix"></div>
							<div class="button-login">	
								{!! Form::token() !!}
    							{!! Form::submit('Create user', array('class' => 'btn btn-primary')) !!}
							</div>
					{!! Form::close() !!}	
				</div><!--/span-->
			</div><!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
	@endsection