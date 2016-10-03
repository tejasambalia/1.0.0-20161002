@extends('header')
@section('content')
		
			<?php $userid = \Auth::user()->user_id; ?>
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<div class="row-fluid sortable">
					<div class="box-content">
					{!! Form::open(array('class' => 'form-horizontal', 'route' => 'handleText')) !!}
					{!! Form::hidden('user_id', $userid, array('class' => 'form-control')) !!}
						<!--<form class="form-horizontal">-->
						  <fieldset>  
						   <div class="control-group hidden-phone">
							<label class="control-label">Title *</label>
							  <div class="controls">
							  {!! Form::text('post_title', null, array('class' => 'form-control')) !!}
								<!--<textarea class="cleditor" id="textarea2" rows="3"></textarea>-->
							  </div>
							</div>
							<div class="control-group hidden-phone">
							<label class="control-label">Write Text *</label>
							  <div class="controls">
							  {!! Form::textarea('text_description', null, array('class' => 'form-control cleditor', 'id' => 'textarea2', 'rows' => '3')) !!}
								<!--<textarea class="cleditor" id="textarea2" rows="3"></textarea>-->
							  </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError1">Text Catagory *</label>
								<div class="controls">
								{!! Form::select('catagory', array('1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3'), null, array('id' => 'selectError1', 'data-rel' => 'chosen', 'multiple' => 'multiple')) !!}
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label">Privacy</label>
								<div class="controls">
								  <label class="radio">
								  {!! Form::checkbox('privacy', '1') !!} 18+
								  </label>
								</div>
							  </div>
							<div class="form-actions">
							{!! Form::submit('Publish', array('class' => 'btn btn-primary')) !!}
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

	