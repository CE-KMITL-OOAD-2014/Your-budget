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
	<p>Loged in</p>
	<!-- logout part -->
	<form class="form-signin" role="form" method="get" action="logOut">
		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign out" method="get" action="logOut">
	</form><!--end of logout part -->
	

	<label>income</label>
	<form method="post" action="income" >
		Amonut: <input type="number" min="0" required name="amount"><br>
		Info:  <input type="text" required name="info"><br>
		<input type="submit" value="Submit">
	</form><br>



	{{Auth::user()->name;}}
	{{Auth::user()->point;}}
	<!-- outcome -->
	<label>outcome</label>
	<form method="post" action="outcome">
		Amonut: <input type="number" min="0" name="amount"><br>
		Info:  <input type="text" name="info"><br>
		<select name="category">
			<option value="1">food</option>
			<option value="2">traval</option>
			<option value="3">sport</option>
			<option value="4">clothing</option>
		</select><br>
		<input type="submit" value="Submit">
	</form>

{{date("m-d-Y")}}

	<label>reminder</label>
	<form method="post" action="reminder">
		Amonut: <input type="number" min="0" name="amount"><br>
		Info:  <input type="text" name="info"><br>
		date: <input type="date" name="date" min="{{date('Y-m-d')}}"><br>
		<input type="submit" value="Submit">
	</form>


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
		 <form method="post" action="achiveReminder">
			<input type="hidden" name="complete" value="{{$listReminder[$i]->id}}">
			<input type="submit" value="complete">
		</form>	

	@endfor
	<form method="post" action="ranking">
		<input type="submit" value="kuy">
	</form>


	</form>
</body>
</html>