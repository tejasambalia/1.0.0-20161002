@extends('header')
@section('content')
		
			<?php $userid = \Auth::user(); ?>
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<div class="row-fluid sortable">
					<div class="box-content">
					{!! Form::open(array('class' => 'form-horizontal', 'route' => 'handleUpload', 'files' => true)) !!}
						<!--<form class="form-horizontal">-->
						  <fieldset>  
						   <div class="control-group hidden-phone">
							<label class="control-label">Image Title*</label>
							  <div class="controls">
							  {!! Form::text('photo_title', null, array('class' => 'form-control')) !!}
								<!--<textarea class="cleditor" id="textarea2" rows="3"></textarea>-->
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label">File Upload *</label>
								<div class="controls">
								{!! Form::file('image', array('class' => 'form-control cleditor')) !!}
								  <!-- <input type="file"> -->
								</div>
							  </div> 
							<div class="control-group hidden-phone">
							<label class="control-label">Image Description *</label>
							  <div class="controls">
							  {!! Form::textarea('photo_description', null, array('class' => 'form-control cleditor', 'id' => 'textarea2', 'rows' => '3')) !!}
								<!--<textarea class="cleditor" id="textarea2" rows="3"></textarea>-->
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError1">Image Catagory *</label>
								<div class="controls">
								{!! Form::select('catagory', array('1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3'), null, array('id' => 'selectError1', 'data-rel' => 'chosen', 'multiple' => 'multiple')) !!}
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Privacy</label>
								<div class="controls">
								  <label class="radio">
								  {!! Form::checkbox('privacy', 'a') !!} 18+
								  </label>
								</div>
							  </div>
							<div class="form-actions">
							{!! Form::submit('Upload', array('class' => 'btn btn-primary')) !!}
							  <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
							</div>
						  </fieldset>
						{!! Form::close() !!}  
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	
	@endsection

	