<?php
include("conection.php");
//  print_r($_FILES);
if (isset($_POST["btn"])) {


    $img = $_FILES["img_name"]["name"];
    $tmp_img = $_FILES["img_name"]["tmp_name"];
    $x= $_POST["upid"];



if(!empty($x)){
      


    $qry= "SELECT `img_name` FROM `gallery_img` WHERE img_id=$x";
    
    $res = mysqli_query($db_ctn, $qry);

    $z=mysqli_fetch_assoc($res);

    $a= $z["img_name"];

 
    if(!empty($img)){

        $qry= "UPDATE `gallery_img` SET `img_name`='$img' WHERE `img_id`= '$x'";
    
        move_uploaded_file($tmp_img, "g_img/$img");
   
        unlink("g_img/$a");

    }else{

        $qry= "UPDATE `gallery_img` SET `img_name`='$img' WHERE `img_id`= '$a'";
    

    }


     $result = mysqli_query($db_ctn, $qry);
     if ($result) {
         echo '<script>alert("Image Updated") 
         window.location.href="http://localhost/new_texi/backend/gallery.php";
   
           </script>';
     }


} else{


    
    move_uploaded_file($tmp_img, "g_img/$img");

    $qry = "INSERT INTO `gallery_img`(`img_name`) VALUES ('$img') ";

    $result = mysqli_query($db_ctn, $qry);
    if ($result) {
        echo '<script>alert("Image Submitted") 
        window.location.href="http://localhost/new_texi/backend/gallery.php";
  
          </script>';
    };
};
};









// delete gallery


if(isset($_GET["gdel"])){

    $del= $_GET["gdel"];

   

    
   $z="SELECT * FROM `gallery_img` WHERE `img_id`='$del'";
    
   

    $x = mysqli_query($db_ctn, $z);

    $y= mysqli_fetch_assoc($x);

        $image= $y["img_name"];

        $imgpth = "g_img/$image";

        if (file_exists($imgpth)) {
          unlink("$imgpth");
        }
        
        $aa= "DELETE FROM `gallery_img` WHERE `img_id`='$del'";

        $x = mysqli_query($db_ctn, $aa);


    if ($x == true) {


        echo '<script>
                   alert("Deleted successfully");
                   window.location.href="http://localhost/new_texi/backend/gallery.php"
                       </script>';
     };

}