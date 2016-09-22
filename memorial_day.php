<html>

  <?php require "head.php" ?>


  <body class="">

    <div class="swiper-container">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/13.jpg" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/15-Edit.jpg" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/14-Edit.jpg" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/16-Edit.jpg" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/27-Edit.jpg" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/31-Edit-Edit.jpg" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/memday-flag1.png" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/memday-navy3.png" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/memday-stripe1.png" alt=""/>
            </div>
            <div class="swiper-slide">
                <img class="slide" src="img/Party-Photos/Memorial_Day/memday-stripe4.png" alt=""/>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
        
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>



    <!--Javascript (jQuery) Libraries and Plugins-->
    <script src="js/swiper.min.js"></script>   
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
    <script>        
      var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: 3000,        
        // If we need pagination
        pagination: '.swiper-pagination',
        
        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        
        // And if we need scrollbar
        scrollbar: '.swiper-scrollbar',


      })        
    </script>
    </body><!--Close Body-->

</html>