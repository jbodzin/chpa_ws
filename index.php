<!doctype html>
<!--Conditionals for IE9 Support-->
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->


<html>
  
  <?php require "head.php" ?>


  <!--Body-->
  <body class="space-top">
  	<!--Page Preloading-->
    <div id="preloader"><div id="spinner"></div></div>
    
    
    <!--Header-->
    <header class="stiky-header">
    	<div class="container group">
      	<a class="logo social" href="https://www.facebook.com/CrazyHorseCabaret" target="_blank" width="60px"><img src="img/Icons/Facebook-Icon.png" alt="Facebook"/></a>
        <a class="logo social" href="https://twitter.com/crazyhorsecab" target="_blank" width="60px"><img src="img/Icons/Twitter-Icon.png" alt="Twitter"/></a>
        <a class="logo social" href="http://www.yelp.com/biz/crazy-horse-cabaret-port-allen-2" target="_blank" width="60px"><img src="img/Icons/Yelp-Icon.png" alt="Yelp"/></a>
        <a class="logo-mobile social" href="https://www.facebook.com/CrazyHorseCabaret" target="_blank" width="60px"><img src="img/Icons/Facebook-Icon-Small.png" alt="Facebook"/></a>
        <a class="logo-mobile social" href="https://twitter.com/crazyhorsecab" target="_blank" width="60px"><img src="img/Icons/Twitter-Icon-Small.png" alt="Twitter"/></a>
        <a class="logo-mobile social" href="http://www.yelp.com/biz/crazy-horse-cabaret-port-allen-2" target="_blank" width="60px"><img src="img/Icons/Yelp-Icon-Small.png" alt="Yelp"/></a>
        <div class="navi-toggle group">
        	<span class="dot"></span><span class="line"></span>
          <span class="dot"></span><span class="line"></span>
          <span class="dot"></span><span class="line"></span>
          <span class="dot"></span><span class="line"></span>
        </div>
        <nav class="main-navi">
        	<ul>
          	<li class="active"><a class="scroll-up" href="#">Home</a></li>
            <li class=""><a class="scroll list-test" href="#food">Food &amp; Drinks</a>
            <!--<ul class="dropdown">
                <li><a href="#happy-hour">Happy Hour</a></li>
                <li><a href="#free-lunch">Free Lunch</a></li>
                <li><a href="#dinner">Dinner</a></li>
              </ul>--></li>
            <li class=""><a class="scroll" href="#photos">Photos</a></li>
            <li class=""><a class="scroll" href="#events">Events</a></li>
            <li class=""><a class="scroll" href="#bottle-service">Bottle Service</a></li>
            <li class=""><a class="scroll" href="#careers">Careers</a></li>
            <li class=""><a class="scroll" href="#location">Location &amp; Hours</a></li>
            <li class=""><a class="scroll" href="#contact">Contact Us</a></li>
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
    </section>
    
    <!--Features-->
    <section id="features">   
        <div class="row features">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="feature-img">
              <a class="scroll" href="#food"><img src="img/images_web/Free-Lunch.png" class="top-section-headers" alt="Free-Lunch"/></a>
            </div>
            <div class="">
              <script type="text/javascript">
              var header = '';
              var img = '';
              var d = new Date();
              var n = d.getDay(); 
              if(n==1){
                  header = 'Red Beans &amp; Rice';
                  if(window.innerWidth>768){
                    img = 'img/food/Monday-Redbeans.png';
                  }
                  else{
                    img = 'img/food/Food-Mobile/Monday-Redbeans-Mobile.png';
                  }
              }
              else if(n==2){
                  header = 'Jambalaya';
                  if(window.innerWidth>768){
                    img = 'img/food/Tuesday-Jambalaya.png';
                  }
                  else{
                    img = 'img/food/Food-Mobile/Tuesday-Jambalaya-Mobile.png';
                  }
              }
              else if(n==3){
                  header = 'Chicken Fried Steak';
                  if(window.innerWidth>768){
                    img = 'img/food/Wednesday-ChxFriedSteak.png';
                  }
                  else{
                    img = 'img/food/Food-Mobile/Wednesday-ChxFriedSteak-Mobile.png';
                  }
              }
              else if(n==4){
                  header = 'Spaghetti &amp; Meatballs';
                  if(window.innerWidth>768){
                    img = 'img/food/Thursday-Spaghetti.png';
                  }
                  else{
                    img = 'img/food/Food-Mobile/Thursday-Spaghetti-Mobile.png';
                  }
              }
              else if(n==5){
                  header = 'Catfish & White Beans';
                  if(window.innerWidth>768){
                    img = 'img/food/Friday-Catfish.png';
                  }
                  else{
                    img = 'img/food/Food-Mobile/Friday-Catfish-Mobile.png';
                  }
              }
              document.write('<h3>Today: ' + header + '!</h3> <a class="scroll" href="#food"><img src="' + img + '"; class="square-photos feature-photo mobile-photos" alt="Free Lunch"></a>')
              </script>
            </div>  
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="feature-img"><a href="#events" class="scroll"><img src="img/images_web/Events-Small.png" class="top-section-headers" alt="Events"></a></div>
            <a href="#photos" class="scroll" ><h3>See the Photos!</h3></a>
            <a class="scroll" href="#events" id="cycler-old">
              <img src="img/halloween.jpg" class="square-photos event-img feature-photo" alt="Events"/>
              <!--<script type="text/javascript">
            if(window.innerWidth>767){
                  document.write('<img src="img/Party-Photos/Event-Thumbnail.png" class="square-photos event-img feature-photo" alt="Events"/>');
                }
                else{
                  document.write('<img src="img/Party-Photos/Event-Thumbnail.png" class="mobile-photos" alt="Free Lunch"/>');
                }
            </script>-->
          
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="feature-img"><img src="img/images_web/VIP-Access.png" class="top-section-headers" alt="VIP Access"/></div>
            <h3>Sign up to recieve a free admission, exclusive invites, and other goodies!</h3>
            <p>
            <script src="//app-ab03.marketo.com/js/forms2/js/forms2.min.js"></script>
            <form id="mktoForm_1109"></form>
            <script>MktoForms2.loadForm("//app-ab03.marketo.com", "634-KAC-055", 1109, function(form){
                            form.onSuccess(function(values, followUpUrl) {
                            // Get the form's jQuery element and hide it
                                form.getFormElem().hide();
                                document.getElementById("signup-ty").style.display = "block";
                                // Return false to prevent the submission handler from taking the lead to the follow up url
                                return false;
                            });
                        });
                    </script>
                    <h1 id="signup-ty">Thank you for your feedback!</h1>
            </p>
            <h3 class="follow-us">Follow Us!</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <a href="https://www.facebook.com/CrazyHorseCabaret" target="_blank"><img src="img/Icons/Facebook-Icon.png" alt="Facebook" class="social-icons facebook"/></a>
              <a href="https://twitter.com/crazyhorsecab" target="_blank"><img src="img/Icons/Twitter-Icon.png" alt="Twitter" class="social-icons"/></a>
              <a href="http://www.yelp.com/biz/crazy-horse-cabaret-port-allen-2" target="_blank"><img src="img/Icons/Yelp-Icon.png" alt="Yelp" class="social-icons yelp"/></a>
            </div>
          </div>
        </div>
    </section>    

    <!--Food & Drink-->
    <section id="food">
      <div class="container-fluid">
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
                <span><h5>Beer and Cocktail Specials</h5><h6>Monday - Friday 3:00pm - 7:30pm</h6></span>
              </div>
            	<div class="col-lg-6 col-md-6 animated fadeInLeft photo-subtext">
                <script type="text/javascript">
                if(window.innerWidth<768){
                  document.write('<img src="img/food/Food-Mobile/Happy-Hour-Beer-Mobile.png" class="mobile-photos" alt="$3 Domestic Beers"/>')
                }
                else{
                  document.write('<img src="img/food/Happy-Hour-Beer.png" class="square-photos" alt="$3 Domestic Beers"/>')
                }
                </script>
                <p>$3 Domestic Beers</p>
              </div>
            	<div class="col-lg-6 col-md-6 animated fadeInRight photo-subtext">
                <div class="row">
                  <div class="col-lg-12">
                    <script type="text/javascript">
                    if(window.innerWidth<768){
                      document.write('<img src="img/food/Food-Mobile/Happy-Hour-Cocktail-Mobile.png" class="mobile-photos" alt="$3 Well Cocktails"/>');
                    }
                    else{
                      document.write('<img src="img/food/Happy-Hour-Cocktail.png" class="square-photos" alt="$3 Well Cocktails"/>');
                    }
                    </script>    
                    <p class="double-space-bottom">$3 Well Cocktails</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade in active col-lg-12" id="free-lunch">
          	<div class="row">
              <div class="tab-header">
                <span><h5>Sit down for a complimentary lunch<br>and enjoy the view.</h5><h6>Monday - Friday 11:30am - 2:30 pm</h6></span>
              </div>
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
              var monday_mobile = 'img/food/Food-Mobile/Monday-Redbeans-Mobile.png" class="mobile-photos" alt="Red Beans &amp; Rice"/><h4>Monday:</h4><p>Red Beans &amp; Rice</p></div>'
              var tuesday_mobile = 'img/food/Food-Mobile/Tuesday-Jambalaya-Mobile.png" class="mobile-photos" alt="Jambalaya"/><h4>Tuesday:</h4><p>Jambalaya</p></div>'
              var wednesday_mobile = 'img/food/Food-Mobile/Wednesday-ChxFriedSteak-Mobile.png" class="mobile-photos" alt="Chicken Fried Steak"/><h4>Wednesday:</h4><p>Chicken Fried Steak</p></div>'
              var thursday_mobile = 'img/food/Food-Mobile/Thursday-Spaghetti-Mobile.png" class="mobile-photos" alt="Spaghetti &amp; Meatballs"/><h4>Thursday:</h4><p>Spaghetti &amp; Meatballs</p></div>'
              var friday_mobile = 'img/food/Food-Mobile/Friday-Catfish-Mobile.png" class="mobile-photos" alt="Catfish &amp; White Beans"/><h4>Friday:</h4><p>Catfish &amp; White Beans</p></div>'
              if(window.innerWidth<768){
                monday = monday_mobile;
                tuesday = tuesday_mobile;
                wednesday = wednesday_mobile;
                thursday = thursday_mobile;
                friday = friday_mobile;
                }
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
                <span><h5>Dinner Menu</h5><h6>7 Days a Week 5:00pm - 1:00am</h6></span>
              </div>
              <div class="col-lg-4 col-md-4 animated fadeInLeft photo-subtext">
                <script type="text/javascript">
                    if(window.innerWidth<768){
                      document.write('<img src="img/food/Food-Mobile/CHX-Wings-Mobile.png" class="mobile-photos" alt=""/>');
                    }
                    else{
                      document.write('<img src="img/food/Appetizer-CHX-Wings.png" class="square-photos" alt=""/>');
                    }
                </script>   
                <h4>Appetizers, $6</h4>
                <p>Buffalo Wings ($8)<br>
                    Cheese Sticks<br>
                    Jalepeño Poppers<br>
                    Spinach & Artichoke Dip<br>
                    Crazy Horse Sampler ($8)</p>
              </div>
              <div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext">
                <script type="text/javascript">
                    if(window.innerWidth<768){
                      document.write('<img src="img/food/Food-Mobile/Side-Onion-Rings-Mobile.png" class="mobile-photos" alt=""/>');
                    }
                    else{
                      document.write('<img src="img/food/Side-Onion Rings.png" class="square-photos" alt=""/>');
                    }
                </script>   
                <h4>Sides, $3</h4>
                <p>French Fries<br>
                Sweet Potato Fries<br>
                Onion Rings</p>
              </div>
              <div class="col-lg-4 col-md-4 animated fadeInRight photo-subtext">
                <script type="text/javascript">
                    if(window.innerWidth<768){
                      document.write('<img src="img/food/Food-Mobile/Alfredo-Mobile.png" class="mobile-photos" alt=""/>');
                    }
                    else{
                      document.write('<img src="img/food/Entree-Alfredo.png" class="square-photos" alt=""/>');
                    }
                </script>   
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
              <a href="memorial_day.php" data-largesrc="img/Party-Thumbnails/MemDayCover.jpg" data-title="Memorial Day Fundraiser" data-description="What better way to show  patriotism than painting the sexy Crazy Horse Cabaret girls in red, white and blue! Thanks to you, the Memorial Day Fundraiser was a great success. Check out the photos and keep on enjoying these beautiful works of art.">
                <img src="img/Party-Thumbnails/MemDayCover.jpg" alt="Memorial Day Fundraiser"/>
                <span class="img-caption">Memorial Day Fundraiser</span>
              </a>
            </li>
            <li>
              <a href="xmas_2014.php" data-largesrc="img/Party-Thumbnails/Christmas-Party.png" data-title="Christmas Party" data-description="Some were nice, most were naughty, and everyone got exactly what they asked for. The Winter Fantasyland Xmas Party was amazing. Check out all the photos, and get ready for next year.">
                <img src="img/Party-Thumbnails/Christmas-Party.png" alt="Christmas Party"/>
                <span class="img-caption">Christmas Party 2014</span>
              </a>
            </li>
            <li>
              <a href="halloween_party.php" data-largesrc="img/Party-Thumbnails/Halloween-Party.png" data-title="Halloween Party" data-description="Whats better than sexy girls in costume? You guessed it. Sexy girls out of costume. Our annual Halloween Party was spooky awesome. There's no better place to celebrate. No trickery involved, we have the best treats. See the gallery and get your costume ready for next year.">
                <img src="img/Party-Thumbnails/Halloween-Party.png" alt="Halloween Party"/>
                <span class="img-caption">Halloween Party 2014</span>
              </a>
            </li>
            <li>
              <a href="luau_party.php" data-largesrc="img/Party-Thumbnails/Luau-Party.png" data-title="Luau Party" data-description="Aloha, what better way to get down than a luau. The pig roast was incredible. The tiki drinks were flowing. Tons of beautiful girls on stage in bikinis, and the party really started when the tops came off. See all the photos.">
                <img src="img/Party-Thumbnails/Luau-Party.png" alt="Luau Party"/>
                <span class="img-caption">Luau Party</span>
              </a>
            </li>
            <li>
              <a href="masquerade_party.php" data-largesrc="img/Party-Thumbnails/Masquerade-Party.png" data-title="Masquerade Party" data-description="What's life without a little mystery? The incredible Crazy Horse Cabaret girls performed in masks, and hardly anything else. It was another wild party, and we're sorry to anyone who didn't get to see it in person, but you can see all the action in the photo gallery.">
                <img src="img/Party-Thumbnails/Masquerade-Party.png" alt="Masquerade Party"/>
                <span class="img-caption">Masquerade Party</span>
              </a>
            </li>
            <li>
              <a href="interior.php" data-largesrc="img/Party-Thumbnails/Interior-Photos-Thumbnail.png" data-title="Interior" data-description="‎The newly renovated club looks better than ever. Come see what we're working with, take a look for yourself. ">
                <img src="img/Party-Thumbnails/Interior-Photos-Thumbnail.png" alt="Interior"/>
                <span class="img-caption">Interior</span>
              </a>
            </li>      
            <li>
              <a href="anniversary.php" data-largesrc="img/Party-Thumbnails/AlbumCover-small.jpg" data-title="Anniversary Masquerade Party" data-description="‎Another year, another fantastic celebration! Our Anniversary Masquerade Party was an event to remember. We’ve created a photo gallery to keep you reminiscing." alt="Anniversary Masquerade Party"/>
                <img src="img/Party-Thumbnails/AlbumCover-small.jpg" alt=""/>
                <span class="img-caption">Anniversary Party</span>
              </a>
            </li>   
          </ul>
        </div>
      </div>
    </section>
  
    <!--Events-->
    <section class="page-block" id="events">
    	<div class="container">
        <div class="row page-header">
          <img src="img/images_web/Events.png" class="section-header" alt="Events"/>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-3">
            <img src="img/halloween.jpg" alt="Halloween Party" class="square-photos">
          </div>
          <div class="col-lg-5 col-lg-offset-1 col-md-5 col-sm-7">
              <p>
                <span  style="font-size: 1.3em;">THE CRAZY HORSE'S HALLOWEEN PARTY</span><br>
                Sunday, October 30TH
            </p>
            <p>Featuring AJA Marie<br>       
                Costume Contest<br>
                $500 Cash & Prizes<br>
                2-4-1 Drinks Between 5 & 8pm<br>
                Door Prizes & Drink Specials All Night!</p>
          </div>
        </div>
      </div>
    </section>
  
    <!--Bottle Service--> 
    <section class="page-block" id="bottle-service">
    	<div class="container">
        <div class="row page-header">
          <img src="img/images_web/Bottle-Service.png" class="section-header bottle-service-header" alt="Bottle Service"/>
        </div>
        <div class="row">
          <script type="text/javascript">
            if(window.innerWidth>767){
              document.write('<img src="img/food/Bottle-Service.png" class="large-photo bottle-service-img" alt="Bottle Service"/>')
            }
            else{
              document.write('<img src="img/food/Bottle-Service-Small.png" class="large-photo-mobile bottle-service-img" alt="Bottle Service"/>')
            }
          </script>
        	<div class="col-lg-6 col-md-6 col-sm-6 bottle-service-adj">
            <div class="bottles-mixers">
            	<div class="header">
              	<h3>Bottles &amp; Mixers</h3>
                <span class=""></span>
              </div>
              <div class="body">
                <p>Well<br>Premium<br>Super Premium</p>
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
                <p>House<br>Rosa<br>Moet<br>PJ</p>
              </div> 
              <div class="col-lg-6 col-md-6 col-sm-6">
                <p>Dom Perigion<br>Ace of Spades<br>Ace of Spades Rose</p>
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
        	<div class="col-lg-4 col-md-4 col-sm-6">
            <div class="career-text">
            	<h3>We're always looking for new talent!</h3>
              <p>Whether it be on stage, on the floor, behind the bar or at the door, if you feel you would be an asset, come in to submit an application.</p>
              <p>Give us a call, drop off a resume, or send us an email. Contact information is below.</p>
            </div>
          </div>
        	<div class="col-lg-8 col-md-8 col-sm-6 photo-subtext">
          <img src="img/images_web/Careers-Photo.png" class="career-photo" alt="Careers"/>
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
                <p>
                2901 I-10 Frontage Road<br>
                Port Allen, LA 70767<br>
                (225) 387-6444</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="row map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3439.6359312420677!2d-91.24684099999999!3d30.446420999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86241e642afdfb8d%3A0x3f4c607dba7f5f31!2sCrazy+Horse+Cabaret!5e0!3m2!1sen!2sus!4v1429133140972" width="100%" height="330" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="row space-bottom location-text">
              <div class="col-lg-8 col-md-8">
                <h3>Hours</h3>
              </div>
            </div>
            <div class="row location-text">
              <div class="col-lg-12">
                <p>Open 7 days a week<br><br>
                Free Lunch Mon-Fri:<br>11:30am until 2:30pm<br><br>
                Happy Hour Mon-Fri:<br>3pm until 7:30pm</p>
              </div>
            </div>
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
            <script>MktoForms2.loadForm("//app-ab03.marketo.com", "634-KAC-055", 1110, function(form){
                            form.onSuccess(function(values, followUpUrl) {
                            // Get the form's jQuery element and hide it
                                form.getFormElem().hide();
                                document.getElementById("contact-ty").style.display = "block";
                                // Return false to prevent the submission handler from taking the lead to the follow up url
                                return false;
                            });
                        });
                    </script>
                    <h1 id="contact-ty">Thank you for your feedback!</h1>
          </div>  
        </div>
      </div>
    </section>
    
    <!--Footer-->
    <?php include 'footer.php'; ?>
    
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
