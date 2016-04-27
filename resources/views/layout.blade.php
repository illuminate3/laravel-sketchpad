<!DOCTYPE html>
<html lang="en">
<head>

	<!-- meta -->
	<meta charset="UTF-8">
	<title>Sketchpad</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- libs -->
	<script src="{{ $assets }}lib/vue.js"></script>
	<script src="{{ $assets }}lib/router.min.js"></script>
	<script src="{{ $assets }}lib/jquery-1.12.3.js"></script>

	<!-- bootstrap -->
	<script src="{{ $assets }}lib/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{ $assets }}themes/{{ $theme }}.min.css">

	<!-- sketchpad -->
	<link rel="stylesheet" href="{{ $assets }}sketchpad.css">
	<script src="{{ $assets }}sketchpad.js"></script>

	<!-- variables -->
	<meta name="route" content="{{ $route }}">

	<!-- custom head -->
	@yield('head')

</head>
<body>

	@yield('content')

	@if ( Config::get('app.debug') )
	<script type="text/javascript">
		document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
	</script>
	<script>
		window._onLiveReloadFileChanged = function(file)
		{
			window.Sketchpad && Sketchpad.onFileChanged(file);
		}
	</script>
	@endif

</body>
</html>

