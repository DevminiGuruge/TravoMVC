<?php
if (isset($_SESSION['username'])) {
  if (mysqli_num_rows($this->isVehicle) === 1) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <style> <?php include APPROOT . '/public/css/vehicle/vehicle_update_vehicle.css'; ?> </style>
    <style><?php include APPROOT . '/public/css/unregistered/repeating_css.css'; ?> </style>
    <link rel="icon" href="<?php echo URLROOT ?>/public/images/icons/favicon.ico"> 
    <?php include APPROOT . '/views/repeatable_contents/font.php'; ?>
    <?php
      //$result = require '../../db/vehicle/vehicle_update_profile.php';
    ?>
  </head>
  <body>
    <section class="sign_up-traveler">
      <?php include APPROOT . '/views/repeatable_contents/nav_bar_vehicle.php';?>
      <style> <?php include APPROOT . '/public/css/repeatable_contents/nav_bar_vehicle.css'; ?>  </style>
      <script type="text/javascript" src="<?php echo URLROOT ?>/public/script/repeatable_contents/nav_bar_vehicle.js"></script>
      
      
      <div class="box-sign_up-traveler">
        <br/>
        <form class="form-sign_up-traveler" id="signup_form_vehicle" action="vehicle_view_vehicle.php" method="POST">
           
          <div class="form-control">
            <label for="vehicle-no">Vehicle Number</label>
            <input class="text-form-sign_up-traveler" type="text" name="vehicle_no" id="vehicle_no" placeholder=" Vehicle number"><br/>
          </div>

          <div class="form-control">
            <label for="vehicle">Vehicle</label>
            <input class="text-small-form-sign_up-traveler" type="text" name="no_of_passengers" id="no_of_passengers" placeholder=" No of passengers">
            <input class="text-small-form-sign_up-traveler" type="text" name="type" id="type" placeholder=" Type"><br/>
          </div>

          <div class="form-control">
            <label for="city">Location</label>
            <select class="select-form-sign_up-traveler" name="city">
              <option value="All Sri Lanka">Sri Lanka</option>
              <option value="Ampara">Ampara</option>
              <option value="Anuradhapura">Anuradhapura</option>
              <option value="Badulla">Badulla</option>
              <option value="Batticaloa">Batticaloa</option>
              <option value="Colombo">Colombo</option>
              <option value="Galle">Galle</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Hambantota">Hambantota</option>
              <option value="Jaffna">Jaffna</option>
              <option value="Kalutara">Kalutara</option>
              <option value="Kandy">Kandy</option>
              <option value="Kegalle">Kegalle</option>
              <option value="Kilinochchi">Kilinochchi</option>
              <option value="Kurunegala">Kurunegala</option>
              <option value="Mannar">Mannar</option>
              <option value="Matale">Matale</option>
              <option value="Matara">Matara</option>
              <option value="Monaragala">Monaragala</option>
              <option value="Mullaitivu">Mullaitivu</option>
              <option value="Nuwara Eliya">Nuwara Eliya</option>
              <option value="Polonnaruwa">Polonnaruwa</option>
              <option value="Puttalam">Puttalam</option>
              <option value="Ratnapura">Ratnapura</option>
              <option value="Trincomalee">Trincomalee</option>
              <option value="Vavuniya">Vavuniya</option>
            </select>
            <br/>
          </div>              

          <div class="form-control">
            <label for="price">Price</label>
            <input class="text-small-form-sign_up-traveler" type="text" name="price_for_day" id="price_for_day" placeholder=" Price for day">
            <input class="text-small-form-sign_up-traveler" type="text" name="price_for_1km" id="price_for_1km" placeholder=" Price for 1km"><br/>
          </div>
          
          <div class="form-control">
            <label for="driver">Driver</label> <input class="text-small-form-sign_up-traveler" type="text" name="driver_charge" id="driver_charge" placeholder=" Driver charges for a day">
            <select class="drop-down-form-sign_up-traveler" type="driver-type" name="driver_type" id="driver_type">
              <option value="with-driver">With Driver</option>
              <option value="without-driver">Without Driver</option>
              <option value="with-without-driver">With or Without Driver</option>
            </select><br/>
          </div>

          <div class="form-control">
            <label for="ac">A/C</label><input class="ac-checkbox-form-sign_up-traveler" type="checkbox" name="ac" id="ac" value="yes"> <span></span> <br/>
          </div>
        </form>
      </div>

      <div class="buttons-sign_up-traveler">
      <br><input type="button" class="refreshbtn" value="REFRESH" onclick="window.location.reload();">
          <input type="submit" form="signup_form_vehicle" class="submitbtn" name="submitbtn" id="submitbtn" value="UPDATE">
      </div>
    </section>

  <!--__________________contact_us________________-->
  
  <section id="contact_us-section">
        <?php include APPROOT . '/views/repeatable_contents/footer.php';?>
        <style> <?php include APPROOT . '/public/css/repeatable_contents/footer.css'; ?>  </style>
  </section>

<!--__________________END contact_us________________-->

  </body>
</html>
<?php
  } else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>';
    exit();
  }
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
