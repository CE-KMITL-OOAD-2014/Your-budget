<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome </title>

</head>

<body style="background-color: #E1FDEE; margin-bottom: 30px;">
	<p>Kuy pass pid</p>
	


		@for($i=0;$i<count($rank);$i++)
		<p>{{$rank[$i]->point}}</p>
	@endfor

</body>
</html>