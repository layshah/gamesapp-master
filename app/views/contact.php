<? ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interestship - Contact</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                <a style="color:black;" class="navbar-brand" href="index.html"><i class="fa fa-road"></i>  Interestship</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a style="display:inline-block;background-color:transparent;border-color:transparent;" class="btn btn-default btn-lg" href="index.html#student"><i class="fa fa-rocket"></i> Student </a></li>
                    <li><a class="btn btn-default btn-lg" style="display:inline-block;background-color:transparent;border-color:transparent;" href="index.html#employer"><i class="fa fa-user"></i> Employer</a></li>
                    <li><a class="btn btn-default btn-lg" style="display:inline-block;background-color:transparent;border-color:transparent;" href="#"><i class="fa fa-heart"></i> Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Contact <small>We'd Love to Hear From You!</small></h1>
        </div>
        


      </div><!-- /.row -->

      <div class="row">
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
        <div class="col-sm-8">
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
	                <label for="input1">Name</label>
	                <input type="text" name="contact_name" class="form-control" id="input1" required>
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email Address</label>
	                <input type="email" name="contact_email" class="form-control" id="input2" required>
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Phone Number</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3" required>
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Message</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4" required></textarea>
	              </div>
	              <div style="text-align:center;" class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Interestship</h3>
          <p>
            Venture Studio A G Teacher's School Campus, Near Hanuman Temple<br>Commerce Six Rd, Navrangpura, Amdavad, Gujarat 380009<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: +91-7676217177</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:team@interestship.com">team@interestship.com</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Sunday: 8:00 AM to 8:00 PM</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/Interestship" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
            <!--li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li-->
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->


      <hr>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="index.html#student">Student</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="index.html#employer">Employer</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#">Contact</a>
                        </li>
                    </ul> 
                    <p class="copyright text-muted medium">mail us at team@interestship.com or call us at +91-7676217177</p>                   
                    <p class="copyright text-muted small">Interestship 2014</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
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