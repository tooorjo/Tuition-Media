<!DOCTYPE html>
<html>
<head>
	<title>@yield('pagename')</title>
	{!! Html::style('project1css/test.css') !!}
</head>
<body>
	<div style="background-color:rgb(240, 240, 240);">
		@yield('header')
	</div>
	<div class="container">
		@yield('content')
	</div>
	
	<div class="footer">
		@yield('footer')
	</div>
</body>
</html>
