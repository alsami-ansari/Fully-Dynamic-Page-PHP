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
  <title>Dashboard-- Gallery</title>
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
        <h3 class="text-center text-info">Gallery</h3>


        <!-- model star -->



         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#navpopid">
          Insert Image
        </button>


        <!-- moder code -->
        <div class="modal fade" id="navpopid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Images</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">


                <form action="allphp.php" method="post" enctype="multipart/form-data">

                <input type="hidden" id="upid" name="upid">

                <!-- <input type="hidden" id="upimg" name="upimg"> -->

                <div class="mb-5">
                <label for="img" class="form-label">Insert A Image</label> <br> <br> <br>
                <input type="file" class="form-control" id="img" name="img_name">


                </div>

                <button name="btn" id="" type="submit" class="btn btn-primary">Submit</button>

                 
                </form>

              </div>
            </div>
          </div>
        </div>

        <!-- model code end -->




         <!-- table s-->

        <table class="table table-danger table-striped mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>



        
        <?php

      $qry= "SELECT * FROM `gallery_img` WHERE 1";
      $x= mysqli_query($db_ctn, $qry);

      while($y= mysqli_fetch_assoc($x)){

        $img= $y["img_name"];
        $id= $y["img_id"];

      
      
      
      
      ?>

      <tr>

      <td>  <?php echo $id?></td>



<td> <img class="img-fluid pt-3" src="<?php echo "g_img/" . $img; ?>"  style="width: 180px; height: 180px;"></td>



<td>
  <a href="" onclick='gupdate(<?php echo $id?>, "<?php echo "g_img/" . $img; ?>")'  data-bs-toggle="modal" data-bs-target="#navpopid">
  <i class="bi bi-pencil-square"></i>
  </a>
</td>

<td>
  <a href="allphp.php?gdel=<?php echo $id?>">
  <i class="bi bi-trash"></i>
  </a>
</td>

</tr>
        
<?php
}
?>


        

</tbody>
        </table>
        <!-- table end -->

        

      </div>
    </div>
  </div>



<script>

  function gupdate(a,b,){

  document.getElementById("upid").value = a;
  document.getElementById("img").value = b;
 
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