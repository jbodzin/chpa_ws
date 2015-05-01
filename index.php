<!doctype html>
<!--Conditionals for IE9 Support-->
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->


<html>
  <head>
    <meta charset="utf-8">
    <title>Crazy Horse Cabaret Port Allen</title>
    <meta name="description" content="Ultimate Responsive HTML5 Landing Page" />
		<meta name="keywords" content="responsive html5 template, landing page, bootstrap 3.0, css, jquery" />
		<meta name="author" content="8Guild" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Favicon-->
    <link rel="shortcut icon" href="img/Icons/CH-Favicon-Blue.png" type="image/x-icon">
    <link rel="icon" href="img/Icons/CH-Favicon-Blue.png" type="image/x-icon">
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap 3.1.1-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--Icon Fonts-->
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/icon-moon.css" rel="stylesheet" media="screen">
    <!--Animations-->
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <!--Theme Styles-->
    <link href="css/theme-styles.css" rel="stylesheet" media="screen">
    <!--Color Schemes-->
    <link href="css/colors/color-kirkendoll.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
		<script src="js/libs/modernizr.custom.js"></script>
    <!--Adding Media Queries and Canvas Support for IE8-->
    <!--[if lt IE 9]>
      <script src="js/plugins/respond.min.js"></script>
      <script src="js/plugins/excanvas.js"></script>
    <![endif]-->
  </head>

  <!--Body-->
  <body class="space-top">
  	<!--Page Preloading-->
    <div id="preloader"><div id="spinner"></div></div>
    
    
    <!--Header-->
    <header class="stiky-header">
    	<div class="container group">
      	<a class="logo social" href="https://www.facebook.com/CrazyHorseCabaret" width="60px"><img src="img/Icons/Facebook-Icon.png" alt="Facebook"/></a>
        <a class="logo social" href="https://twitter.com/crazyhorsecab" width="60px"><img src="img/Icons/Twitter-Icon.png" alt="Twitter"/></a>
        <a class="logo social" href="http://www.yelp.com/biz/crazy-horse-cabaret-port-allen-2" width="60px"><img src="img/Icons/Yelp-Icon.png" alt="Yelp"/></a>
        <a class="logo-mobile social" href="https://www.facebook.com/CrazyHorseCabaret" width="60px"><img src="img/Icons/Facebook-Icon-Small.png" alt="Facebook"/></a>
        <a class="logo-mobile social" href="https://twitter.com/crazyhorsecab" width="60px"><img src="img/Icons/Twitter-Icon-Small.png" alt="Twitter"/></a>
        <a class="logo-mobile social" href="http://www.yelp.com/biz/crazy-horse-cabaret-port-allen-2" width="60px"><img src="img/Icons/Yelp-Icon-Small.png" alt="Yelp"/></a>
        <div class="navi-toggle group">
        	<span class="dot"></span><span class="line"></span>
          <span class="dot"></span><span class="line"></span>
          <span class="dot"></span><span class="line"></span>
          <span class="dot"></span><span class="line"></span>
        </div>
        <nav class="main-navi">
        	<ul>
          	<li class="active"><a class="scroll-up" href="#">Home</a></li>
            <li class=""><a class="scroll" href="#food">Food &amp; Drinks</a>
            <!--<ul class="dropdown">
                <li><a href="#happy-hour">Happy Hour</a></li>
                <li><a href="#free-lunch">Free Lunch</a></li>
                <li><a href="#dinner">Dinner</a></li>
              </ul>--></li>
            <li class=""><a class="scroll" href="#photos">Photos</a></li>
            <li class=""><a class="scroll" href="#bottle-service">Bottle Service</a></li>
            <li class=""><a class="scroll" href="#careers">Careers</a></li>
            <li class=""><a class="scroll" href="#contact">Contact Us</a></li>
            <li class=""><a class="scroll" href="#location">Location &amp; Hours</a></li>
          </ul>
        </nav>
      </div>
    </header>
          
  <div class="container body-container">
    <!--Main-->
    <section class="page-block" id="main">
    	<div class="container">
        <div class="row">
          <script type="text/javascript">
            if(window.innerWidth>767){
              document.write('<img src="img/images_web/Header-Logo-Girl.png" class="large-photo" alt="Crazy Horse Caberet"/>')
            }
            else{
              document.write('<img src="img/images_web/Mobile-Header-Logo-Girl.png" class="large-photo-mobile" alt="Crazy Horse Caberet"/>')
            }
          </script>
        </div>
        <div class="row features">
          <div class="col-lg-4 col-md-4 col-sm-4">

            <div class="feature-img">
              <img src="img/images_web/Free-Lunch.png" class="top-section-headers" alt="Free-Lunch"/>
            </div>
            <div class="">
              <script type="text/javascript">
              var header = '';
              var img = '';
              var d = new Date();
              var n = d.getDay(); 
              if(n==1){
                  header = 'Red Beans &amp; Rice';
                  img = 'img/food/Monday-Redbeans.png';
              }
              else if(n==2){
                  header = 'Jambalaya';
                  img = 'img/food/Tuesday-Jambalaya.png';
              }
              else if(n==3){
                  header = 'Chicken Fried Steak';
                  img = 'img/food/Wednesday-ChxFriedSteak.png';
              }
              else if(n==4){
                  header = 'Spaghetti &amp; Meatballs';
                  img = 'img/food/Thursday-Spaghetti.png';
              }
              else if(n==5){
                  header = 'Catfish & White Beans';
                  img = 'img/food/Friday-Catfish.png';
              }
              document.write('<h3>Today: ' + header + '!</h3> <a class="scroll" href="#food"><img src="' + img + '"; width="131" height="131" class="square-photos" alt="Free Lunch"></a>')
              </script>
            </div>  
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="feature-img"><img src="img/images_web/Events-Small.png" class="top-section-headers" alt="Events"></div>
            <h3>See the Photos!</h3>
            <a class="scroll" href="#events"><img src="img/Party-Thumbnails/Event-Thumbnail.png" width="131" height="131" class="square-photos" alt="Free Lunch"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="feature-img"><img src="img/images_web/VIP-Access.png" class="top-section-headers" alt="VIP Access"/></div>
            <h3>Sign up to recieve a free admission, exclusive invites, and other goodies!</h3>
            <p>
            <script src="//app-ab03.marketo.com/js/forms2/js/forms2.min.js"></script>
            <form id="mktoForm_1109"></form>
            <script>MktoForms2.loadForm("//app-ab03.marketo.com", "634-KAC-055", 1109);</script>
            </p>
            <h3 class="follow-us">Follow Us!</h3>
            <div class="col-lg-4 col-md-4 col-sm-1">
              <a href="https://www.facebook.com/CrazyHorseCabaret"><img src="img/Icons/Facebook-Icon.png" alt="Facebook" class="social-icons facebook"/></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-1">
              <a href="https://twitter.com/crazyhorsecab"><img src="img/Icons/Twitter-Icon.png" alt="Twitter" class="social-icons"/></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-1">
              <a href="http://www.yelp.com/biz/crazy-horse-cabaret-port-allen-2"><img src="img/Icons/Yelp-Icon.png" alt="Yelp" class="social-icons yelp"/></a>
            </div>
          </div>
        </div>
      </div>
      <!--Tabs-->
      <div class="container-fluid" id="food">
        <div class="row page-header">
          <img style="margin-bottom: 5px;" src="img/images_web/Food-&-Drinks.png" alt="Photos" class="section-header"/>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs central">
            <li><a href="#happy-hour" data-toggle="tab">Happy Hour</a></li>
            <li class="active"><a href="#free-lunch" data-toggle="tab">Free Lunch</a></li>
            <li><a href="#dinner" data-toggle="tab">Dinner</a></li>
          </ul>
        </div>
      </div>
      <!-- Tab panes -->
      <div class="container">
        <div class="row tab-content central">
          <div class="tab-pane fade in col-lg-12" id="happy-hour">
          	<div class="row">
              <div class="tab-header">
                <span><h5>Beer and Cocktail Specials<br>Monday - Friday 5:00pm - 7:00 pm</h5></span>
              </div>
            	<div class="col-lg-6 col-md-6 animated fadeInLeft photo-subtext">
                <img src="img/food/Happy-Hour-Beer.png" class="square-photos" alt="$3 Domestic Beers"/>
                <p>$3 Domestic Beers</p>
              </div>
            	<div class="col-lg-6 col-md-6 animated fadeInRight photo-subtext">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="img/food/Happy-Hour-Cocktail.png" class="square-photos" alt="$3 Well Cocktails"/>
                    <p class="double-space-bottom">$3 Well Cocktails</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade in active col-lg-12" id="free-lunch">
          	<div class="row">
              <div class="tab-header">
                <span><h5>Sit down for a complementary lunch<br>and enjoy the view.</h5></span>
              </div>
            	<!--<div class="col-lg-4 col-md-4 animated fadeInLeft photo-subtext">
                <img src="img/features/2.png" alt="Font Icons"/>
                <p>Monday:</p>
                <p>Red Beans &amp; Rice</p>
              </div>
            	<div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext">
                <h2>[Photo]</h2>
                <p>Tuesday:</p>
                <p>Jambalaya</p>
              </div>
              <div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext">
                <h2>[Photo]</h2>
                <p>Wednesday:</p>
                <p>Chicken Fried Steak</p>
              </div>-->
              <script type="text/javascript">
              var today = '';
              var tomorrow = '';
              var nextday = '';
              var d = new Date();
              var n = d.getDay(); 
              var monday = 'img/food/Monday-Redbeans.png" class="square-photos" alt="Red Beans &amp; Rice"/><h4>Monday:</h4><p>Red Beans &amp; Rice</p></div>'
              var tuesday = 'img/food/Tuesday-Jambalaya.png" class="square-photos" alt="Jambalaya"/><h4>Tuesday:</h4><p>Jambalaya</p></div>'
              var wednesday = 'img/food/Wednesday-ChxFriedSteak.png" class="square-photos" alt="Chicken Fried Steak"/><h4>Wednesday:</h4><p>Chicken Fried Steak</p></div>'
              var thursday = 'img/food/Thursday-Spaghetti.png" class="square-photos" alt="Spaghetti &amp; Meatballs"/><h4>Thursday:</h4><p>Spaghetti &amp; Meatballs</p></div>'
              var friday = 'img/food/Friday-Catfish.png" class="square-photos" alt="Catfish &amp; White Beans"/><h4>Friday:</h4><p>Catfish &amp; White Beans</p></div>'
              if(n==1){
                  today = monday;
                  tomorrow = tuesday;
                  nextday = wednesday;
              }
              else if(n==2){
                  today = tuesday;
                  tomorrow = wednesday;
                  nextday = thursday;
              }
              else if(n==3){
                  today = wednesday;
                  tomorrow = thursday;
                  nextday = friday;
              }
              else if(n==4){
                  today = thursday;
                  tomorrow = friday;
                  nextday = monday;
              }
              else if(n==5){
                  today = friday;
                  tomorrow = monday;
                  nextday = tuesday;
              }
              document.write('<div class="col-lg-4 col-md-4 animated fadeInLeft photo-subtext"><img src="' + today)
              document.write('<div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext"><img src="' + tomorrow)
              document.write('<div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext"><img src="' + nextday)
              </script>
            </div>
          </div>
          <div class="tab-pane fade col-lg-12" id="dinner">
          	           <div class="row">
              <div class="tab-header">
                <span><h5>Dinner Menu<br>7 Days a Week 5:00pm - 1:00am</h5></span>
              </div>
              <div class="col-lg-4 col-md-4 animated fadeInLeft photo-subtext">
                <img src="img/food/Appetizer-CHX-Wings.png" class="square-photos" alt="Font Icons"/>
                <h4>Appetizers, $6</h4>
                <p>Buffalo Wings ($8)<br>
                    Cheese Sticks<br>
                    Jalepeño Poppers<br>
                    Spinach & Artichoke Dip<br>
                    Crazy Horse Sampler ($8)</p>
              </div>
              <div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext">
                <img src="img/food/Side-Onion Rings.png" class="square-photos" alt="Font Icons"/>
                <h4>Sides, $3</h4>
                <p>French Fries<br>
                Sweet Potato Fries<br>
                Onion Rings</p>
              </div>
              <div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext">
                <img src="img/food/Entree-Alfredo.png" class="square-photos" alt="Font Icons"/>
                <h4>Entrees, $8</h4>
                <p>Fettuccini Alfredo<br>
                Chicken Salad (Fried or Grilled)<br>
                Shrimp Salad (Fried or Grilled)<br>
                Chicken Sandwich (Fried or Grilled w/side)<br>
                Shrimp Sandwich (Fried or Grilled w/side)<br>
                Chicken Platter (Fried or Grilled w/side)<br>
                Shrimp Platter (Fried or Grilled w/side)<br>
                Hamburger & Fries ($5)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Gallery-->
    <section class="page-block" id="photos">
      <div class="container">
        <div class="row page-header">
          <img src="img/images_web/Photos.png" alt="Photos" class="section-header"/>
        </div>
        <div class="row">
          <ul class="gallery">
            <li>
              <a href="#" data-largesrc="img/Party-Thumbnails/Christmas-Party.png" data-title="Christmas Party" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/Party-Thumbnails/Christmas-Party.png" alt="Christmas Party"/>
                <span class="img-caption">Christmas Party</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/Party-Thumbnails/Halloween-Party.png" data-title="Halloween Party" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/Party-Thumbnails/Halloween-Party.png" alt="Halloween Party"/>
                <span class="img-caption">Halloween Party</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/Party-Thumbnails/Luau-Party.png" data-title="Luau Party" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/Party-Thumbnails/Luau-Party.png" alt="Luau Party"/>
                <span class="img-caption">Luau Party</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/Party-Thumbnails/Masquerade-Party.png" data-title="Masquerade Party" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/Party-Thumbnails/Masquerade-Party.png" alt="Masquerade Party"/>
                <span class="img-caption">Masquerade Party</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/Party-Thumbnails/Car-Show.png" data-title="Car Show " data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/Party-Thumbnails/Car-Show.png" alt="Car Show"/>
                <span class="img-caption">Car Show</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/Party-Thumbnails/UFC-Fight-Night.png" data-title="UFC Fight Night" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/Party-Thumbnails/UFC-Fight-Night.png" alt="UFC Fight Night"/>
                <span class="img-caption">UFC Fight Night</span>
              </a>
            </li>
            <!--<li>
              <a href="#" data-largesrc="img/gallery/7.jpg" data-title="London Boat" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_7.png" alt="thumb07"/>
                <span class="img-caption">London Boat</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/8.jpg" data-title="Apple Air" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_8.png" alt="thumb08"/>
                <span class="img-caption">Apple Air</span>
              </a>
            </li>-->
          </ul>
        </div>
      </div>
    </section>
  
      <!--Events-->
    <!--<section class="page-block less-space-bottom" id="events">
    	<div class="container">
        <div class="row page-header">
          <img src="img/images_web/Events.png" class="section-header" alt="Events"/>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Line Chart</h3>
            <canvas id="lineChart" width="550" height="320"></canvas>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Bar Chart</h3>
            <canvas id="barChart" width="550" height="320"></canvas>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Pie Chart</h3>
            <div class="group">
              <div class="pie-chart">
                <canvas id="pieChart" width="260" height="260"></canvas>
              </div>
              <div class="pie-chart-legend animated-legend">
                <div style="color:#ff6f69;" class="label"><span>20%</span>Item01</div>
                <div style="color:#e7e7ea;" class="label"><span>25%</span>Item02</div>
                <div style="color:#313447;" class="label"><span>40%</span>Item01</div>
                <div style="color:#ffad10;" class="label"><span>15%</span>Item02</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Doughnut Chart</h3>
            <div class="group">
              <div class="pie-chart">
                <canvas id="doughnutChart" width="260" height="260"></canvas>
              </div>
              <div class="pie-chart-legend animated-legend">
                <div style="color:#ff6f69;" class="label"><span>20%</span>Item01</div>
                <div style="color:#e7e7ea;" class="label"><span>25%</span>Item02</div>
                <div style="color:#313447;" class="label"><span>40%</span>Item01</div>
                <div style="color:#ffad10;" class="label"><span>15%</span>Item02</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
    <!--Bottle Service--> 
    <section class="page-block" id="bottle-service">
    	<div class="container">
        <div class="row page-header">
          <img src="img/images_web/Bottle-Service.png" class="section-header" alt="Bottle Service"/>
        </div>
        <div class="row">
          <script type="text/javascript">
            if(window.innerWidth>767){
              document.write('<img src="img/food/Bottle-Service.png" class="large-photo" alt="Bottle Service"/>')
            }
            else{
              document.write('<img src="img/food/Bottle-Service-Small.png" class="large-photo-mobile" alt="Bottle Service"/>')
            }
          </script>
        	<div class="col-lg-6 col-md-6 col-sm-6 bottle-service-adj">
            <div class="bottles-mixers">
            	<div class="header">
              	<h3>Bottles &amp; Mixers</h3>
                <span class=""></span>
              </div>
              <div class="body">
                <p>Well - $200<br>Premium - $250<br>Super Premium - $300</p>
              </div>
            </div>  
          </div>
        	<div class="col-lg-6 col-md-6 col-sm-6 bottle-service-adj">
          	<div class="header">
            	<h3>Champagne</h3>
              <span class=""></span>
            </div>
            <div class="body align-bottle-service">
              <div class="champagne-list col-lg-4 col-md-6 col-sm-6">
                <p>House - $50<br>Rosa - $100<br>Moet - $150<br>PJ - $200</p>
              </div> 
              <div class="col-lg-6 col-md-6 col-sm-6">
                <p>Dom Perigion - $300<br>Ace of Spades - $500<br>Ace of Spades Rose - $1000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Careers-->
    <section class="page-block" id="careers">
    	<div class="container">
        <div class="row page-header">
          <img src="img/images_web/Careers.png" class="section-header" alt="Careers"/>
        </div>
        <div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-6">
            <div class="career-text">
            	<p>We're always looking for new talent!</p>
              <p>Whether it be on stage, on the floor, behind the bar or at the door, if you feel you would be an asset, come in to submit an application.</p>
              <p>Give us a call, drop off a resume, or send us an email. Contact information is below.</p>
            </div>
          </div>
        	<div class="col-lg-6 col-md-6 col-sm-6 photo-subtext">
          <img src="img/images_web/Careers-Photo.png" class="" width="90%" alt="Careers"/>
          </div>
        </div>
      </div>
    </section>
    
    <!--Contact Us-->
    <section class="page-block" id="contact">
      <div class="container">
        <div class="row page-header">
          <div class="col-lg-2 col-md-2"></div>
          <div class="col-lg-7 col-md-7">
            <img src="img/images_web/Contact-Us.png" class="section-header">
            <br></br>
            <script src="//app-ab03.marketo.com/js/forms2/js/forms2.min.js"></script>
            <form id="mktoForm_1110"></form>
            <script>MktoForms2.loadForm("//app-ab03.marketo.com", "634-KAC-055", 1110);</script>
          </div>  
        </div>
      </div>
    </section>
    
    <!--Location-->
    <section class="page-block" id="location">
      <div class="container">
        <div class="row page-header">
          <img src="img/images_web/Location-&-Hours.png" class="section-header">
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-3">
          	<div class="row space-bottom location-text">
            	<div class="col-lg-9 col-md-9">
              	<h3>Address</h3>
              </div>
            </div>
            <div class="row location-text">
            	<div class="col-lg-12">
                <p><b>Address:</b><br>
                2901 I-10 Frontage Road<br>
                Port Allen, LA 70767<br>
                (225) 387-6444</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="row width-correction">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3439.6359312420677!2d-91.24684099999999!3d30.446420999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86241e642afdfb8d%3A0x3f4c607dba7f5f31!2sCrazy+Horse+Cabaret!5e0!3m2!1sen!2sus!4v1429133140972" width="100%" height="330" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
          	<div class="row space-bottom location-text">
            	<div class="col-lg-8 col-md-8">
              	<h3>Hours:</h3>
              </div>
            </div>
            <div class="row location-text">
            	<div class="col-lg-12">
              	<p>Open 7 days a week<br>
                Free Lunch: 11am until 2pm<br>
                Happy Hour: 5pm until 7pm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Footer-->
    <footer class="footer">
    	<div class="container">             
        <div class="row">
        	<div class="col-lg-12">
          	<p class="copyright">&copy; 2015 Kirkendoll Management. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    
    <!--Scroll To Top Button-->
    <div id="scroll-top" class="scroll-up"><i class="icon-arrow-up"></i></div>
    
    <!--Javascript (jQuery) Libraries and Plugins-->
		<script src="js/libs/jquery-1.10.2.min.js"></script>
		<script src="js/libs/jquery.easing.1.3.js"></script>
		<script src="js/plugins/bootstrap.min.js"></script>
		<script src="js/plugins/jquery.touchSwipe.min.js"></script>
		<script src="js/plugins/jquery.placeholder.js"></script>
    <script src="js/plugins/icheck.min.js"></script>
    <script src="js/plugins/jquery.validate.min.js"></script>
		<script src="js/plugins/gallery.js"></script>
    <script src="js/plugins/jquery.fitvids.js"></script>
		<script src="js/plugins/jquery.bxslider.min.js"></script>
		<script src="js/plugins/chart.js"></script>
		<script src="js/plugins/waypoints.min.js"></script>
    <script src="js/plugins/smoothscroll.js"></script>
		<script src="js/landing2.js"></script>
  </div>  
  </body><!--Close Body-->

</html>