
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Home</title>
</head>

<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>

<div id="wrapper">

    <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
            </button>
            <div class="navbar-brand">   
            </div>
        </div>

        <form action="" class="navbar-form navbar-left">
            <div class="input-group">
              <div class="input-group-btn">
                  <button class="btn  search-btn-icon">
                   <i class="fa fa-search" aria-hidden="true"></i>                  
                  </button>
               </div>
              <input type="Search" placeholder="Search..." class="form-control-serch search-box" />   
            </div>     
        </form>

        <!-- Top Menu Items -->
        <div class="items">
          <ul class="nav navbar-right top-nav">        
            <li class="editpro">
              <i class="fasett fa-cog" aria-hidden="true" class="menu-button" id="menu-button"></i> 
            <h5 class="pull-left login-person-head">You are logged in as   {{session('userrole')}}</h5> 
           
            </li>
            <li> <a href="{{URL::to('logout')}}"><button class="btn btn-danger" >Logout</button></a></li>
          </ul>
        </div>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #616060; border:1px solid #616060;">
            <ul class="nav navbar-nav side-nav">
              <a href="#"><img class="logostyle" src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620" alt="LOGO""></a>
                <li>
                   <a class="active" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-home" aria-hidden="true"></i>   <span style="color:white;">  Home </span></a>
                </li>
                <li>
                    <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-user-o" aria-hidden="true"></i>   <span style="color:white;">  Profile </span></a>
                </li>
                <li>
                    <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-calendar" aria-hidden="true"></i>   <span style="color:white;"> Events </span></a>
                </li>
                <li>
                    <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-envelope" aria-hidden="true"></i>  <span style="color:white;"> Messages </span></a>
                </li>
                <li>
                    <a class="#" href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-cogs" aria-hidden="true"></i>   <span style="color:white;"> Settings </span></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
  </nav>


<div class="jumbotron">




<h1>Welcome Mr. {{session('username')}}</h1>
</div>

<h2>Dashboard</h2>
@if(Session::has('userid') && Session::has('userrole') && Session::get('userrole')=='teacher')
<ul>
    <li><a href="{{URL::to('teacher1')}}">Teacher 1</a></li>
    <li><a href="{{URL::to('teacher2')}}">Teacher 2</a></li>
    <li><a href="{{URL::to('teacher3')}}">Teacher 3</a></li>
</ul>
@elseif(Session::has('userid') && Session::has('userrole') && Session::get('userrole')=='student')
<ul>
    <li><a href="{{URL::to('student1')}}">Student 1</a></li>
    <li><a href="{{URL::to('student2')}}">Student 2</a></li>
    <li><a href="{{URL::to('student3')}}">Student 3</a></li>
</ul>
@else
<ul>
    <li><a href="{{URL::to('admin1')}}">Admin 1</a></li>
    <li><a href="{{URL::to('admin2')}}">Admin 2</a></li>
    <li><a href="{{URL::to('admin3')}}">Admin 3</a></li>
</ul>

@endif

  </div><!-- /#wrapper -->
</body>
</html>