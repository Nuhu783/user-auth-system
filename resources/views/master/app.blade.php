<!DOCTYPE html>
<html>
<head>
	<title></title>
  
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

@include('inc.nav')

 @yield('content')
	
	<div class="col-md-4 col-lg-4">


  @include('inc.sidebar')
			
</div>
<!--footer -->

	<div>
	@include('inc.footer')
	</div>
</body>
</html>
