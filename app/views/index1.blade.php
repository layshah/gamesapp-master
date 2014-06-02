<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Interestship - Towards your interest</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="{{ asset('image/x-icon') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="{{ asset('image/x-icon') }}">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="{{ asset('image/x-icon') }}">
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="{{ asset('image/x-icon') }}">

    <!-- Custom Google Web Font -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quotes.css') }}" rel="stylesheet">

    <script>

</script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color:black;" class="navbar-brand" href="#"><i class="fa fa-road"></i>  Interestship</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a style="display:inline-block;background-color:transparent;border-color:transparent;" class="btn btn-default btn-lg" href="#student"><i class="fa fa-rocket"></i> Student </a></li>
                    <li><a class="btn btn-default btn-lg" style="display:inline-block;background-color:transparent;border-color:transparent;" href="#employer"><i class="fa fa-user"></i> Employer</a></li>
                    <li><a class="btn btn-default btn-lg" style="display:inline-block;background-color:transparent;border-color:transparent;" href="contact.php"><i class="fa fa-heart"></i> Contact</a></li>
                    <!--
                    <li><a class="btn btn-default btn-lg" style="display:inline-block;background-color:transparent;border-color:transparent;" href="login.php"><i class="fa fa-trophy"></i> Login</a></li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Interestship</h1>
                        <h3>towards your interest</h3>
                         <h1><i class="fa fa-road"></i></h1> 
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li><a href="#student" class="btn btn-default btn-lg"><i class="fa fa-star-half-o fa-fw"></i> <span class="network-name">intern</span></a>
                            <li><a href="projects.php" class="btn btn-default btn-lg"><i class="fa fa-star-half-o fa-fw"></i> <span class="network-name">Work on projects</span></a>
                            <li><a href="#employer" class="btn btn-default btn-lg"><i class="fa fa-fighter-jet fa-fw"></i> <span class="network-name">hire</span></a>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <div class="content-section-a">
        <div style="text-align:center;" class="container">
            <h1>We connect Students and Employers on the basis of their interest</h1>
            <br>
            <h3>we believe that people are more successful and satisfied when they pursue their interest</h3>
            <hr style="float:none;" class="section-heading-spacer">
            <h2>we provide interest based internships</h2>
        </div>
    </div>


    <div class="content-section-b" section id="student">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <img style="width: 75%;margin-left: 45%;" class="img-responsive" src="img/b1.jpg" alt="">
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6" style="text-align:center;">
                    <hr style="float:none;" class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Student</h2> 
                        <p class="lead">
  <h3>
      <?php  
        if (isset($_GET['s']))
        {  
          echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";    
        }
        elseif(isset($_GET['e'])) 
        {
          echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  
        }
      ?>

        </h3>
                    </p>
                     <form action="{{ action('GamesController@handleCreatestudent') }}" method="post" role="form"  name="form1">
        <div class="form-group col-lg-6">
            <label for="username">Name :</label>
            <input type="text" class="form-control" name="username" />
        </div>
        
        <div class="form-group col-lg-6">
            <label for="cell">Contact number</label>
            
            <input type="cell" class="form-control" name="email" />
        </div>

        <div class="form-group col-lg-6">
            <label for="email">Email</label>
            
            <input type="email" class="form-control" name="email" id="email"/>
        </div>
        
        <div class="form-group col-lg-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" />
        </div>
          
    
                <div style="text-align:center;" class="form-group col-lg-12">
                  <input type="hidden" name="save" value="contact">
                  
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </form>              
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->



        <!-- Carousel START --

<div class="content-section-a">
<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2>Success stories of people who pursued their interest</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
       -
        <div class="carousel-inner">
        

          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="img/nirmit.png" style="width:100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>ICE student of Nirma University, he pursued his passion and founded a million dollar company Cruxbot.</p> 
                  <small>Nirmit Parikh</small>
                </div>
              </div>
            </blockquote>
          </div>

          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="img/amit.png" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>CE student of LD College of Engineering, he pursued his interest in technology and founded allEvents.in</p>
                  <small>Amit Panchal</small>
                </div>
              </div>
            </blockquote>
          </div>

          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="img/jatin.png" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>IT student of Nirma University, he pursued his passion in entrepreneurship and founded Point10 and eChai.</p>
                  <small>Jatin Chaudhary</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
       
        

        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>
</div>




-->



    <div class="content-section-b" id="employer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6">
                    <img class="img-responsive" src="img/b3.jpg" alt="">
                </div>
                <div style="text-align:center;" class="col-lg-5  col-sm-pull-6 col-sm-6">
                    <hr style="float:none;" class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Employer</h2>
                    <p class="lead">
                     Hire passionate interns who are eager to learn, energetic and have interest in your domain of work. Interns are young and will bring fresh perspective to your business
                    </p>
                    <hr style="float:none;" class="section-heading-spacer">
                    <div class="row" style="text-align:center;">
                    <a style="text-align:center;" href="{{ action('GamesController@create') }}" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-fighter-jet fa-fw"></i> <span class="network-name">HIRE</span></a>
                  </div>


                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->


    <div class="banner">
        <div class="container">
            <div class="row">
                    <h2 style="text-align:center;">" Choose a job you love, and you will never have to work a day in your life "</h2>
                    <hr style="float:none;" class="section-heading-spacer">
                    <h3 style="text-align:center;">Confucius</h3>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.banner -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <ul class="list-inline">
                       <!-- 
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="student.html">Student</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="employer.html">Employer</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="contact.php">Contact</a>
                        </li>
                        -->
                    </ul> 
                    <p class="copyright text-muted medium">mail us at team@interestship.com or call us at +91-7676217177 | +91-9535395934 | +91-9879823914</p>
                    <p class="copyright text-muted small">Interestship 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49737929-1', 'interestship.com');
  ga('send', 'pageview');

</script>
</body>
</html>