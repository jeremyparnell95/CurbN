<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<title>Requests</title>
  </head>

  <style>
  body{
  	margin: 0 auto;
  	background-color: red;
  }
  
  h1{
  	text-align: center;
  	font-size: 40px;
  }

  h2{
  	text-align: center;
  	font-size: 28px;
  	margin: 0;
  }

  a{
    text-decoration: none;
  }

  .wrapper{
  	text-align: center;
  }

  .back{
  	cursor: pointer;
    font-size: 12px;
    width: 70px;
    height: 30px;
    -moz-appearance: none;
    -webkit-appearance: none;
    -o-appearance: none;
  }

  .rider_scroll{
  	padding-left: 15%; /* or any value */
  	padding-right: 15%;
  }

  .rider_feed{
  	height: 500px; 
    overflow-y: auto;
  }

  .rider{
    cursor: pointer;
    color: black;
  }

  .driver_scroll{
  	padding-left: 15%; /* or any value */
  	padding-right: 15%;
  }

  .driver_feed{
  	height: 500px; 
    overflow-y: auto;
  }

  .driver{
  	cursor: pointer;
    color: black;
  }

  .name{
    font-size: 30px;
    float: left;
    padding-left: 20px;
  }

  .info{
  	font-size: 30px;
    float: right;
    padding-right: 20px;
  }

  </style>

  <body>
  	<h1><u>Requests</u></h1>
  	<h2>Others Who Want To Ride With You:</h2>
  	<div class = "rider_scroll">
  	  <div class = "rider_feed">

	  <!--use below as a template for rider information display on feed-->
	  <a href = 'confirm_rider.php'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a>
	  <!--use above as a template for rider information display on feed-->


	  <!--below are just hardcoded examples to display what our information would look like and to test our scroll feature-->
	  <a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "rider">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Willing to Pay: $5.00</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a>
	  <!--ends here-->

	  </div>
  	</div><br/><br/><br/>


  	<h2>Others Who Want To Drive You:</h2>
  	<div class = "driver_scroll">
  	  <div class = "driver_feed">

  	  <!--use below as a template for driver information display on feed-->
	  <a href = 'confirm_driver.php'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a>
	 <!--use above as a template for driver information display on feed-->


	 <!--below are just hardcoded examples to display what our information would look like and to test our scroll feature-->
	 <a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a><a href = '#'>
	    <div class = "driver">
	      <div class = name>Jeremy Parnell</div>
	      <div class = info>Seats Open: 4</div>
	      <div style="clear: both;"></div>
	    </div>
	  </a>
	  <!--ends here-->

	  </div>
  	</div><br/><br/><br/>

  	<div class = wrapper>
  	  <button class = back onclick="window.location='main.php'">Back</button>
  	</div><br/><br/>
 
 
  </body>


 <script>
 $(function() {
    $(".rider").each(function() {
        var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
         $(this).css("background-color", hue);
    });
});

 $(function() {
    $(".driver").each(function() {
        var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
         $(this).css("background-color", hue);
    });
});
 </script> 
</html>