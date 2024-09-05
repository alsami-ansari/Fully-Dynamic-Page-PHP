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
  <title>Dashboard-- Blog</title>
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
        <h3 class="text-center text-info">Blog</h3>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#navpopid">
          Insert Blog
        </button>


        <!-- moder code -->
        <div class="modal fade" id="navpopid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Blog</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">


                <form action="fun.php" method="post" enctype="multipart/form-data">

                  <div class="mb-3">

                    <label for="b_img" class="form-label">
                      Blog Image
                    </label>
                 
                    <input type="file"  class="form-control" id="b_img" name="img">
                  </div>

                  <div class="mb-3">
                    <label for="btn_1" class="form-label">Button 1</label>
                    <input type="text" required class="form-control" id="btn_1" name="btn_1">
                  </div>

                  <input type="hidden" id="id" name="id">

                  <div class="mb-3">
                    <label for="btn_2" class="form-label">Button 2</label>
                    <input type="text" required class="form-control" id="btn_2" name="btn_2">
                  </div>

                  <div class="mb-3">
                    <label for="heading" class="form-label">Heading</label>
                    <input type="text" required class="form-control" id="heading" name="heading">
                  </div>

                  <div class="mb-3">
                    <label for="text" class="form-label">Text</label>
                    <input type="text" required class="form-control" id="text" name="text">
                  </div>

                  <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" required class="form-control" id="date" name="date">
                  </div>

                  <button name="b_btn" type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </div>
          </div>
        </div>

        <!-- model code end -->
        
        <!-- table s-->

        <div class="table-responsive">

        <table class="table table-danger table-striped mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Blog Image</th>
              <th scope="col">Button 1</th>
              <th scope="col">Button 2</th>
              <th scope="col">Blog Heading</th>
              <th scope="col">Blog Text</th>
              <th scope="col">Blog Date</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>



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
        
    

      <tr  class="text-center">

      <td scope="row">  <?php echo $id?></td>
      <td> <img class="img-fluid" src="<?php echo "g_img/" . $img; ?>" alt="" style="width: 180px; height: 180px;"></td>
      <td> <?php echo $b1?></td>
      <td> <?php echo $b2?></td>
      <td> <?php echo $h?></td>
      <td> <?php echo $t?></td>
      <td> <?php echo $date?></td>

      <td>
        <a href=""  onclick="blog(<?php echo $id?>, '<?php echo $b1?>', '<?php echo $b2?>', '<?php echo $h?>' ,' <?php echo $t?>' , '<?php echo $date?>')"    data-bs-toggle="modal" data-bs-target="#navpopid">
        <i class="bi bi-pencil-square"></i>
        </a>
      </td>

      <td>
        <a href="fun.php?del=<?php echo $id; ?>">
        <i class="bi bi-trash"></i>
        </a>
      </td>


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

    function blog(a,c,d,e,f,g){

        document.getElementById("id").value = a;
       
        document.getElementById("btn_1").value = c;
        document.getElementById("btn_2").value = d;
        document.getElementById("heading").value = e;
        document.getElementById("text").value = f;
        document.getElementById("date").value = g;





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