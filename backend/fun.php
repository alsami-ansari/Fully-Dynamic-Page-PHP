<?php
include("conection.php");
if (isset($_POST["nav_btn"])) {

   $nn = $_POST["nav_name"];
   $nl = $_POST["nav_link"];
   $x = $_POST["navupid"];

   if (!empty($x)) {

      $qry = "UPDATE `nav_bar` SET `nav_name`='$nn',`nav_link`='$nl' WHERE id=$x";

      $x = mysqli_query($db_ctn, $qry);
      if ($x) {
         echo '<script>
                      alert("Nav Updated");
                      window.location.href="http://localhost/new_texi/backend/dashboard.php"
                     </script>';
      }
   } else {


      $qry = "INSERT INTO `nav_bar`( `nav_name`, `nav_link`) VALUES ('$nn',' $nl')";
      $x = mysqli_query($db_ctn, $qry);
      if ($x) {
         echo '<script>
                      alert("Nav Submitted");
                      window.location.href="http://localhost/new_texi/backend/dashboard.php"
                     </script>';
      }
   };
};


// card data insert s
// card data delete
if (isset($_GET["navdel"])) {
   
   $de = $_GET["navdel"];
  
   $qry = "DELETE FROM `nav_bar` WHERE `id`='$de'";

   $x = mysqli_query($db_ctn, $qry);
  
   if ($x == true) {
      echo '<script>
                 alert("Deleted Successfully");
                 window.location.href="http://localhost/new_texi/backend/dashboard.php"
                     </script>';
   };
}

// card delete e

if (isset($_POST["card_btn"])) {

   $uid = $_POST["cardid"];
   $ci = $_POST["card_icon"];
   $ch = $_POST["card_head"];
   $ct = $_POST["card_text"];

   if (!empty($uid)) {
      $qry = "UPDATE `card_data` SET `c_icon`='$ci',`c_head`='$ch',`c_text`='$ct' WHERE id=$uid";

      $x = mysqli_query($db_ctn, $qry);
      if ($x) {
         echo '<script>
                    alert("Card Updated");
                    window.location.href="http://localhost/new_texi/backend/card.php"
                        </script>';
      }






   } else {
      $qry = "INSERT INTO `card_data`( `c_icon`, `c_head`, `c_text`) VALUES ('$ci','$ch','$ct')";
   };

   $x = mysqli_query($db_ctn, $qry);
   if ($x) {
      echo '<script>
                 alert("Card Submitted");
                 window.location.href="http://localhost/new_texi/backend/card.php"
                     </script>';
   }
};

// card data insert e





// card delete query start



if(isset($_GET["carddel"])){

   $del= $_GET["carddel"];

   $qry= "DELETE FROM `card_data` WHERE `id`= '$del'";

   $x= mysqli_query($db_ctn, $qry);

   if ($x == true) {
      echo '<script>
                 alert("Deleted Successfully");
                 window.location.href="http://localhost/new_texi/backend/card.php"
                     </script>';
   };

}






// card delete query end















// footer insert start



if(isset($_POST["foot_btn"])){

$head= $_POST["heading"];
$t1= $_POST["text_1"];
$t2= $_POST["text_2"];
$t3= $_POST["text_3"];
$t4= $_POST["text_4"];

$id= $_POST["footupid"];




if(!empty($id)){
   $qry="UPDATE `footer` SET `heading`='$head',`text_1`='$t1',`text_2`='$t2',`text_3`='$t3',`text_4`='$t4' WHERE id='$id'";

   $x = mysqli_query($db_ctn, $qry);

   if ($x) {
      echo '<script>
                 alert("Footer Updated");
                 window.location.href="http://localhost/new_texi/backend/footer1.php"
                     </script>';
   }




} else{

  $qry= "INSERT INTO `footer`(`heading`, `text_1`, `text_2`, `text_3`, `text_4`) VALUES ('$head','$t1','$t2','$t3','$t4')";

  $x = mysqli_query($db_ctn, $qry);



  if ($x) {
   echo '<script>
              alert("Footer Submitted");
              window.location.href="http://localhost/new_texi/backend/footer1.php"
                  </script>';
}
}


}



// footer insert end












// blog insert start

     if(isset($_POST["b_btn"])){


      $img = $_FILES["img"]["name"];
      $tmp_name = $_FILES["img"]["tmp_name"];
      $b1= $_POST["btn_1"];
      $b2= $_POST["btn_2"];
      $h= $_POST["heading"];
      $t= $_POST["text"];
      $date= $_POST["date"];

      $id= $_POST["id"];





      if(!empty($id)){

         $qry="UPDATE `blog` SET `img`='$img',`btn_1`='$b1',`btn_2`='$b2',`heading`='$h',`text`='$t',`date`='$date' WHERE id='$id'";

         $x= mysqli_query($db_ctn, $qry);

         if ($x) {
            echo '<script>
                       alert("Blog Updated");
                       window.location.href="http://localhost/new_texi/backend/blog.php"
                           </script>';
         };
   



      }


      else{



       
    move_uploaded_file($tmp_name, "g_img/$img");


      $qry="INSERT INTO `blog`(`img`, `btn_1`, `btn_2`, `heading`, `text`, `date`) VALUES ('$img','$b1','$b2','$h','$t','$date')";
    

      $x= mysqli_query($db_ctn, $qry);

      if ($x) {
         echo '<script>
                    alert("Blog Submitted");
                    window.location.href="http://localhost/new_texi/backend/blog.php"
                        </script>';
      };

   }

     }



   //  blog start end




   // blog delete start



   if(isset($_GET["del"])){

      $del= $_GET["del"];

      $z="SELECT * FROM `blog` WHERE `id`= '$del'";

      $y= mysqli_query($db_ctn, $z);

      $a= mysqli_fetch_assoc($y);

      $image= $a["img"];

      $imgpth = "g_img/$image";

      if (file_exists($imgpth)) {
        unlink("$imgpth");
      }





  
      $qry= "DELETE FROM `blog` WHERE `id`= '$del'";
  
      $x= mysqli_query($db_ctn, $qry);
  
      if ($x == true) {
        echo '<script>
                   alert("Deleted Successfully");
                   window.location.href="http://localhost/new_texi/backend/blog.php"
                       </script>';
     };
  }


   // blog delete end
  






