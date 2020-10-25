<!DOCTYPE html>
<html>
	<body>
    
<style>
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}</style>
		
          <form action="runchangepassword" method="post">
  <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <label for="uname"><b>oldpassword</b></label>
    <input type="text" name="oldpassword" id="oldpassword" placeholder="Enter Your Old Password" required>
    <label for="uname"><b>newpassword</b></label>
    <input type="text" name="newpassword" id="newpassword" placeholder="Enter Your New Password" required>
    <label for="uname"><b>confirmpassword</b></label>
    <input type="text" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password" required>
    <span id='message'></span>
    <input type="hidden" value="<?php echo Session::get('id'); ?>" name="id">
    <button type="submit"  value="submit" name="forgot">Submit</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"> <a href="http://localhost/mvcphp/user/login">login?</a></span>
  </div>
</form>    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$('#newpassword, #confirmpassword').on('keyup', function () {
 	 if ($('#newpassword').val() == $('#confirmpassword').val()) {
    		$('#message').html('Matching').css('color', 'green');
  	 } else 
   		 $('#message').html('Not Matching').css('color', 'red');
	});
</script>