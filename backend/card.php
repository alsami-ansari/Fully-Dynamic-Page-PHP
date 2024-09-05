<?php

include("conection.php");
session_start();
if (!isset($_SESSION['username'])) {
  header("location: backend/index.php");
}

if (isset($_POST['logout'])) {
  session_destroy();
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard-- Cards</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>





  <!-- partial:partials/_navbar.html -->


  <?php include("back_com/main_nav.php") ?>

  <!-- partial -->
  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <?php include("back_com/side_nav.php") ?>
    <!-- partial -->


    <div class="main-panel">
      <div class="content-wrapper">

        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-home"></i>
            </span> Dashboard
          </h3>
      
        </div>
        <!-- body start -->
        <h3 class="text-center text-info">  Card </h3>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Insert Card 
        </button>


        <!-- moder code -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Card</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- update data insert in form s -->
                <?php
                // if (isset($_GET["upid"])) {

                //   $upid = $_GET["upid"];
                //   $qry = "SELECT * FROM `card_data` WHERE id= $upid";
                //   $x = mysqli_query($db_ctn,$qry);

                //   $y = mysqli_fetch_assoc($x);
                //   $nid = $y["id"];
                //   $ci = $y["c_icon"];
                //   $ch = $y["c_head"];
                //   $ct = $y["c_text"];
                // }


                ?>
                <!-- update data insert in form e -->
                

                <form action="fun.php" method="post">

                  <div class="mb-3">

                  <input type="hidden" id="cardid" name="cardid">

                    <label for="cardi" class="form-label">
                      Icon
                    </label>
                   
                    <input type="text"  required class="form-control" id="cardi" name="card_icon">
                  </div>

                  <div class="mb-3">
                    <label for="cardh" class="form-label">Heading</label>
                    <input type="text"  required class="form-control" id="cardh" name="card_head">
                  </div>

                  <div class="mb-3">
                    <label for="cardt" class="form-label">Text</label>
                    <input type="text"  required class="form-control" id="cardt" name="card_text">
                  </div>


                  <button name="card_btn" type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </div>
          </div>
        </div>





        <!-- model code end -->




        <!-- table -->
        <div class="container table-responsive">
          <table class="table table-danger table-striped table-hover mt-4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Heading</th>
                <th scope="col">Text</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $qry = "SELECT * FROM `card_data` WHERE 1";
              $x = mysqli_query($db_ctn, $qry);

              while ($y = mysqli_fetch_assoc($x)) {
                $nid = $y["id"];
                $ci = $y["c_icon"];
                $ch = $y["c_head"];
                $ct = $y["c_text"];



              ?>
                <tr>
                  <th scope="row"><?php echo  $nid ?></th>
                  <td> <i class="<?php echo  $ci ?>"></i></td>
                  <td><?php echo  $ch ?></td>
                  <td><?php echo  $ct ?></td>
                  <td>

                    <a href="" onclick="cardid(<?php echo  $nid ?>, '<?php echo  $ci ?>', '<?php echo  $ch ?>', '<?php echo  $ct ?>')"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></a>



                  </td>
                  <td><a href="fun.php?carddel=<?php echo  $nid ?>">
                  <i class="bi bi-trash"></i>
                  </a></td>


                </tr>


              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- table end -->

      </div>
    </div>
  </div>


              <script>
                function cardid(a,b,c,d){

                  document.getElementById("cardid").value= a;
                  document.getElementById("cardi").value= b;
                  document.getElementById("cardh").value= c;
                  document.getElementById("cardt").value= d;


                }
              </script>



  <script src="assets/vendors/js/vendor.bundle.base.js"></script>


  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- End custom js for this page -->
</body>

</html>