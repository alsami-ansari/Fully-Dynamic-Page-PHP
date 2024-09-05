<?php


    if(isset($_POST["btn"])){

      $email= $_POST["emaild"];

      $qry= "INSERT INTO `email`(`email`) VALUES ('$email')";

      $x=mysqli_query($db_ctn,$qry);


      if($x){
        echo'<script>
        alert("Email Submitted");
        window.location.href="http://localhost/new_texi/"
            </script>';
      }
    }



?>








<div class="footer mt-5 gap-footer">

<div class="container pt-5">


  <div class="row mt-5">



  <?php
  
  $qry= "SELECT * FROM `footer` WHERE 1";
  $x = mysqli_query($db_ctn, $qry);

  while($y= mysqli_fetch_assoc($x)){

    
    
    $fhead= $y["heading"];
    $t1= $y["text_1"];
    $t2= $y["text_2"];
    $t3= $y["text_3"];
    $t4= $y["text_4"];
    
  
  
  
  ?>

    <div class="col-lg-2 col-md-6 col-sm-6">


      <div class="footer-area">
        <h6><?php echo  $fhead; ?></h6>
        <ul>
          <li><a href="#"><?php echo  $t1; ?></a></li>
          <li><a href="#"><?php echo  $t2; ?></a></li>
          <li><a href="#"><?php echo  $t3; ?></a></li>
          <li><a href="#"><?php echo  $t4; ?></a></li>
        </ul>
      </div>



    </div>

    <?php
  }
    
    ?>

<!-- 
    <div class="col-lg-2 col-md-6 col-sm-6">


      <div class="footer-area">
        <h6>Features</h6>
        <ul>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Brand Assets</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
      </div>



    </div>

    <div class="col-lg-2 col-md-6 col-sm-6">


      <div class="footer-area">
        <h6>Resources</h6>
        <ul>
          <li><a href="#">Guides</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Experts</a></li>
          <li><a href="#">Agencies</a></li>
        </ul>
      </div>



    </div> -->


    <!-- <div class="col-lg-2 col-md-6 col-sm-6">


      <div class="footer-area">
        <h6>Follow Us</h6>
        <p>Let us be social</p>

        <div class="footer-social d-flex align-items-center">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-dribbble"></i></a>
          <a href="#"><i class="fa-brands fa-behance"></i></a>
        </div>


      </div>



    </div> -->


    <div class="col-lg-4 col-md-6 col-sm-6 media">


      <div class="footer-area">
        <h6>Newsletter</h6>
        <p>Stay update with our latest</p>

        <form action="" method="post">




          <input class="form-control d-inline" placeholder="Enter Email" onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Enter Email '" required="" type="email" name="emaild">
          <button type="submit" name="btn" class="click-btn d-inline"><i class="fa-solid fa-arrow-right"></i></button>
        </form>

      </div>


    </div>







  </div>



  <p class="mt-5 py-5 pt-5 footer-text col-lg-12"> Copyright ©2024 All rights reserved | Designed By <span class="sami">SAMI</span> </p>



</div>
<img class="footer-bottom img-fluid" src="img/footer-bottom.png" alt="">
</div>





<!-- ========================================= FOOTER AREA END ========================================================== -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>


<script> 
document.addEventListener("DOMContentLoaded", function () {
var backToTopButton = document.getElementById("backToTopBtn");

window.addEventListener("scroll", function () {
    if (window.pageYOffset > 100) {
        // Show the button when the page is scrolled down
        backToTopButton.style.display = "block";
    } else {
        // Hide the button when the page is at the top
        backToTopButton.style.display = "none";
    }
});

backToTopButton.addEventListener("click", function () {
    // Scroll to the top when the button is clicked
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
});
</script>