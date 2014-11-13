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

	<div id="head" class="container-fluid"><!-- header-->
		<div class="row">
			<div class="col-md-8">img Your budged
			</div> 
			<div class="col-md-4"> 
				<div id="login" class="container"><!--login part-->

					<form class="form-signin" role="form" method="post" action="logIn">
						<h2 class="form-signin-heading">Please sign in</h2>
						<input type="text" class="form-control" placeholder="User name" required autofocus name="userName">
						<input type="password" class="form-control" placeholder="Password" required name="password">
						<label class="checkbox" style="padding-left:20px;">
							<input type="checkbox" value="remember-me"> Remember me
						</label>
						<!-- <button class="btn btn-lg btn-primarys btn-block" type="submit">Sign in</button> -->
						<input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">
					</form><!--end login part-->

					<div style="float: right; padding-top:10px; padding-bottom:10px;"><!--sign up-->
						<!-- Button trigger modal -->
						<button  class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Sign up</button>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="myModalLabel">Sign up</h4>
									</div>
									<div class="modal-body"><!--registeration-->
										<form role="form" action="register" method="post"><!--/////////////////////////////////////-->
											<div class="form-group">
												<label for="exampleInputEmail1">Name</label>
												<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" required name="name">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">User Name</label>
												<input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name" required name="userName">
											</div>

								<!--			<div class="form-group">
												<label for="exampleInputEmail1">Last Name</label>
												<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" required>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
											</div>
										-->
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password">
										</div>
											<!-- <div class="form-group">
												<label for="exampleInputPassword1">Re-Password</label>
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="rePassword">
											</div> -->
								<!--			<label class="radio-inline" required>
												<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked> Male
											</label>
											<label class="radio-inline">
												<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
											</label>
										-->	
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
											<!-- <button type="submit" class="btn btn-primary">Sign up</button> -->
											<input class="btn btn-primary"type="submit" value="Sign up">
										</div>
									</form>
								</div><!--end registeration-->
							</div>
						</div>
					</div>
				</div><!--end sign up-->
			</div> <!-- /container -->
		</div>
	</div>
</div><!--end header-->

<div id="midle" class="container-fluid"><!-- midle-->
	<div class="row">
		<div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			<h2>Mobility</h2>
			<p>Ability to work anywhere. The data is stored on the cloud.</p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			<h2>Change the future</h2>
			<p>hange the recording of income and expenses. Use of newer technology and more functionality added.</p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
			<h2>One head use</h2>
			<p>Intuitive, easy to understand web pages.</p>
		</div><!-- /.col-lg-4 -->
	</div><!-- /.row -->
</div><!-- end midle-->
<div id="bank" class="container">
</div>
<div class="footer">



@if(Session::has('notice'))
	<br>
	<div class="container">
		<div class="alert alert-danger" role="alert">
			<font color="red"><li>{{ Session::get('notice') }}</li></font>
		</div>
	</div>
</br>
@endif



</div>
</body>
</html>


