
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
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-content">
					{!! Form::open(array('class' => 'form-horizontal', 'route' => 'test')) !!}
						<!--<form class="form-horizontal">-->
						  <fieldset>    
							<div class="control-group hidden-phone">
							  <div class="controls">
							  {!! Form::textarea('photo_description', null, array('class' => 'form-control cleditor', 'id' => 'textarea2', 'rows' => '3')) !!}
								<!--<textarea class="cleditor" id="textarea2" rows="3"></textarea>-->
							  </div>
							</div>
							<div class="form-actions">
							{!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
							  <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
							</div>
						  </fieldset>
						{!! Form::close() !!}  

					</div>
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
	@endsection
