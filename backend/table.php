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
  <title>Dashboard-- Table Data</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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


        <div class="container">
              
        <h3 class="text-center py-4">Register data</h3>
          <table class="table  table-primary  table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">From Destination</th>
                <th scope="col"> To Destination</th>
                <th scope="col">Date</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $qry = "SELECT * FROM `register` WHERE 1";
              $x = mysqli_query($db_ctn, $qry);

              while ($y = mysqli_fetch_assoc($x)) {
                $nid = $y["id"];
                $r_name = $y["r_name"];
                $r_email = $y["r_email"];
                $r_phone = $y["r_phone"];
                $r_fd = $y["r_fd"];
                $r_td = $y["r_td"];
                $r_date = $y["r_date"];

              ?>
                <tr>
                  <th scope="row"><?php echo  $nid ?></th>
                  <td><?php echo  $r_name ?></td>
                  <td><?php echo  $r_email ?></td>
                  <td><?php echo  $r_phone ?></td>
                  <td><?php echo  $r_fd ?></td>
                  <td><?php echo   $r_td ?></td>
                  <td><?php echo   $r_date ?></td>
                  <td><a href="table.php?navdele=<?php echo  $nid ?>"><i class="bi bi-trash"></i></a></td>

                </tr>


              <?php
              }
              ?>



            </tbody>
          </table>


        </div>




        <div class="container">
              
              <h3 class="text-center py-4">Subscribe Email</h3>
                <table class="table  table-primary  table-striped table-hover">
                  <thead>
                    <tr class="text-center">
                    <th scope="col">#</th>
                      <th scope="col">Email</th>
                      <th>Delete</th>

                
                     
                     
                    </tr>
                  </thead>
                  <tbody>


                  <?php
                  
                  $qry="SELECT * FROM `email` WHERE 1";

                  $x = mysqli_query($db_ctn, $qry);

                  while ($y = mysqli_fetch_assoc($x)){

                    $id=$y["ID"];
                    
                    $email= $y["email"];




                  


                  
                  
                  
                  
                  ?>

                  <tr>
                    <td  class="text-center"><?php echo  $id ?></td>

                  <td class="text-center"><?php echo  $email ?></td>
                  <td class="text-center"><a href="table.php?emaild=<?php echo  $id ?>"><i class="bi bi-trash"></i></a></td>

              

                 


                  </tr>

                  <?php
                  
                }
                
                ?>

            </tbody>
          </table>


        </div>






        <!-- body end -->

      </div>
    </div>
  </div>


    <!-- delete table data -->

    <?php

if(isset($_GET["navdele"])){


  $regid= $_GET["navdele"];



$qry="DELETE FROM `register` WHERE  `id`= '$regid'";

$x = mysqli_query($db_ctn, $qry);


if ($x == true) {
echo '<script>
       alert("Deleted Successfully");
       window.location.href="http://localhost/new_texi/backend/table.php"
           </script>';
};
}





// delete email data

if(isset($_GET["emaild"])){


  $del=$_GET["emaild"];

  $qry= "DELETE FROM `email` WHERE id ='$del'";

  $x= mysqli_query($db_ctn, $qry);

  if ($x == true) {
    echo '<script>
           alert("Deleted Successfully");
           window.location.href="http://localhost/new_texi/backend/table.php"
               </script>';
    };


}











?>





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