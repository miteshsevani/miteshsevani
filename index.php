<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mitesh Sevani - Web Developer - HTML, CSS, JavaScript, jQuery, SASS, LESS, PHP, MySQL, Bootstrap, Compass, Responsive Web Design">
    <meta name="author" content="Mitesh Sevani">
    <title>Mitesh Sevani - Web Developer - Portfolio</title>
    
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="images/favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio.css" rel="stylesheet">
    <link href="css/mitesh.css" rel="stylesheet">    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
</head>

<body id="page-top" class="index" data-ng-app="myApp" data-ng-controller="myCtrl">

<?php include ("mail/contact_me.php"); ?>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Mitesh Sevani</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#skills">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#company">Clients</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Mitesh Sevani (MSc)</div>
                <div class="intro-heading">Web Developer</div>
                <div class="row">
                    <div class="col col-lg-12">                        
                            <p>6 years experience in web development</p>
                            <p>First class honours MSc in E‑Commerce with Online Databases</p>                                                        
                            <p>Qualified yoga instructor</p>    
                    </div>
                </div>
                <div class="divider-2"></div>
                <a href="#about" class="page-scroll"><button class="button btn-primary btn-lg">Tell me more</button></a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="skills">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Skills</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-xs-6 col-sm-3">
					<img src="images/logos/html5.png" height="120" data-toggle="tooltip" data-placement="bottom" title="HTML 5" />
                </div>
                <div class="col-xs-6 col-sm-3">
                    <img src="images/logos/css3.png" height="120" data-toggle="tooltip" data-placement="bottom" title="CSS 3" />
                </div>
                <div class="col-xs-6 col-sm-3">
                    <img src="images/logos/javascript.png" height="120" data-toggle="tooltip" data-placement="top" title="JavaScript" />
                </div> 
                <div class="col-xs-6 col-sm-3">
                    <img src="images/logos/jquery.png" height="120" data-toggle="tooltip" data-placement="bottom" title="jQuery" />
                </div>                
            </div>
            
            <div class="divider-4 hidden-xs"></div>

            <div class="row text-center">                
                <div class="col-xs-6 col-sm-3">
                    <img src="images/logos/bootstrap.png" height="120" data-toggle="tooltip" data-placement="top" title="Bootstrap" />
                </div>              
                <div class="col-xs-6 col-sm-3">
                    <img src="images/logos/sass.png" height="120" data-toggle="tooltip" data-placement="bottom" title="SASS" />
                </div>                                             
                <div class="col-xs-6 col-sm-3">
                    <img src="images/logos/react-js.png" height="170" data-toggle="tooltip" data-placement="top" title="React JS" style="margin-top:1em;" />
                </div>                                      
                <div class="col-xs-6 col-sm-3">
                    <img src="images/logos/php.png" height="120" data-toggle="tooltip" data-placement="bottom" title="PHP - MySQL" />                                    
                </div>                                
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <div class="divider-4"></div>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="http://www.youthforsewa.org.uk/" target="_blank" class="portfolio-link">
                        <!--div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-arrow-right fa-3x"></i><br /><br />
                                <i>Go to website</i>
                            </div>
                        </div-->
                        <img src="images/portfolio/yfs.png" class="img-responsive img-thumbnail" alt="Youth for Sewa">
                    </a>
                    <!--<div class="portfolio-caption">
                        <h4>Youth for Sewa</h4>
                        <p class="text-muted"></p>
                    </div>-->
                </div>
                <div class="col-sm-6">
                    <a href="http://www.marguerite.com" target="_blank" class="portfolio-link">
                        <!--div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-arrow-right fa-3x"></i><br /><br />
                                <i>Go to website</i>
                            </div>
                        </div-->
                        <img src="images/portfolio/margueritefund.png" class="img-responsive img-thumbnail" alt="Marguerite Fund">
                    </a>
                    <!--<div class="portfolio-caption">
                        <h4>Marguerite Fund</h4>
                        <p class="text-muted"></p>
                    </div>-->
                </div>
            </div>
            <div class="divider-5"></div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="http://www.saudidownstream.com" target="_blank" class="portfolio-link">
                        <img src="images/portfolio/saudidownstream.png" class="img-responsive img-thumbnail" alt="Saudi Dowstream">
                    </a>
                    <!--<div class="portfolio-caption">
                        <h4>Saudi Downstream</h4>
                        <p class="text-muted"></p>
                    </div>-->
                </div>
                <div class="col-sm-6">
                    <a href="http://www.hyauk.org" target="_blank" class="portfolio-link">
                        <img src="images/portfolio/hya.png" class="img-responsive img-thumbnail" alt="Hindu Youth Association">
                    </a>
                    <!--<div class="portfolio-caption">
                        <h4>Hindu Youth Association</h4>
                        <p class="text-muted"></p>
                    </div>-->
                </div>
                <div class="divider-5"></div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="http://www.miteshsevani.com/roax-accademy/" target="_blank" class="portfolio-link">
                        <img src="images/portfolio/roaxacademy.png" class="img-responsive img-thumbnail" alt="Roax Accademy">
                    </a>
                    <!--<div class="portfolio-caption">
                        <h4>Roax Accademy</h4>
                        <p class="text-muted"></p>
                    </div>-->
                </div>
            </div>
        </div>
    </section>                  


    <section id="company">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Employers and Clients</h2>
                    <div class="divider-4"></div>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3">
                    <figure class="accenture" data-toggle="tooltip" title="Accenture"></figure>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <figure class="demomedia" data-toggle="tooltip" title="Demo Media"></figure>
                </div>

                <div class="divider-1 visible-xs"></div>

                <div class="col-xs-6 col-sm-3">
                    <figure class="engine" data-toggle="tooltip" title="The Engine Group"></figure>
                </div>                    
                <div class="col-xs-6 col-sm-3">
                    <figure class="wcrs" data-toggle="tooltip" title="WCRS"></figure>
                </div>                
            </div>

            <div class="divider-2"></div>

            <div class="row text-center">
                <div class="col-xs-6 col-sm-3">
                    <figure class="marguerite" data-toggle="tooltip" title="Marguerite"></figure>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <figure class="saudidownstream" data-toggle="tooltip" title="Saudi Downstream"></figure>
                </div>                
                
                <div class="divider-1 visible-xs"></div>

                <div class="col-xs-6 col-sm-3">
                    <figure class="hya" data-toggle="tooltip" title="Hindu Youth Association"></figure>
                </div>                                        
                <div class="col-xs-6 col-sm-3">
                    <figure class="esi" data-toggle="tooltip" title="ESI Media"></figure>
                </div>                                        
            </div>
            
            <div class="divider-2"></div>
            
            <div class="row text-center">
                <div class="col-xs-6 col-sm-3">
                    <figure class="independent" data-toggle="tooltip" title="The Independent"></figure>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <figure class="evening-standard" data-toggle="tooltip" title="The Evening Standard"></figure>
                </div>

                <div class="divider-1 visible-xs"></div>
                
                <div class="col-xs-6 col-sm-3">
                    <figure class="yfs" data-toggle="tooltip" title="Youth for Sewa"></figure>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading">About Me</h2>
                    <h4 class="section-subheading">Education</h4>
                    <p>
                        <ol>
                            <li>University of Westminister, London - MSc E-commerce with Online Databases, 2009</li>
                            <li>City University, London - BSc in Business Computing, 2007</li>
                            <li>S-VYASA Yoga University, Bangalore - Yoga Instructor Course, 2014</li>
                        </ol>                    
                    </p>
                    <h4 class="section-subheading">Voluntary Work</h4>
                    <p>I have been a member of Hindu Swayamsevak Sangh (HSS) since the age of 7, which is one of the largest voluntary organisations in the world. Activities include exercise, games and education sessions. Taking regular sessions with all age groups provides me with leadership, communication and organisational skills. Regular attendance has given me team working skills as well as professional development. I am involved in planning, organising and participating in various charity events, both at local and national level.</p>
                    <p>Sinxe April 2016, I have been volunteering as a yoga instructor at a local weekly Yoga class where we have a regular attendance of 20 students.</p>
                    <p>I taught Maths and Gujarati for 3 years on a voluntarily basis at GCSE level on weekends. This allowed me to gain valuable skills in communication, leadership, organisation and professional development.</p>

                    <h4 class="section-subheading">Hobbies and Extra Curricular Activities</h4>
                    <p>Travelling is one of my main hobbies and interests. I enjoy experiencing various cultures and people and always take the opportunity to travel. I have visited many countries, highlight being India where I travelled thoughtout the country, visiting various charity projects and tribal areas.</p>           
                    <p>Yoga is also one of my passions and I practice this regularly. I am a qualified Yoga teacher from S-VYASA university in Bangalore, India. I completed the one month Yoga Instructor Course in March 2014.</p>
                    <div class="divider-4"></div>
                    <div class="span12">
                        <a class="inline first button btn-primary btn-lg" href="docs/CV_Mitesh_Sevani.pdf" target="_blank">View my CV</a></p>                        
                        <a href="https://uk.linkedin.com/pub/mitesh-sevani/1a/54b/5b1" target="_blank">
                            <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png" height="44" border="0" alt="View my profile on LinkedIn">
                        </a>
                    </div>
                </div>
            </div>        
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Me</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php if($feedback !=null) { 
                        echo $feedback; }
                    ?>                
                    <form name="contact" id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#contact" method="POST" role="form" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="help-block text-danger"><?php echo $nameErr;?></p>
                                    <input type="text" class="form-control" placeholder="Name *" id="name" name="name" value="<?php echo $name;?>" required="true" />
                                </div>
                                <div class="form-group">
                                    <p class="help-block text-danger"><?php echo $emailErr;?></p>
                                    <input type="email" class="form-control" placeholder="Email *" id="email" name="email"  value="<?php echo $email;?>" required="true" />
                                </div>
                                <div class="form-group">
                                    <p class="help-block text-danger"><?php echo $numberErr;?></p>
                                    <input type="tel" class="form-control" placeholder="Contact number" id="number" name="number" value="<?php echo $number;?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="help-block text-danger"><?php echo $subjectErr;?></p>                                
                                    <input type="text" class="form-control" placeholder="Subject *" id="subject" name="subject" value="<?php echo $subject;?>" required="true" />                         
                                </div>                            
                                <div class="form-group">
                                    <p class="help-block text-danger"><?php echo $messageErr;?></p>                                
                                    <textarea class="form-control" placeholder="Message *" id="message" name="message" required="true"><?php echo $message;?></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-left">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <span class="copyright">Copyright &copy; <?php echo date('Y');?> Mitesh Sevani - All rights reserved.</span>
                </div>                
            </div>
        </div>
    </footer>


	<!-- Angular -->
    <script src="js/myscript.js"></script>    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>


    <!-- Google Analytics-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-68171040-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>
