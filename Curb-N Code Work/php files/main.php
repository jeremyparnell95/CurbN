<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style>
  body{
    background-color: blue;
    background-size: cover;
    overflow-y: auto;
  }

  h1{
    text-align: center;
    font-size: 79px;
    color: white;
    margin: 0 auto;
  }
  
	.wrapper{
		text-align: center;
	}
  
	input[type=text] {
    width: 250px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
	}

  .feed{
    padding-left: 15%;
    padding-right: 15%;
  }

  a{
    text-decoration: none;
  }

  .event{
    cursor: pointer;
    color: black;
    border-color: black;
  }

  .name{
    margin: 0 auto;
    font-size: 60px;
    text-align: center;
  }

  .location{
    margin: 0 auto;
    font-size: 20px;
    float: left;
  }

  .dates{
    margin: 0 auto;
    font-size: 20px;
    float: right;
  }

	input[type=text]:focus {
    	width: 50%;
	}

  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }

  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
  }

  .sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
  }

  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
	</style>
</head>

<body>

<span style="font-size:30px;cursor:pointer;color: white;" onclick="openNav()">&#9776;Open Menu</span>
<h1>CURB-N</h1><br/>

<form>
  <div class = wrapper>
    <input type="text" name="search" placeholder="Search An Event...">
  <div>
</form><br/>
  <!--below code would serve as the template for information coming from the database-->
  <div class = feed>
    <a href = 'event.php'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a>
    <!--above code would serve as the template for information coming from the database-->


  

    <!--below are just hard-coded copies to display what our information will look like-->
    <a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a><a href = '#'>
      <div class = "event">
        <p class = name>EDC</p>
        <div class = location><strong>LOCATION:</strong> 1234 Yellow Brick Road</div>
        <div class = dates><strong>START DATE:</strong> 04/29/2017 <strong>END:</strong> 04/29/2017</div>
        <div style="clear: both;"></div>
      </div>
    </a>
   <!--stops here-->

  <br/><br/><br/></div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Profile</a>
  <a href="#">History</a>
  <a href="#">Itinerary</a>
  <a href="request_page.php">Requests</a>
  <a href="login.php">Logout</a>
</div>
</body>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "220px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

$(function() {
    $(".event").each(function() {
        var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
         $(this).css("background-color", hue);
    });
});
</script>
</html> 

