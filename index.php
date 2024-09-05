<?php
include("conection.php");
include("componets/header.php")

?>

<body>

  <button id="backToTopBtn" title="Go to top">&#8679; </button>



  <!-- ========================NAVBAR START===================================== -->



  <?php
  include("componets/navbar.php")
  ?>


  <!-- ========================NAVBAR END===================================== -->





  <!-- ========================  BACKGROUND IMAGE BANNER START  ===================================== -->

  <div class="bgimage">


    <div class="container">


      <div class="row fullscreen align-items-center justify-content-between">

        <div class="banner-content col-lg-6 col-md-6 mx-auto my-5 mb-5">

          <h6 class="text-white mt-1">Need a ride? just call</h6>


          <h1 class="text-uppercase mt-1">
            911 999 911
          </h1>

          <p class="pt-10 pb-10 text-white mt-1">
            Whether you enjoy city breaks or extended holidays in the sun, you can <br> always improve your travel
            experiences by staying in a small.
          </p>

          <a href="#" class="primary-btn text-uppercase mt-1">Call for taxi</a>


        </div>

        <div class="col-lg-4  col-md-6 header-right my-5 mx-auto">

          <h4 class="mb-4"> Book Your Texi Online!</h4>

          <!-- form -->
          <?php include("componets/register.php") ?>
          <!-- form -->



        </div>







      </div>




    </div>






















  </div>



  <!-- ========================  BACKGROUND IMAGE BANNER END ===================================== -->



  <!-- ================================= ABOUT AREA START====================== -->


  <div class="container">

    <div class="row mt-5 about-area align-items-center mb-5">

      <div class="col-lg-6 px-5">

        <img class="img-fluid" src="img/about-img.jpg" alt="">
      </div>

      <div class="col-lg-6 about-area-text px-5">

        <h1>Globally Connected
          by <br> Large Network</h1>


        <h4>We are here to listen from you deliver <br> exellence</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <br> do eiusmod tempor incididunt ut labore et
          dolore magna <br> aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, sed
          do
          eiusmod tempor.
        </p>

        <a class="text-uppercase primary-btn mt-1" href="#" id="services">Get Details</a>



      </div>



    </div>

  </div>























  <!-- ================================= ABOUT AREA END====================== -->







  <!-- ============================== SERVICES AREA START ==================================================== -->


  <div class="container">

    <div class="row section-title mt-5 gap">
      <h1 class="pb-1">What Services we offer to our clients</h1>
      <p>Who are in extremely love with eco friendly system.</p>
    </div>


    <div class="row pt-5 mt-5">

      <?php
      $qry = "SELECT * FROM `card_data` WHERE 1  ";
      $x = mysqli_query($db_ctn, $qry);

      while ($y = mysqli_fetch_assoc($x)) {
        $nid = $y["id"];
        $ci = $y["c_icon"];
        $ch = $y["c_head"];
        $ct = $y["c_text"];

      ?>

        <div class="col-lg-4 single-service">
          <span class="lnr"><i class="<?php echo  $ci ?>"></i></span>
          <a href="#">
            <h4><?php echo  $ch ?></h4>
          </a>
          <p>
            <?php echo  $ct ?>
          </p>
        </div>

      <?php
      }
      ?>



      <!-- <div class="col-lg-4 single-service">
        <span class="lnr"><i class="fa-solid fa-briefcase"></i></span>
        <a href="#">
          <h4>Office Pick-ups</h4>
        </a>
        <p>
          Usage of the Internet is becoming more <br> common due to rapid advancement of <br> technology and power.
        </p>
      </div>
      <div class="col-lg-4 single-service">
        <span class="lnr"><i class="fa-solid fa-bus"></i></span>
        <a href="#">
          <h4>Event Transportation</h4>
        </a>
        <p>
          Usage of the Internet is becoming more <br> common due to rapid advancement of <br> technology and power.
        </p>
      </div> -->
    </div>




  </div>



  <!-- ============================== SERVICES AREA END ==================================================== -->








  <!-- ============================== GALLERY AREA START============================================================================== -->



  <div class="gallery-area mt-5" id="gallery" d>

    <div class="container">

      <div class="row section-title pt-5 gallery-gap">
        <h1>Image Gallery that we like to share</h1>
        <p>Who are in extremely love with eco friendly system.</p>
      </div>


      <div class="row mt-5 p-5 pb-5">


      <?php

      $qry= "SELECT * FROM `gallery_img` WHERE 1";
      $x= mysqli_query($db_ctn, $qry);

      while($y= mysqli_fetch_assoc($x)){

        $img= $y["img_name"];

      
      
      
      
      ?>

        <div class="col-lg-4 single-gallery">
          <img class="img-fluid pt-3" src="<?php echo "backend/g_img/" . $img; ?>" alt="">

        </div>

        <?php
      }
        
        
        
        ?>


        <!-- <div class="col-lg-4 single-gallery pt-5">
          <img class="img-fluid pt-3" src="img/g2.jpg" alt="">

        </div>
        <div class="col-lg-4 single-gallery">
          <img class="img-fluid pt-3" src="img/g3.jpg" alt="">

        </div>


        <div class="col-lg-4 single-gallery">

          <img class="img-fluid pt-3" src="img/g4.jpg" alt="">
        </div>

        <div class="col-lg-4 single-gallery pt-5">

          <img class="img-fluid pt-3" src="img/g5.jpg" alt="">

        </div>

        <div class="col-lg-4 single-gallery">
          <img class="img-fluid pt-3" src="img/g6.jpg" alt="">

        </div>



      </div> -->

      <br> <br> <br>

    </div>



  </div>






  <!-- ============================== GALLERY AREA END============================================================================= -->







  <!-- ===================================== REVIEWS AREA START =============================================================== -->



  <div class="reviews-area mt-5 pt-5">

    <div class="container">

      <div class="row section-title">
        <h1>Client's Reviews</h1>
        <p>Who are in extremely love with eco friendly system.</p>
      </div>


      <div class="row mt-5 pt-5">

        <div class="col-lg-4 col-md-6">

          <div class="review">
            <h4 class="mt-3">Cody Hines</h4>
            <p class="mt-3">
              Accessories Here you can find the best <br> computer accessory for your laptop,<br> monitor, printer,
              scanner, speaker.
            </p>

            <div>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>

          </div>

        </div>


        <div class="col-lg-4 col-md-6">


          <div class="review">
            <h4 class="mt-3">Chad Herrera</h4>
            <p class="mt-3">
              Accessories Here you can find the best <br> computer accessory for your laptop,<br> monitor, printer,
              scanner, speaker.
            </p>

            <div>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">

          <div class="review">
            <h4 class="mt-3">Andre Gonzalez</h4>
            <p class="mt-3">
              Accessories Here you can find the best <br> computer accessory for your laptop,<br> monitor, printer,
              scanner, speaker.
            </p>

            <div>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">

          <div class="review">
            <h4 class="mt-3">Jon Banks</h4>
            <p class="mt-3">
              Accessories Here you can find the best <br> computer accessory for your laptop,<br> monitor, printer,
              scanner, speaker.
            </p>

            <div>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6">

          <div class="review">
            <h4 class="mt-3">Landon Houston</h4>
            <p class="mt-3">
              Accessories Here you can find the best <br> computer accessory for your laptop,<br> monitor, printer,
              scanner, speaker.
            </p>

            <div>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>

          </div>

        </div>


        <div class="col-lg-4 col-md-6">

          <div class="review">
            <h4 class="mt-3">Nelle Wade</h4>
            <p class="mt-3">
              Accessories Here you can find the best <br> computer accessory for your laptop,<br> monitor, printer,
              scanner, speaker.
            </p>

            <div>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span class="checked"><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>

          </div>

        </div>




      </div>






    </div>

  </div>



  <!-- ===================================== REVIEWS AREA END =============================================================== -->




  <!-- ======================================== SUPPORT TEAM AREA START======================================================== -->



  <div class="bgimg2 mt-5">


    <div class="container p-5">


      <div class="row mt-5 pt-3 pb-5">

        <div class="col-lg-8">

          <h1>Experience Great Support</h1>
          <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
          </p>
        </div>


        <div class="col-lg-4">
          <a href="#" class="primary-btn mt-5">Reach Our Support Team</a>
        </div>



      </div>




    </div>


  </div>



  <!-- ======================================== SUPPORT TEAM AREA END======================================================== -->




  <!-- ======================================== BLOG TEAM AREA  START ========================================================  -->




  <div class="mt-5 pt-5" id="blog">


    <div class="container">

      <div class="row section-title">
        <h1>Latest News from our Blog</h1>
        <p>Who are in extremely love with eco friendly system.</p>
      </div>

      <div class="row mt-4 pt-5 m-5">








      <?php
          

          $qry= "SELECT * FROM `blog` WHERE 1";

          $x= mysqli_query($db_ctn, $qry);

          while($y= mysqli_fetch_assoc($x)){


            $id= $y["id"];
            $img=$y["img"];
            $b1= $y["btn_1"];
            $b2= $y["btn_2"];
            $h= $y["heading"];
            $t= $y["text"];
            $date= $y["date"];

          
          
          
          
          
          ?>

        <div class="col-lg-6">

          <div class="single-blog">

            <div class="blogimg">
              <img class="img-fluid" src="<?php echo "backend/g_img/" . $img; ?>" alt="">
            </div>

            <ul class="buttons">
              <li><a href="#"><?php echo $b1?></a></li>
              <li><a href="#"><?php echo $b2?></a></li>
            </ul>

            <a href="#">
              <h4><?php echo $h?></h4>
            </a>
            <p>
            <?php echo $t?>
            </p>
            <p class="date"><?php echo $date?></p>

          </div>
        </div>

        <?php
        
          }
        
        ?>








<!-- 
        <div class="col-lg-6">
          <div class="single-blog">
            <div class="blogimg">
              <img class="img-fluid" src="img/b2.jpg" alt="">
            </div>
            <ul class="buttons">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Life Style</a></li>
            </ul>
            <a href="#">
              <h4>Portable latest Fashion for young women</h4>
            </a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore.
            </p>
            <p class="date">31st January, 2018</p>
          </div>
        </div>
      </div> -->





    </div>








  </div>


  </div>










  <!-- ======================================== BLOG TEAM AREA  END========================================================  -->


  <!-- ========================================= FOOTER AREA START========================================================== -->
  <?php
  include("componets/footer.php")
  ?>

</body>

</html>