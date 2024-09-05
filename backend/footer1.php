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
  <title>Dashboard-- Footer</title>
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
        <h3 class="text-center text-info">Footer</h3>


        <!-- model star -->



         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#navpopid">
          Insert Footer
        </button>


        <!-- moder code -->
        <div class="modal fade" id="navpopid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert Footer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">


                <form action="fun.php" method="post">

                  <div class="mb-3">

                    <label for="foothead" class="form-label">
                      Heading
                    </label>
                    <input type="hidden" id="footupid" name="footupid">
                    <input type="text" required class="form-control" id="foothead" name="heading">
                  </div>

                  <div class="mb-3">
                    <label for="foot_text1" class="form-label">Text_1</label>
                    <input type="text" required class="form-control" id="foot_text1" name="text_1">
                  </div>

                  <div class="mb-3">
                    <label for="foot_text2" class="form-label">Text_2</label>
                    <input type="text" required class="form-control" id="foot_text2" name="text_2">
                  </div>

                  <div class="mb-3">
                    <label for="foot_text3" class="form-label">Text_3</label>
                    <input type="text" required class="form-control" id="foot_text3" name="text_3">
                  </div>

                  <div class="mb-3">
                    <label for="foot_text4" class="form-label">Text_4</label>
                    <input type="text" required class="form-control" id="foot_text4" name="text_4">
                  </div>


                  <button name="foot_btn" type="submit" class="btn btn-primary">Submit</button>
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
              <th scope="col">Heading</th>
              <th scope="col">Text_1</th>
              <th scope="col">Text_2</th>
              <th scope="col">Text_3</th>
              <th scope="col">Text_4</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>

            </tr>
          </thead>
          <tbody>


          <?php

          $qry= "SELECT * FROM `footer` WHERE 1";

          $x = mysqli_query($db_ctn, $qry);

          while ($y = mysqli_fetch_assoc($x)){

            $fid= $y["ID"];
            $fhead= $y["heading"];
            $t1= $y["text_1"];
            $t2= $y["text_2"];
            $t3= $y["text_3"];
            $t4= $y["text_4"];
            
          
          
          
          
          ?>
            
              <tr>
                <th scope="row"><?php echo $fid;  ?></th>
                <td><?php echo   $fhead ?></td>
                <td><?php echo   $t1 ?></td>
                <td><?php echo   $t2 ?></td>
                <td><?php echo   $t3 ?></td>
                <td><?php echo   $t4 ?></td>
                <td> <a href="" onclick="fooup(<?php echo $fid;  ?>,'<?php echo   $fhead ?>','<?php echo   $t1 ?>','<?php echo   $t2 ?>','<?php echo   $t3 ?>', '<?php echo   $t4 ?>')"  data-bs-toggle="modal" data-bs-target="#navpopid"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="footer1.php?fdel=<?php echo $fid;  ?>"><i class="bi bi-trash"></i></a></td>
                
               
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


  <!-- footer delete qry start -->

  <?php
  
   if(isset($_GET["fdel"])){

    $fdel= $_GET["fdel"];

    $qry= "DELETE FROM `footer` WHERE `id`= '$fdel'";

    $x= mysqli_query($db_ctn, $qry);

    if ($x == true) {
      echo '<script>
                 alert("Deleted Successfully");
                 window.location.href="http://localhost/new_texi/backend/footer1.php"
                     </script>';
   };
}


  
  
  
  
  
  ?>



  <script>

    function fooup(a,b,c,d,e,f){

      document.getElementById("footupid").value= a;
      document.getElementById("foothead").value= b;
      document.getElementById("foot_text1").value= c;

      document.getElementById("foot_text2").value= d;
      document.getElementById("foot_text3").value= e;
      document.getElementById("foot_text4").value= f;
     
    
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