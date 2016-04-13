<?php
session_start();
include 'base_include/header.php';
require_once('php/isuser.php');
// if(isset($_SESSION['signedin'])){
// 	header('Location:user.php');
// }


?>
<div class="container">
<?php
if(isset($_SESSION['error'])){
	echo '<div class="card-panel red darken-4" style="text-align:center;">Invalid Username/Password</div>';
	$_SESSION['error']=NULL;
}
?>
<br/>
<br/>
  <div class ="row">
<div class="col s6 card-panel grey lighten-5 z-depth-1">
  <div class="row">
    <form action="php/back_validation.php" method="POST" class="col s12">
    <div class="row">
    <h5 class="teal-text text-darken-1" align="center">REGISTRATION</h5>
     </div> 


     <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" name="username" class="validate" pattern=".{4,40}"   required title="4 characters minimum/40 Maximum">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate" name="first" required pattern=".{1,40}" title="1 charachters minimum/40 Maximum">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last" required pattern=".{1,40}" title="1 charachters minimum/40 Maximum">
          <label for="last_name">Last Name</label>
        </div>

      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" pattern=".{6,40}"   required title="6 characters minimum/40 Maximum">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="mobile" type="tel" class="validate" name="mobile" required>
          <label for="mobile">Mobile</label>
        </div>
      </div>

      <div class="input-field col s5 push-s7">
  <button class="btn waves-effect waves-light" type="submit" name="action">Register
    <i class="material-icons right">send</i>
  </button>
 </div>
    </form>


  </div>

</div>


 <div class="col s5 push-s1 card-panel grey lighten-5 z-depth-1">
            <h5 class="teal-text text-darken-1" align="center">Login</h5>
            <div class="row">
                <form action=" " method="POST" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" name="username" type="text" class="validate" pattern=".{4,40}"   required title="4 characters minimum\40 Maximum">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pass" type="password" name="password" class="validate" pattern=".{6,40}"   required title="6 characters minimum\40 Maximum">
                            <label for="pass">Password</label>
                        </div>
                    </div>
             
                    <div class="row">
                        <div class="col m12">
                            <p class="right-align">
                                <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Login</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</div>

</div>


<?php
include 'base_include/footer.php' ;
?>