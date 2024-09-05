<nav class="navbar navbar-expand-lg bg-black sticky-top">
    <div class="container">
        <a class="navbar-brand  logo-left-margin pt-1 pb-2 " href="#"><img src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navmargin">
                <!-- php -->

                <?php
                $qry = "SELECT * FROM `nav_bar` WHERE 1";
                $x = mysqli_query($db_ctn, $qry);

                while ($y = mysqli_fetch_assoc($x)) {
                    $nid = $y["id"];
                    $nn = $y["nav_name"];
                    $nl = $y["nav_link"];


                ?>
                  
                        <li class="nav-item">
                            <a id="font" class="nav-link active  ps-4" aria-current="page" href="<?php echo  $nl ?>"><?php echo  $nn ?></a>
                        </li>

                <?php
                }
                ?>
                <!-- php -->


                <!-- <li class="nav-item">
            <a id="font" class="nav-link active  ps-4" aria-current="page" href="#">HOME</a>
          </li> -->


                <!-- <li class="nav-item">
            <a id="font" class="nav-link ps-4" href="#about">ABOUT</a>
          </li>
          <li class="nav-item">
            <a id="font" class="nav-link  ps-4" href="#services">SERVICES</a>
          </li>
          <li class="nav-item">
            <a id="font" class="nav-link  ps-4" href="#gallery">GALLERY</a>
          </li>
          <li class="nav-item dropdown">
            <a id="font" class="nav-link dropdown-toggle   ps-4" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              BLOG
            </a>
            <ul class="dropdown-menu mt-3" id="bgcolor">
              <li><a id="font" class="dropdown-item" href="#blog">Blog Home</a></li>
              <li><a id="font" class="dropdown-item" href="#">Blog Single</a></li>

              <li><a id="font" class="dropdown-item" href="#">Level 2</a></li>


            </ul>
          </li>

          <li class="nav-item">
            <a id="font" class="nav-link   ps-4" href="#">ELEMENTS</a>
          </li>

          <li class="nav-item">
            <a id="font" class="nav-link   ps-4" href="#">CONTACT</a>
          </li> -->


            </ul>

        </div>
    </div>
</nav>