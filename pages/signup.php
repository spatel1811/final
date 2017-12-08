<?php



?>

<html lang="en">

<head>
	<meta charset="=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>


	<form action="index.php">
  <div class="container">

  	<h1> <marquee>Welcome to signup page</marquee></h1>
      <table>

     <tr>
  	<td> <label><b>Username</b></label></td>
    <td> <input type="text" placeholder="Enter Username" name="Username" required><br></td>
    </tr>

     <tr>
     <td> <label><b>Email</b></label></td>
     <td><input type="text" placeholder="Enter Email" name="Email" required><br></td>
     </tr>

     <tr>

    <td> <label><b>Firstname</b></label></td>
    <td><input type="text" placeholder="Enter Firstname" name="Firstname" required><br></td>
     </tr>
 
     <tr>

     <td><label><b>Lastname</b></label></td>
     <td><input type="text" placeholder="Enter Lastname" name="Lastname" required><br></td>
     </tr>
   
     <tr>
     <td><label><b>Password</b></label></td>
     <td><input type="password" placeholder="Enter Password" name="Password" required><br></td>
     </tr>

     <tr>
    <td><label><b>Repeat Password</b></label></td>
    <td><input type="password" placeholder="Repeat Password" name="psw-repeat" required><br></td>
</tr>
   
     <tr>
    <td><input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br></td>
       </tr>

   </table>
    <div class="clearfix">
      <button type="button"  class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
	</body>
	</html>
