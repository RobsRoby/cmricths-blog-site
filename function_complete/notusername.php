<html>
<head>
<style>
#grad1 {
	height: 640px;
	background-color: white;
	background-image: linear-gradient(to right, #00B7FF, #FFFFC7);
 }
 
.button {
display: inline-block;
border-radius: 12px;
color: white;
text-align: center;
font-size: 28px;
height: 50px;
width: 400px;
transition: all 0.5s;
background-color: #00B7FF;
font-family: Century Gothic;
}

.button span {
display: inline-block;
position: relative;
transition: 0.5s;
}

.button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.button:hover span {
padding-right: 25px;
}

.button:hover span:after {
opacity: 1;
right: 0;
}

</style>
</head>
<body>
<div id="grad1">
<br>
<br>
<br>
<br>
<br>
<p align="center">
<div align="center">
	<form>
		<h1><font color="white">Username is Incorrect.</font></h1>
	</form>
</div>
<p>
</div>
</body>
<script>
var delay = 1500; 
setTimeout(function(){ window.location.href = "second.php"}, delay);
</script>
</html>