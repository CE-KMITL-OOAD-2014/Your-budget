<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome </title>

	<link href="css/login.css" rel="stylesheet" >
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
	<!-- Optional theme -->
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #E1FDEE; margin-bottom: 30px;">

	incomt
	@for($i=0;$i<count($listIncome);$i++)
		<p>{{$listIncome[$i]->info}}</p>
 		<form method="post" action="remove">
			<input type="hidden" name="delete" value="{{$listIncome[$i]->id}}">
			<input type="submit" value="delete">
		</form>	
	@endfor

	incomt
	@for($i=0;$i<count($listOutcome);$i++)
		<p>{{$listOutcome[$i]->info}}</p>
 		<form method="post" action="remove">
			<input type="hidden" name="delete" value="{{$listOutcome[$i]->id}}">
			<input type="submit" value="delete">
		</form>	
	@endfor


	reminder
	@for($i=0;$i<count($listReminder);$i++)
		<p>{{$listReminder[$i]->info}}</p>
 		<form method="post" action="removeReminder">
			<input type="hidden" name="delete" value="{{$listReminder[$i]->id}}">
			<input type="submit" value="delete">
		</form>	
	@endfor



</body>
</html>