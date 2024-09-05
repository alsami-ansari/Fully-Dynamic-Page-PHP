<?php
     if(isset($_POST["rbtn"])){
        $rn=$_POST["r_name"];
        $re=$_POST["r_email"];
        $rp=$_POST["r_phone"];
        $rfd=$_POST["r_fd"];
        $rtd=$_POST["r_td"];
        $rdate=$_POST["r_date"];

        $qry="INSERT INTO `register`( `r_name`, `r_email`, `r_phone`, `r_fd`, `r_td`, `r_date`) VALUES ('$rn','$re','$rp','$rfd','$rtd','$rdate') ";
        
        $x=mysqli_query($db_ctn,$qry);
           if($x){
            echo'<script>
            alert("Form Submitted");
            window.location.href="http://localhost/new_texi/"
                </script>';

           }

     }
     


?>


<form action=""  method="post" class="form my-5">

<input class="form-control txt-field" type="text" name="r_name" placeholder="Your name"
  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" required>

<input class="form-control txt-field mt-3" type="email" name="r_email" placeholder="Email address"
  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>


<input class="form-control txt-field mt-3" type="tel" name="r_phone" placeholder="Phone number"
  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'" required>


<div class="default-select mt-3">
  <select class="form-control"  name="r_fd" required>
    <option value="" disabled selected hidden>From Destination</option>
    <option value="1">Destination One</option>
    <option value="2">Destination Two</option>
    <option value="3">Destination Three</option>
  </select>
</div>


<div class="default-select mt-3">
  <select class="form-control"  name="r_td">
    <option value="" disabled selected hidden>To Destination</option>
    <option value="1">Destination One</option>
    <option value="2">Destination Two</option>
    <option value="3">Destination Three</option>
  </select>
</div>

<input name="r_date" class="dates form-control mt-3" placeholder="Date & time" type="date" required>




<button type="submit" name="rbtn" class="mt-3 submitbtn btn mb-2" id="about"> MAKE RESERVATION</button>
</form>