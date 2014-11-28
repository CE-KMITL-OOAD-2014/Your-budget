<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Graph | Your-budget</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/item_hover.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="fonts/stylesheet.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">      

    <!--column graph-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        var date = new Date();
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Day', 'Income', 'expenses'],
            ['Today'               ,   {{$inPerDay[0]}},      {{$outPerDay[0]}}],
            [  date.getDate()-1 ,   {{$inPerDay[1]}},      {{$outPerDay[1]}}],
            [  date.getDate()-2 ,   {{$inPerDay[2]}},      {{$outPerDay[2]}}],
            [  date.getDate()-3 ,   {{$inPerDay[3]}},      {{$outPerDay[3]}}],
            [  date.getDate()-4 ,   {{$inPerDay[4]}},      {{$outPerDay[4]}}],
            [  date.getDate()-5 ,   {{$inPerDay[5]}},      {{$outPerDay[5]}}],
            [  date.getDate()-6 ,   {{$inPerDay[6]}},      {{$outPerDay[6]}}]
            ]);
          var options = {
            title: 'Income/expenses',
            hAxis: {title: '7Day', titleTextStyle: {color: 'red'}}
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
<!--end column graph-->


<!--pie graph-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Category', 'Used'],
      ['Food',      {{$category[0]}}],
      ['Travel',    {{$category[1]}}],
      ['Sport',     {{$category[2]}}],
      ['Transport', {{$category[3]}}],
      ['Fashion',   {{$category[4]}}],
      ['It',        {{$category[5]}}],
      ['etc',       {{$category[6]}}]
      ]); 
    var options = {
      title: 'expenses activities'
  };
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<!--end pie graph-->

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
                </li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->       
</header><!--/header-->

<div class="graph" style="background-image: url(images/slider/bg3.jpg);background-size: cover;">

    <!-- show normal-->
    <center> 
        <div class="container wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="500ms" style="padding: 30px;">   
            <div id="chart_div" style="width: 900px; height: 500px;">
            </div>
        </div>  
    </center>      

    <!-- show piechart -->
    <center>
        <div class="container wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="1000ms" style="padding: 30px;">
            <div id="piechart" style="width: 900px; height: 500px;">
            </div>
        </div>    
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
   
</footer>
<!--/#footer-->

<!-- part script -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

</body>
</html>