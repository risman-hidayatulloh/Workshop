<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<div class="container">
			
			<Myheader></Myheader>

				<router-view></router-view>

			
		</div>
			
			<Myfooter></Myfooter>

	</div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>