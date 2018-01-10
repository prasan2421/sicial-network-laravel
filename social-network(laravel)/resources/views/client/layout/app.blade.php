<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('client_css/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
     <link href="{{URL::asset('client_css/css/style.css')}}" rel="stylesheet">
	<link href="{{URL::asset('client_css/css/animate.css')}}" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="{{URL::asset('client_css/js/jquery-dropdate.js')}}"></script>
    <script src="{{URL::asset('client_css/js/date.format.js')}}"></script>
    <script>
$(document).ready(function(){
    $('.dropdate').dropdate({
        dateFormat:'mm/dd/yyyy'
    });
    $(".dropdate-select").addClass("form-control1");
    $(".dropdate-select").css({"margin-right":"10px"});
});

</script>
  </head>
  <body style="background-color: #F7F7F7;">
 @yield('content')
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    
   

 
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>