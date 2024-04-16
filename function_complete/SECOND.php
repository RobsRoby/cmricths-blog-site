<html>
<head>
<title>CODE - LOGIN</title>
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
height: 100%;
width: 100%;
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
<script type="text/javascript">window.history.forward();function noBack(){window.history.forward();}</script>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
<div id="grad1">
<br>
<br>
<br>
<br>
<br>
<p align="center">
<div align="center">
	<form class="form_black">
		<h1><font color="white" face="Century Gothic">LOGIN</font></h1>
	</form>
	<form action="homeadmin.php" method="post" class="form1">
		<font size="4" color="white" face="Century Gothic">
			<p>USERNAME</p>
			<input id="user" type="text" placeholder="Input Username. . ."  name="user"  min="5" maxlength="30" required>
			<p>PASSWORD</p>
			<input id="pass" type="password"  placeholder="Input Password. . ." name="pass" min="5" maxlength="15" required>
			<br><br>	
			<button id="btn" name="submit" id="button">LOGIN</button>
			<br><br>
		</font>
	</form>
	<a href="home.php"> Return. </a>
</div>
<p>
</div>
</body>
</html>