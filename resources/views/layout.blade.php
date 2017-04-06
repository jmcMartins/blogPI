<!DOCTYPE html>
<html>
<head>
	<title>Layout Blade</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	    	<a class="navbar-brand" href="/blog/public/posts">
	    		<h4>Inicio</h4>
	      	</a>
	      	<a class="navbar-brand" href="/blog/public/posts/create">
	    		<h4>Novo Post</h4>
	      	</a>
	    </div>
	</div>
</nav>
<div class='container'>
	@yield('content')
</div>
</body>
</html>