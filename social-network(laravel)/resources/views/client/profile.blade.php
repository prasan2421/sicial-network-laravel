@extends('client/layout/app')
@section('content')
  
    @extends('client/layout/nav')
   <!-- <img src="{{URL::asset('client_css/image/bsccsit.jpg')}}"> -->
    <div id="below-nav" >
    <div class="coverpic" style="background-image: url('{{URL::asset('client_css/image/bsccsit.jpg')}}');"></div>
    <div class="container"><div class="coverpic_pp"></div></div>
      <div class="container" >
      <div class="row top-20px">
    <!------------------------- left side ------------------- -->
        <div class="col-md-8">
        
        <!-- before status-->
        <div class="navi-panael">
               <ul class="nav nav-pills ">
                   <li class="btn-group">
                       <a href="#about" data-toggle="tab" class="btn btn-default">About Me</a>
                   </li>
                   <li><a href="#profile" data-toggle="tab" class="btn btn-default">Profile</a>
                   </li>
                   
               </ul>
           </div>
           <div class="tab-content clearfix">
               <div class="tab-pane active" id="about">
                   <h3>Start</h3>
                   <p>Auch gibt es niemanden, der den Schmerz an sich liebt, sucht oder wünscht, nur, weil er Schmerz ist, es sei denn, es kommt zu zufälligen Umständen, in denen Mühen und Schmerz ihm große Freude bereiten können.</p>

                   <p>Um ein triviales Beispiel zu nehmen, wer von uns unterzieht sich je anstrengender körperlicher Betätigung, außer um Vorteile daraus zu ziehen? Aber wer hat irgend ein Recht, einen Menschen zu tadeln, der die Entscheidung trifft, eine Freude zu genießen, die keine unangenehmen Folgen hat, oder einen, der Schmerz vermeidet, welcher keine daraus resultierende Freude nach sich zieht? Auch gibt es niemanden, der den Schmerz</p>
               </div>

               <div class="tab-pane" id="profile">
                                <div class="panel panel-default">
              <div class="panel-body">
                <input type="email" class="form-control" placeholder="What are you up to?">
              </div>
               
                <div class="panel-footer">
                  <div class="btn-group">
                    <button type="button" class="btn btn-link btn-icon"><i class="fa fa-map-marker"></i></button>
                    <button type="button" class="btn btn-link btn-icon"><i class="fa fa-users"></i></button>
                    <button type="button" class="btn btn-link btn-icon"><i class="fa fa-camera"></i></button>
                    <button type="button" class="btn btn-link btn-icon"><i class="fa fa-video-camera"></i></button>
                  </div>
                  
                  <div class="pull-right">
                    <button type="button" class="btn btn-success">Post</button>
                  </div>  
                </div>
            </div>
                                 <div class="panel panel-default">
              <div class="panel-body">
                <div class="row">
          <div class="col-md-2"><div class="img-responsive img-thumbnail" style="width: 100%;height: 50px;"><img src="#" ></div></div>
                  <div class="col-md-10">
                    <b>name</b><br/>
                    <p>status</p>
                    
                  </div>
                </div>
              </div>
                <div class="panel-footer">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Like</button>
                    <button type="button" class="btn btn-primary">Comment</button>
                    
                  </div>
                  
                    
                </div>
            </div>
         

                                 </div>
               
            </div>
           
           
           
        <!-- end before status -->
      
            

        </div>
        
        <!-- ----------------------- right side ----------------------------->
        <div class="col-md-4">
          
          <div class="panel panel-default">
              <div class="panel-body">
                <div class="row">
          <div class="col-md-2"><div class="img-responsive img-thumbnail" style="width: 100%;height: 50px;"><img src="#" ></div></div>
                  <div class="col-md-10">
                    <b>name</b><br/>
                    <p>status</p>
                    
                  </div>
                </div>
              </div>
                <div class="panel-footer">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Like</button>
                    <button type="button" class="btn btn-primary">Comment</button>
                    
                  </div>
                  
                    
                </div>
            </div>
            <!-- --------------------- end left side ------------------------->
            
            
        </div>      
      </div>
      
      
    </div>
    </div>
    <!------------------------------ chat section ------------------------------>
    <div class="chatbox chatbox--tray chatbox--empty">
    <div class="chatbox__title">
        <h5><a href="#">Customer Service</a></h5>
        <button class="chatbox__title__tray">
            <span></span>
        </button>
        <button class="chatbox__title__close">
            <span>
                <svg viewBox="0 0 12 12" width="12px" height="12px">
                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                </svg>
            </span>
        </button>
    </div>
    <div class="chatbox__body">
        <div class="chatbox__body__message chatbox__body__message--left">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="Picture">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="chatbox__body__message chatbox__body__message--right">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/arashmil/128.jpg" alt="Picture">
            <p>Nulla vel turpis vulputate, tincidunt lectus sed, porta arcu.</p>
        </div>
        <div class="chatbox__body__message chatbox__body__message--left">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="Picture">
            <p>Curabitur consequat nisl suscipit odio porta, ornare blandit ante maximus.</p>
        </div>
        <div class="chatbox__body__message chatbox__body__message--right">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/arashmil/128.jpg" alt="Picture">
            <p>Cras dui massa, placerat vel sapien sed, fringilla molestie justo.</p>
        </div>
        <div class="chatbox__body__message chatbox__body__message--right">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/arashmil/128.jpg" alt="Picture">
            <p>Praesent a gravida urna. Mauris eleifend, tellus ac fringilla imperdiet, odio dolor sodales libero, vel mattis elit mauris id erat. Phasellus leo nisi, convallis in euismod at, consectetur commodo urna.</p>
        </div>
    </div>
    <form class="chatbox__credentials">
    <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3"><img src="#" class="img-circle img-thumbnail"></div>
	<div class="col-sm-9 col-md-9 col-lg-9">name</div>
    </div>  
    <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3"><img src="#" class="img-circle img-thumbnail"></div>
	<div class="col-sm-9 col-md-9 col-lg-9">name</div>
    </div>  
    </form>
    <textarea class="chatbox__message" placeholder="Write something interesting"></textarea>
</div>
    <!--------------------------------- end chat section --------------------------->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('client_css/js/bootstrap.min.js')}}"></script>

   <script>
	  (function($) {
    $(document).ready(function() {
        var $chatbox = $('.chatbox'),
            $chatboxTitle = $('.chatbox__title'),
            $chatboxTitleClose = $('.chatbox__title__close'),
            $chatboxCredentials = $('.chatbox__credentials');
        $chatboxTitle.on('click', function() {
            $chatbox.toggleClass('chatbox--tray');
        });
        $chatboxTitleClose.on('click', function(e) {
            e.stopPropagation();
            $chatbox.addClass('chatbox--closed');
        });
        $chatbox.on('transitionend', function() {
            if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
        });
        $chatboxCredentials.on('submit', function(e) {
            e.preventDefault();
            $chatbox.removeClass('chatbox--empty');
        });
    });
})(jQuery);
	  </script>
<!--
    <script>
	  $(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
	  </script>
-->
	  
	  
<!--
	  <script>
	  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
});
	  </script>
	  
	  <script>
	$(document).ready(function () {
			  $(".carousel-caption-top").addClass({"animated bounce"}) ;
				   
			  };
		);
	</script>
-->
	  
	 
  @endsection