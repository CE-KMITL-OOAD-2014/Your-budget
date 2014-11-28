<!DOCTYPE html>
<html lang="en" style="background-image: url(images/slider/bg7.jpg)">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Your-budget</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">    
    
    <!-- part script -->
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.js"></script>


</head><!--/head-->

<body class="homepage">
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
<!-- header -->
<div class="home" style="background-image: url(images/slider/bg7.jpg);background-size: cover;">

    <div class="row" style="  margin-left:18%; margin-right:18%; padding-top: 20px; margin-bottom: 100px;">

        <!-- profile -->
        <div class="col-md-6 wow fadeInDown" data-wow-duration="2000ms" data-wow-delay="50ms" style="margin-bottom: 50px;" >

            <FONT COLOR=white size=5>Profile</FONT><br>

            <FONT COLOR=white size=3>Name    :        {{Auth::user()->name}}</FONT><br>

            <FONT COLOR=white size=3>Balance :        {{Auth::user()->balance}}</FONT><br>

            <FONT COLOR=white size=3>Point   :        {{Auth::user()->point}}</FONT><br>     
        </div>
        <!-- end profile -->


        <!-- Alert table -->
<div class="col-md-6">
            <div class="row" >
                <div class="col-md-2" style="padding-top: 15px;">
                     <FONT COLOR=white size=5>Alert</FONT>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myAlert">Add Alert</button>
                </div>   
            </div> 
        </div>

    <div class="col-md-6"style="margin-top:30px; padding: 9px; background:rgba(194, 27, 29, 0.57);">
        <div class="col-md-12" style="background:#FFFFFF; padding-left: 0px;padding-right: 0px; ">
            <table class="table table-condensed" style="
            margin-bottom: 0px;">
            <tr>
                <td class="active" width="35%">Detail</td>
                <td class="active">Amount</td>
                <td class="active">Due Date</td>
                <td class="active">Success</td>
                <td class="active">Del</td>
            </tr>

            @for($i=0;$i<count($listReminder);$i++)
            <tr>
                <td class="active">{{$listReminder[$i]->info}}</td>
                <td class="active">{{$listReminder[$i]->amount}}</td>
                <td class="active">{{$listReminder[$i]->date}}</td>
                <td class="active">
                    <form method="post" action="achiveReminder">
                        <input type="hidden" name="complete" value="{{$listReminder[$i]->id}}">
                        <input type="submit" value="complete">
                    </form>
                </td>
                <td class="active">
                    <form method="post" action="removeReminder">
                        <input type="hidden" name="delete" value="{{$listReminder[$i]->id}}">
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endfor
        </table>  
    </div> 
</div> 
<!-- end Alert table -->
</div> 
<!-- end Alert -->


<!-- income list -->
<div class="row" style="  margin-left:12.5%; margin-right:12.5%; " >
    <div class="container" style="margin-bottom: 50px;">
        <div class="row"><!-- income header -->
            <div class="col-md-2" style="padding-top: 15px;">
             <FONT COLOR=white size=5>Income</FONT>
         </div>
         <div class="col-md-2">
            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myIncome">Add Income</button>
        </div>
    </div><!-- end of income header -->

    <!-- income list -->
    <div class="container" style="margin-top:30px; padding: 9px; background:#FFFFFF">
        <div class="col-md-12" style="background:#FFFFFF; padding-left: 0px;padding-right: 0px; ">
            <table class="table table-condensed" style="
            margin-bottom: 0px;">
            <!-- On cells (`td` or `th`) -->
            <tr>
                <td class="active">Amount</td>
                <td class="active" width="45%">Detail</td>
                <td class="active">Date</td>
                <td class="active">Del</td>
            </tr>

            @for($i=0;$i<count($listIncome);$i++)
            <tr>
                <td class="active">{{$listIncome[$i]->amount}}</td>
                <td class="active">{{$listIncome[$i]->info}}</td>
                <td class="active">{{$listIncome[$i]->created_at}}</td>
                <td class="active">
                    <form method="post" action="removeIncome">
                        <input type="hidden" name="delete" value="{{$listIncome[$i]->id}}">
                        <input type="hidden" name="amount" value="{{$listIncome[$i]->amount}}">
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endfor
        </table>  
    </div> 
</div> 
</div>
</div> 
<!-- end income list -->

<!-- expenses list -->
<div class="row" style="  margin-left:12.5%; margin-right:12.5%; ">
    <div class="container" style="margin-bottom: 100px">
        <div class="row" ><!-- expenses header -->
            <div class="col-md-2" style="padding-top: 15px;">
                <FONT COLOR=white size=5>expenses</FONT>
            </div>
            <div class="col-md-2">
               <button  class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myexpenses">Add expenses</button>
           </div>
       </div><!-- end of expenses header -->

       <!-- expenses area right -->
       <div class="container" style="margin-top:30px; padding: 9px; background:#FFFFFF">
        <div class="col-md-12" style="background:#FFFFFF; padding-left: 0px;padding-right: 0px; ">
            <table class="table table-condensed" style="
            margin-bottom: 0px;">
            <!-- On cells (`td` or `th`) -->
            <tr>
                <td class="active">Amount</td>
                <td class="active" width="35%">Detail</td>
                <td class="active">Date</td>
                <td class="active">Category</td>
                <td class="active">Del</td>
            </tr>

            @for($i=0;$i<count($listExpenses);$i++)
            <tr>
                <td class="active">{{$listExpenses[$i]->amount}}</td>
                <td class="active">{{$listExpenses[$i]->info}}</td>
                <td class="active">{{$listExpenses[$i]->created_at}}</td>
                <td class="active">{{$listExpenses[$i]->category}}</td>
                <td class="active">
                    <form method="post" action="removeExpenses">
                        <input type="hidden" name="delete" value="{{$listExpenses[$i]->id}}">
                        <input type="hidden" name="amount" value="{{$listExpenses[$i]->amount}}">
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endfor
        </table>  
    </div> 
</div> 
</div>
</div>
<!-- end expenses list -->

<!-- service -->
<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown" style="margin-top: 20px;" >
            <h2>Our Service</h2>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Create Account</h3>
                            <p>Create an account In order to identify and access private information</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Recording Income expenses </h3>
                            <p>record Income and expenses on cloud service</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Alert for expenses list</h3>
                            <p>Reminders expenses that used In due time   </p><br>
                        </div>
                    </div>
                </div>                                      
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    <!--end services-->


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
   <!--end part footer-->


   <!-- Modal income-->
   <div class="modal fade" id="myIncome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Income</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="income">
                    <div class="form-group">
                        <label for="InputAmount">Amount:</label>
                        <input type="number" min="0" class="form-control" id="InputAmount" placeholder="Amount" required name="amount">
                    </div>
                    <div class="form-group">
                        <label for="InputInfo">Info:</label>
                        <input type="text" class="form-control" id="InputInfo" placeholder="Info" required name="info">
                    </div>
                    <!-- buttom cancle and submit -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                        <input class="btn btn-primary" style="
                        margin-bottom: 10px;" type="submit" value="Add Income" >
                    </div>
                </form>
            </div>
        </div>
    </div>           
</div>
<!--end modal income-->


<!-- Modal expenses-->
<div class="modal fade" id="myexpenses" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Add expenses</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="expenses">
                    <div class="form-group">
                        <label for="InputAmount">Amount:</label>
                        <input type="number" min="0" class="form-control" id="InputAmoune" placeholder="Amount" required name="amount">
                    </div>
                    <div class="form-group">
                        <label for="InputInfo">Info:</label>
                        <input type="text" class="form-control" id="InputInfo" placeholder="Info" required name="info">
                    </div>
                    <div class="form-Plan"><br>
                        <label for="Plan" class="form-Plan">
                           Category:
                       </label>
                       <select type="plan" id="plan" name="category">
                        <option value="Food">Food</option>
                        <option value="Travel">Travel</option>
                        <option value="Sport">Sport</option>
                        <option value="Transport">Transport</option>
                        <option value="Fashion">Fashion</option>
                        <option value="It">It</option>
                        <option value="etc">etc</option>
                    </select>
                </div>            
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <input class="btn btn-primary" style="
                    margin-bottom: 10px;" type="submit" value="Add expenses">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--end Add expenses-->

<!-- Modal Alert-->
<div class="modal fade" id="myAlert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Reminder</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="reminder">
                 <div class="form-group">
                    <label for="InputAmount">Amount:</label>
                    <input type="number" min="0" class="form-control" id="Amount" placeholder="Amount" required name="amount">
                </div>

                <div class="form-group">
                    <label for="InputInfo">Info:</label>
                    <input type="text" class="form-control" id="Input" placeholder="Info" required  name="info">
                </div>

                <div class="form-group">
                    <label for="InputDate">Date:</label>
                    <input type="date" min="{{date('Y-m-d')}}" class="form-control" id="Input" placeholder="date" required name="date">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <input class="btn btn-primary" style="
                    margin-bottom: 10px;" type="submit" value="Add Alert">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--end Add Alert-->
</body>

    <!-- part script -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</html>