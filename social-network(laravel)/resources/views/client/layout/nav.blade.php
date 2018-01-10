<div id="header">
    	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('client.index')}}">Chuffed</a>
    </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-9">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <div class="row">
     <div class="col-sm-12 col-md-5 col-lg-5">
      <ul class="nav navbar-nav">
        
        <li class="search-bar">
	
		
           <div id="custom-search-input">
                            <div class="input-group ">
                                <input type="text" class="  search-query form-control" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
	
		</li>
       
        
      </ul>
      </div>
      <div class="col-sm-12 col-md-7 col-lg-7">
<div class="username"><a href="{{route('client.profile')}}" class="dropdown-toggle" ><img src="#"><b class="username_name"> 
  @if(Auth::guard('client')->check())
             {{Auth::user()->firstname}} 

           
        @endif
</b></a></div>
      <ul class="nav navbar-nav navbar-right nav-center">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Request <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Messages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-gears"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><div class="box"><img src=""></div></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('client.logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>
		 </div>
      </div>
    </div><!-- /.navbar-collapse -->
		</div>
    </div>
  </div><!-- /.container-fluid -->
</nav>
   </div>