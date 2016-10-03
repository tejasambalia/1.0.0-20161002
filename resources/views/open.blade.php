@extends('header')
@section('content')
		
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			<script type='text/javascript'>
           		easyrec_sendAction("view",{
                                    itemId:"<?php echo $data['imgid'] ?>",
                                    itemUrl:"http://localhost/Login/public/open/gallery/$data['imgid']",
                                    itemDescription:"This is piture of one girl. She have nice expressions.",
                                    itemImageUrl:"http://localhost/Login/public/open/gallery/$data['imgid']"});
			</script>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<!-- <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul> -->

			<div class="row-fluid">
				
				<div class="span7 space_margin" onTablet="span12" onDesktop="span7">
					<div class="span7"><p>						
					</p></div>
					<img src="../../../img/<?php echo $data['userid']."/".$data['imgid'].'.jpg'; ?>"></img>
					<br/>
					<br/>
					<p>
			 			100k like&nbsp&nbsp&nbsp&nbsp&nbsp10k Comment&nbsp&nbsp&nbsp&nbsp&nbsp25k Share
			 		</p>
						<!--put image here. put image here. put image here. put image here.-->
				</div>
				<div class="span5 font_black space space_margin" onTablet="span12" onDesktop="span5">
				
							<h2>About Image</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<blockquote>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</blockquote>
							<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>	
						
				</div>	
				
			</div>
			<div class="row-fluid">
  				<div class="span7 space_margin" onTablet="span12" onDesktop="span7" style="overflow: auto; max-height: 350px;">
  					{!! Form::open(array('route' => 'handleComment/')) !!}
  						{!! Form::textarea('comment_description', null, array('class' => 'span12', 'style' => 'resize: vertical; max-height: 50px;')) !!}
  						{{ Form::hidden('post_id', $data['imgid']) }}
  						<button name="comment" value="comment" href="{{ url('open/gallery/photo1') }}">Comment</button>
  						<!--{!! Form::submit('Comment', array('class' => 'btn btn-primary')) !!}-->

  					{!! Form::close() !!}
  					
  					<hr>
  				</div>
  			</div>	
			<div class="row-fluid" style="max-height: 400px;">
  				<div class="span7 space_margin" onTablet="span12" onDesktop="span7" style="overflow: auto; max-height: 350px;">
  					<p>Tejas Ambalia<br>Comment description. this is the most important part so what you can do from this? I can tell you later. This is mos important thing. Thank you for reading my comment.<br></p>
  					<p>
			 			100k like
			 		</p>
			 		<hr>
			 		<p>Tejas Ambalia<br>Comment description. this is the most important part so what you can do from this? I can tell you later. This is mos important thing. Thank you for reading my comment.<br></p>
  					<p>
			 			100k like&nbsp&nbsp&nbsp&nbsp&nbsp10k Comment&nbsp&nbsp&nbsp&nbsp&nbsp25k Share
			 		</p>
			 		<hr>
			 		<p>Tejas Ambalia<br>Comment description. this is the most important part so what you can do from this? I can tell you later. This is mos important thing. Thank you for reading my comment.<br></p>
  					<p>
			 			100k like&nbsp&nbsp&nbsp&nbsp&nbsp10k Comment&nbsp&nbsp&nbsp&nbsp&nbsp25k Share
			 		</p>
			 		<hr>
			 		<p>Tejas Ambalia<br>Comment description. this is the most important part so what you can do from this? I can tell you later. This is mos important thing. Thank you for reading my comment.<br></p>
  					<p>
			 			100k like
			 		</p>
			 		<hr>
  				</div>
  			</div>

			<h1>Recomandation Image</h1>

			<div class="masonry-gallery">

				<div id="image-1" class="masonry-thumb">
					<a style="background:url(img/gallery/photo1.jpg)" title="Sample Image 1" href="{{ url('open/gallery/photo1') }}"><img class="grayscale" src="{{ url('img/gallery/photo1.jpg') }}" alt="Sample Image 1"></a>						
				</div>
				<div id="image-2" class="masonry-thumb">
					<a style="background:url(img/gallery/photo2.jpg)" title="Sample Image 2" href="{{ url('open/gallery/photo2') }}"><img class="grayscale" src="../../../img/gallery/photo2.jpg" alt="Sample Image 2"></a>
				</div>
				<div id="image-3" class="masonry-thumb">
					<a style="background:url(img/gallery/photo3.jpg)" title="Sample Image 3" href="{{ url('open/gallery/photo3') }}"><img class="grayscale" src="../../../img/gallery/last_page.jpg" alt="Sample Image 3"></a>
				</div>
				<div id="image-3" class="masonry-thumb">
					<a style="background:url(img/gallery/photo3.jpg)" title="Sample Image 3" href="{{ url('open/gallery/photo4') }}"><img class="grayscale" src="../../../img/gallery/photo3.jpg" alt="Sample Image 3"></a>
				</div>
				<div id="image-4" class="masonry-thumb">
					<a style="background:url(img/gallery/photo4.jpg)" title="Sample Image 4" href="{{ url('open/gallery/photo4') }}"><img class="grayscale" src="../../../img/gallery/photo4.jpg" alt="Sample Image 4"></a>
				</div>
				<div id="image-5" class="masonry-thumb">
					<a style="background:url(img/gallery/photo5.jpg)" title="Sample Image 5" href="{{ url('open/gallery/photo5') }}"><img class="grayscale" src="../../../img/gallery/photo5.jpg" alt="Sample Image 5"></a>
				</div>
				<div id="image-14" class="masonry-thumb">
					<a style="background:url(img/gallery/first_photo.jpg)" title="Sample Image 6" href="../../open/gallery/photo6"><img class="grayscale" src="../../../img/gallery/photo6.jpg" alt="Sample Image 6"></a>
				</div>
				<div id="image-6" class="masonry-thumb">
					<a style="background:url(img/gallery/photo6.jpg)" title="Sample Image 6" href="../../open/gallery/photo6"><img class="grayscale" src="../../../img/gallery/first_page.jpg" alt="Sample Image 6"></a>
				</div>

				

				<div id="image-7" class="masonry-thumb">
					<a style="background:url(img/gallery/photo7.jpg)" title="Sample Image 7" href="../../open/gallery/photo7"><img class="grayscale" src="../../../img/gallery/page-11.jpg" alt="Sample Image 7"></a>
				</div><div id="image-7" class="masonry-thumb">
					<a style="background:url(img/gallery/photo7.jpg)" title="Sample Image 7" href="../../open/gallery/photo7"><img class="grayscale" src="../../../img/gallery/page-15.jpg" alt="Sample Image 7"></a>
				</div><div id="image-7" class="masonry-thumb">
					<a style="background:url(img/gallery/photo7.jpg)" title="Sample Image 7" href="../../open/gallery/photo7"><img class="grayscale" src="../../../img/gallery/page-19.jpg" alt="Sample Image 7"></a>
				</div><div id="image-7" class="masonry-thumb">
					<a style="background:url(img/gallery/photo7.jpg)" title="Sample Image 7" href="../../open/gallery/photo7"><img class="grayscale" src="../../../img/gallery/page-20.jpg" alt="Sample Image 7"></a>
				</div><div id="image-7" class="masonry-thumb">
					<a style="background:url(img/gallery/photo7.jpg)" title="Sample Image 7" href="../../open/gallery/photo7"><img class="grayscale" src="../../../img/gallery/page-21.jpg" alt="Sample Image 7"></a>
				</div>



				<div id="image-7" class="masonry-thumb">
					<a style="background:url(img/gallery/photo7.jpg)" title="Sample Image 7" href="../../open/gallery/photo7"><img class="grayscale" src="../../../img/gallery/photo7.jpg" alt="Sample Image 7"></a>
				</div>
				<div id="image-8" class="masonry-thumb">
					<a style="background:url(img/gallery/photo8.jpg)" title="Sample Image 8" href="../../open/gallery/photo8"><img class="grayscale" src="../../../img/gallery/photo8.jpg" alt="Sample Image 8"></a>
				</div>
				<div id="image-9" class="masonry-thumb">
					<a style="background:url(img/gallery/photo9.jpg)" title="Sample Image 9" href="../../open/gallery/photo9"><img class="grayscale" src="../../../img/gallery/photo9.jpg" alt="Sample Image 9"></a>
				</div>
				<div id="image-10" class="masonry-thumb">
					<a style="background:url(img/gallery/photo10.jpg)" title="Sample Image 10" href="../../open/gallery/photo10"><img class="grayscale" src="../../../img/gallery/photo10.jpg" alt="Sample Image 10"></a>
				</div>
				<div id="image-11" class="masonry-thumb">
					<a style="background:url(img/gallery/photo11.jpg)" title="Sample Image 11" href="../../open/gallery/photo11"><img class="grayscale" src="../../../img/gallery/photo11.jpg" alt="Sample Image 11"></a>
				</div>
				<div id="image-12" class="masonry-thumb">
					<a style="background:url(img/gallery/photo12.jpg)" title="Sample Image 12" href="../../open/gallery/photo12"><img class="grayscale" src="../../../img/gallery/photo12.jpg" alt="Sample Image 12"></a>
				</div>
				<div id="image-13" class="masonry-thumb">
					<a style="background:url(img/gallery/photo13.jpg)" title="Sample Image 13" href="../../open/gallery/photo13"><img class="grayscale" src="../../../img/gallery/photo13.jpg" alt="Sample Image 13"></a>
				</div>
			</div>

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	@endsection
	