<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<style>
html,body {
	color: #eee;
	height: 100%;
	margin: 0;
}
body {
	background-color:#5e42a6;
	position: relative;
	font-family:'Source Sans Pro',sans-serif;
}
.message {
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
	text-align: left;
}
.message h1, .message h2, .message h3 {
	margin: 0;
	line-height: 1.2;
}
.message h2 {
	transition:color .2s linear;
	font-size:18px;
	line-height:46px;
	color:#fff;
}
.message h3 {
	transition:color .2s linear;
	font-size:12px;
	line-height:46px;
	color:#fff;
}
.message h1 {
	color:#8277c9;
	font-size: 3em;
}
.message h2 {
	margin: 30px 0;
}
.message h3 {
  font-size: 1.5em;
}
.message h4 {
	display: inline-block;
	margin: 0 15px;
}
.message button {
	color:#fff;
	background-color:#5e42a6;
	transition:color .2s linear,border-color .2s linear;
	font-size:14px;
	text-transform:uppercase;
	text-decoration:none;
	border:2px solid white;
	border-radius:99px;
	padding:8px 30px 9px;
	display:inline-block;
}
.message button:hover {
	background-color:rgba(255,255,255,.05);
}
</style>
<script>
	window.console = window.console || function(t) {};
</script>
<script>
	if (document.location.search.match(/type=embed/gi)) {
		window.parent.postMessage("resize", "*");
	}
</script>
</head>
<body translate="no">
<link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" />
<div class="message">
	<h1>404</h1>
	<h3>Oops, the page you're <br>looking for does not exist.</h3>
	<h2>You may want to head back to the homepage.</h2>
	<button onclick="window.location.href='../'">Go Back</button>
</div>
<script id="rendered-js">
 const randomFacts = [];
</script>
</body>
</html>