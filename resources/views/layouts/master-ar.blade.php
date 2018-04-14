<!DOCTYPE html>
<html lang="en">
<head>
  <title>Instructor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/bootstrap-rtl.min.css')}}">
 
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Cairo:600" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/instafeed.min.js')}}"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="container">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
      @foreach($cat as $item)
			                @if($item->children->count() > 0)
							<li class="dropdown">
								<a href="" style="cursor:default" class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">{{$item->title}} <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									@foreach($item->children as $submenu)
					<li><a href="{{ url($submenu->url) }}">{{$submenu->title}}</a></li>
					@endforeach
				</ul>
			</li>
							
							
					
				@else
				<li><a href="{{ url($item->url) }}">{{$item->title}}</a></li>
				@endif
				@endforeach
						</ul>
						
    </div>
  </div>
</nav>
<hr>


@yield('content')

<!-- Footer -->
<footer class="text-center">
          <div>
              <p class="pull-left" style="padding:10px">IdeasOwners</p> 
            <a class="up-arrow pull-right" href="#myPage" style="padding:10px" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  
  </div>
</footer>
</div>
<script type="text/javascript">
    var feed = new Instafeed({
      get: 'user',
      userId: '14927392',
      limit:'4',
      resolution:'low_resolution',
      accessToken: '14927392.8f4c5bf.cafc2df6c80d43769a6e49372ca010b1',
      template: '  <div class="col-sm-3"><a href="@{{link}}"><img src="@{{image}}" class="img-thumbnail img-responsive"/></a> </div>'
            });
    feed.run();
</script>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>