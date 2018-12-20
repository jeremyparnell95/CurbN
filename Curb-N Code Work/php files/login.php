<!DOCTYPE html>
<html>

<head>
  <title>Curb-N Ridesharing</title>
  <style>
body{
  background-image: url('http://www.lendr.com.ph/wp-content/uploads/2016/07/iStock_78449553_MEDIUM.jpg');
  background-size: cover;
}


h1 {
  font:'Kameron', sans-serif;
  font-size: 150px;
  line-height: 350px;
  margin: 0;
  position: relative;
  text-align: center;
  top: 50%;
  color: white;
  text-shadow: 2px 2px #000000;
}

.caption{
  color: white;
  font-size: 24px;
  position: relative;
  text-align: center;
  text-shadow: 2px 2px #000000;
}


.login{
  width: 300px;
  height: 230px;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,.35);
  margin: 0 auto;
  position: relative;
  padding-left: 110px;
  padding-top: 2px;
  -webkit-border-radius: 15px;
  -o-border-radius: 15px;
  -moz-border-radius: 15px;
}

.login h2{
  position: relative;
  color: white;
  padding-left: 70px;
  text-shadow: 2px 2px #000000;
}

.login a{
  color: white;
  padding-left: 60px;
  font-weight: bolder;
  text-shadow: 2px 2px #000000;
}

.login input[type = "email"]{
  padding-left: 15px;
  font-size: 16px;
  font-family: "Times New Roman";
  width: 200px;
  height: 25px;
  border: 0;
  border-radius: 2px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -moz-border-radius: 5px;
  box-shadow: 2px 2px #000000;
}

.login input[type = "password"]{
  padding-left: 15px;
  font-size: 16px;
  font-family: "Times New Roman";
  width: 200px;
  height: 25px;
  border: 0;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -moz-border-radius: 5px;
  box-shadow: 2px 2px #000000;}

.login input[type = "submit"]{
  cursor: pointer;
  width: 215px;
  height: 25px;
}
  </style>
</head>

  <div class = "header">
    <h1>CURB-N</h1>
      <div class = "caption">
        <h2><em>Experience Life Together</em></h2>
      </div>
  </div>

<body>
  <div class = "login">
  <h2>Login</h2>
    <form method = "post" action = main.php>
      <input type = "email" placeholder = ".edu email" pattern = "^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$" title = "Must be a valid edu email" name = 'email' required><br/><br/>
      <input type = "password" placeholder = "password" name = 'pass' required><br/><br/>
      <input type = "submit" value = "Login"><br/><br/>
      <a href = "registration.php">New User+</a>
    </form>
  </div> 
</body>

<?php
  if(isset($_POST['email']) and isset($_POST['pass'])){

    if ($_POST['email'] == "" or $_POST['pass'] == ""){
        echo '<script type="text/javascript">alert("Registration Error: Please make sure all fields are filled in");</script>';
    }
    else{
      if (!preg_match("/^[\s]*[a-zA-Z]+@[a-zA-Z]+\.edu[\s]*$/", $_POST['email'])){
        echo '<script type="text/javascript">alert("Email must be a valid .edu email");</script>';
      }
    }

  }?>

</html>