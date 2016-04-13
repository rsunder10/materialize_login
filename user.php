<?php
session_start();
include './base_include/header.php';
require('./php/user_value.php');

?>
<?php
if(isset($_SESSION['update_a'])){
	echo '<div class="card-panel green darken-4" style="text-align:center;">Account Detail Updated</div>';
	$_SESSION['update_a']=NULL;
}
?>
<h1><?php echo $_SESSION['id']; ?></h1>
  <!-- Modal Trigger -->
  <button data-target="modal1" id="mode" class="btn modal-trigger">Update Profile</button>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Update Profile</h4>
      <p>Enter the detail so that we could help you effectively</p>
  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">verified_user</i>Account Detail</div>
      <div class="collapsible-body"> 
<div class="container">
      <form action="php/update_a.php" method="POST" class="col s12"> 
      <div class="col s6 card-panel grey lighten-5 z-depth-1" style="margin:10px;">

      <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" value="<?php echo $first; ?> "class="validate" name="first" required pattern=".{1,40}" title="1 charachters minimum/40 Maximum">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" value="<?php echo $last;?>" name="last" required pattern=".{1,40}" title="1 charachters minimum/40 Maximum">
          <label for="last_name">Last Name</label>
        </div>

      </div>


      <div class="row">
        <div class="input-field col s12">
          <input id="mobile" type="tel" class="validate" value="<?php echo $mobile; ?> " name="mobile" required>
          <label for="mobile">Mobile</label>
        </div>
      </div>

      <div class="input-field col s4 push-s7">
  <button class="btn waves-effect waves-light" type="submit" name="action">Update
    <i class="material-icons right">send</i>
  </button>
 </div>
    </form></div>
    </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">question_answer</i>Personal Details</div>
      <div class="collapsible-body">
      	<div class="container">
      	<form action="php/update_p.php" method="POST">
      	<div class="col s6 card-panel grey lighten-5 z-depth-1" style="margin:10px;">
     <div class="row">
        <div class="input-field col s12">
          <input id="height" type="number" name="height" class="validate"   required >
          <label for="height">Height(cm)</label>
        </div>
      </div>
           <div class="row">
        <div class="input-field col s12">
          <input id="weight" type="number" name="weight" class="validate"  required>
          <label for="weight">Weight(Kg)</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s12">
       	<input type="date" placeholder="Due Date" id="date" name="dd" required class="datepicker">
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="pressure" type="number" name="pressure" step="any" class="validate"   required >
          <label for="pressure">Blood Pressure(mmHg)</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="age" type="number" name="age" class="validate"   required >
          <label for="pressure">Age</label>
        </div>
      </div>

  <div class="input-field col s12 m6">
    <select class="icons" required name="gender">
      <option value="" disabled selected>Choose your Gender</option>
      <option value="male" data-icon="img/male.png" class="left circle">Male</option>
      <option value="female" data-icon="img/female.png" class="left circle">Female</option>
    </select>
    <label>Images in select</label>
  </div>



  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>

      	</div>
      	</form>
      	</div>



      </div>
    </li>

  </ul>
    </div>
    <div class="modal-footer">
      <a href="#" id="close" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>




<div class="row">
 <div class="col s4 m4">
     <div class="card blue-grey darken-1">
     <div class="card-content white-text">
     <span class="card-title">HEALTH CARD</span>
     <div class="row">
     <div class="col s1"><img src="img/user.png" height="30" width="30"></div>
     <div class="col s4">Name</div>
     <div class="col s1"></div>
     <div class="col s4"><?php echo $first.' '.$last;?></div>
     </div>
     <div class="row">
     <div class="col s1"><img src="img/age.png" height="30" width="30"></div>
     <div class="col s4">Age</div>
     <div class="col s1"></div>
     <div class="col s4"><?php if(isset($_SESSION['value_not'])) echo 'NA';else echo $age; ?></div>
     </div>
     <div class="row">
     <div class="col s1"><img src="img/height.png" height="30" width="30"></div>
     <div class="col s4">Height</div>
     <div class="col s1"></div>
     <div class="col s4"><?php if(isset($_SESSION['value_not'])) echo 'NA';else echo $height; ?></div>
     </div>
     
     <div class="row">
     <div class="col s1"><img src="img/weight.png" height="30" width="30"></div>
     <div class="col s4">Weight</div>
     <div class="col s1"></div>
     <div class="col s4"><?php if(isset($_SESSION['value_not'])) echo 'NA';else echo $weight; ?></div>
     </div>

     <div class="row">
     <div class="col s1"><img src="img/gender.png" height="30" width="30"></div>
     <div class="col s4">Gender</div>
     <div class="col s1"></div>
     <div class="col s4"><?php if(isset($_SESSION['value_not'])) echo 'NA';else echo $gender; ?></div>
     </div>
     <div class="row">
     <div class="col s1"><img src="img/pressure.png" height="30" width="30"></div>
     <div class="col s4">Blood Pressure</div>
     <div class="col s1"></div>
     <div class="col s4"><?php if(isset($_SESSION['value_not'])) echo 'NA';else echo $pressure; ?></div>
     </div>
     <div class="row">
     <div class="col s1"><img src="img/bmi.png" height="30" width="30"></div>
     <div class="col s4">BMI</div>
     <div class="col s1"></div>
     <div class="col s4"><?php if(isset($_SESSION['value_not'])) echo 'NA';else echo $bmi; ?></div>
     </div>

     <div class="row">
     <div class="col s1"><img src="img/duedate.png" height="30" width="30"></div>
     <div class="col s4">Due Date</div>
     <div class="col s1"></div>
     <div class="col s4"><?php if(isset($_SESSION['value_not'])) echo 'NA';else echo $dd; ?></div>
     </div>

     </div>
     </div>


    </div>
 </div>




<?php 
include './base_include/footer.php';
?>

