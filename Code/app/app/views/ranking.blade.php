<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ranking | Your-budget</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- part script -->
<script src="js/jquery.js"></script>
<script src="js/wow.min.js"></script>
</head><!--/head-->
<body>

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--*********************************Link page******************************-->
                    <a class="navbar-brand" ><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <form  role="form" method="get" action="home">
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Home">
                            </form>
                        </li>
                        <li>    
                            <form  role="form" method="post" action="ranking">
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Ranking">
                            </form>
                        </li>
                        <li>
                            <form  role="form" method="post" action="graph">
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Graph">
                            </form>
                        </li>
                        <li>
                            <form  role="form" method="get" action="logOut">
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log out">
                            </form>
                        </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <div class="ranking" style="background-image: url(images/slider/bg11.jpg);background-size: cover;">   
        <div class="container wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms" style="margin-bottom: 700px; padding-top: 30px; ">
            <FONT COLOR=white size=5>Ranking</FONT>
            <div class="row">
              <div class="col-md-8">
                <table class="table table-condensed" style="margin-top: 15px;">
                    <!-- On cells (`td` or `th`) -->
                    <tr>
                        <td class="active">Rank</td>
                        <td class="active" width="70%">Name</td>
                        <td class="active">Point</td>
                    </tr>
                    
                    @for($i=0;$i<count($rank);$i++)
                    <tr>
                        <td class="active">{{$i+1}}</td>
                        <td class="active">{{$rank[$i]->name}}</td>
                        <td class="active">{{$rank[$i]->point}}</td>
                    </tr>
                    @endfor
                </table>
            </div>
            <div class="col-md-4"></div>
        </div>  
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
</div>


</body>

<!-- part script -->
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>


</html>
