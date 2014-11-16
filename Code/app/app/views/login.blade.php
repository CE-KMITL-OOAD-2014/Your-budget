<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome | Your-budget</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- script part -->
    <script src="js/jquery.js"></script>
    <script src="js/wow.min.js"></script>
</head><!--/head-->


<body class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><i class="fa fa-phone-square"></i>084-7368203</div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                        <ul class="social-share">
                            <!-- contact facebook Dev-->
                            <li>contact us</li>
                            <li><a href="https://www.facebook.com/warunyoo.thoung"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.facebook.com/best.ratchanon"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt="logo"></a>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    </header><!--/header-->


    <div class="login" style="background-image: url(images/slider/bg1.jpg);background-size: cover;">
        <div class="container" style="width: 350px; height: 600px; ">
            <div id="login" class="form-group"><!--login part-->
                <form class="form-signin" role="form" method="post" action="logIn">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <input type="text" class="form-control" placeholder="Username" required autofocus name="userName" >
                    <input type="password" class="form-control" placeholder="Password" required name="password">
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
                                    <form role="form" action="register" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" required name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name" required name="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password">
                                        </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                                        <input class="btn btn-primary" style="
                                        margin-bottom: 10px;"type="submit" value="Sign up">
                                    </div>
                                </form>
                            </div><!--end registeration-->
                        </div>
                    </div>
                </div>
            </div><!--end sign up-->
        </div> <!-- /container -->
    </div>


    <div style="padding: 30px 10px ;" class="container wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="500ms">
        <center>
         <div id="midle" class="container-fluid"><!-- midle-->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="images/pic2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h2><FONT COLOR=white>Mobility</FONT></h2>
                    <FONT COLOR=white>
                        <p>Ability to work anywhere. The data is stored on the cloud.</p>
                    </FONT>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/pic1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h2><FONT COLOR=white>Change the future</FONT></h2>
                    <FONT COLOR=white>
                        <p>hange the recording of income and expenses. Use of newer technology and more functionality added.</p>
                    </FONT>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/pic3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h2><FONT COLOR=white>Easy to use</FONT></h2>
                    <FONT COLOR=white><p>Intuitive, easy to understand web pages.</p>
                    </FONT>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- end midle-->
    </center>
</div>


<!-- part footer -->
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2014 <a target="_blank" >Your-budget</a>. Copyright
            </div>
            <div class="col-sm-6"></div>
        </div>
    </div>
</footer><!--/#footer-->


@if(Session::has('notice'))
        <br>
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <font color="red"><li>{{ Session::get('notice') }}</li></font>
            </div>
        </div>
    </br>

<script>
if(true) {
    {{ Session::get('notice') }});
}
</script>



    @endif

</body>

<!-- script part -->
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>


</html>