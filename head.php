<head>
    <meta charset="utf-8">
    <title>Crazy Horse Cabaret Port Allen</title>
    <meta name="description" content="Crazy Horse Cabaret Port Allen" />
		<meta name="keywords" content="strip club, bar, gentlemens club, night club, free lunch" />
		<meta name="author" content="Crazy Horse Cabaret Port Allen" />
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
    function cycleImages(){
      var $active = $('#cycler .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
    $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }

    $(document).ready(function(){
    // run every 7s
      setInterval('cycleImages()', 7000);
    })

    </script>
    <style>
      #cycler{position:relative;}
      #cycler img{position:absolute;z-index:1}
      #cycler img.active{z-index:3}
    </style>
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <script src="js/swiper.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper.jquery.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-36987345-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>