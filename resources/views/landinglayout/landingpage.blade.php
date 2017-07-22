<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Allons-y!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="{{ url('css/smt-bootstrap.css')}}" rel="stylesheet">

		<!--[if lte IE 8]><script src="url('js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{ url('css/main.css')}}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="url('css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="url('css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
			@include('landinglayout.nav')

			<!-- Banner -->
			@include('landinglayout.content')

			<!-- Footer -->
				<footer id="footer">
					
					<ul class="copyright">
						<li>&copy; Allons-y. All rights reserved.</li><li>Design Powered By: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="{{url('js/jquery.min.js')}}"></script>
			<script src="{{url('js/jquery.scrolly.min.js')}}"></script>
			<script src="{{url('js/jquery.dropotron.min.js')}}"></script>
			<script src="{{url('js/jquery.scrollex.min.js')}}"></script>
			<script src="{{url('js/skel.min.js')}}"></script>
			<script src="{{url('js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="url('js/ie/respond.min.js"></script><![endif]-->
			<script src="{{url('js/main.js')}}"></script>

	</body>
</html>