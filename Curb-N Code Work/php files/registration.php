<!DOCTYPE html>
<html>
<title>CURB-N Registration</title>
<style>
body{
  background-image: url(https://s-media-cache-ak0.pinimg.com/originals/ec/03/f7/ec03f7617c735ada1436fb73fe288dda.jpg);
  background-size: cover;
}

h1{
  text-align: center;
  color: white;
  font-size: 84px;
  text-shadow: 2px 2px #000000;
  position: relative;
}

.window{
  width: 400px;
  height: 400px;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,.80);
  margin: 0 auto;
  position: relative;
  padding-left: 0px;
  padding-top: 0.2px;
  -webkit-border-radius: 15px;
  -o-border-radius: 15px;
  -moz-border-radius: 15px;
}

.head{
  padding-left: 139px;
  font-family: "Times New Roman";
  color: white;
  text-shadow: 2px 2px #000000;
  font-size: 32px;
}

.email{
  color: white;
  font-size: 20px;
  padding-left: 123px;
  position: relative;
  text-shadow: 2px 2px #000000;
}

.email input[type = "text"]{
  font-size: 12px;
  padding-left: 10px;
  height: 26px;
  width: 165px;
  box-shadow: 2px 2px #000000;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -moz-border-radius: 5px;
}

.pass{
  color: white;
  font-size: 20px;
  padding-left: 94px;
  position: relative;
  text-shadow: 2px 2px #000000;
}

.pass input[type = "password"]{
  font-size: 12px;
  padding-left: 10px;
  height: 26px;
  width: 165px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -moz-border-radius: 5px;
}

.vpass{
  color: white;
  font-size: 20px;
  padding-left: 40px;
  position: relative;
  text-shadow: 2px 2px #000000;
}

.vpass input[type = "password"]{
  font-size: 12px;
  padding-left: 10px;
  height: 26px;
  width: 165px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -moz-border-radius: 5px;
}

.cancel{
  cursor: pointer;
  font-size: 12px;
  margin-left: 89px;
  width: 70px;
  height: 30px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}

.reset{
  cursor: pointer;
  font-size: 12px;
  margin-left: 10px;
  width: 70px;
  height: 30px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}

.next{
  cursor: pointer;
  font-size: 12px;
  margin-left: 10px;
  width: 70px;
  height: 30px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -o-appearance: none;
}
</style>


  <body>
    <h1>Registration</h1>
  <div class = "window">

    <form method = "post" action = "info.php">

      <p class = "head"><strong>New User:</strong></p>
      <p class = "email">
      	Email: <input type = "text" placeholder = ".edu email" pattern = "^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$" title = "Must be a valid edu email"  name = "email" required><br/><br/>
      </p>
      <p class = "pass">
      	Password: <input type = "password" placeholder = "password" name = "pass" required><br/><br/>
      </p>
      <p class = "vpass">
      	Verify Password: <input type = "password" placeholder = "verification" name = "vpass" required><br/><br/>
      </p>

      <p>
      	<button class = "cancel" type = "button" onclick="window.location='login.php';">Cancel</button>
      	<button class = "reset"  type = "reset" value = "Reset">Reset</button>
      	<button class = "next"   type = "submit" value = "Next">Next</button>
      </p>
    </form>
  </div>
</body>

  <?php
    if (isset($_POST['email']) and isset($_POST["pass"])){

      if ($_POST['email'] == "" or $_POST["pass"] == ""){
          echo '<script type="text/javascript">alert("Registration Error: Please make sure all fields are filled in");</script>';
      }
      else if ($_POST["pass"] != $_POST["vpass"]){
          echo '<script type="text/javascript">alert("Passwords do not match, try again");</script>';
      }
      else{
        if (!preg_match("/^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$/",$_POST['email'])){
          echo '<script type="text/javascript">alert("Email must be a vaild .edu email");</script>';
        }
      }
      
  }?>
</html>