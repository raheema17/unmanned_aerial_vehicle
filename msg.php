<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
	<meta charset="utf-8">
	<title>Unmanned Aerial Vehicle</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- CSS
   ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

   <div id="content-wrap">

      <!-- Header
      ================================================== -->
      <header class="container">
         <nav id="nav-wrap" class="cf">

            <ul id="menu">
	            <li><a href="index.php">Home</a></li>

	            <li><a href="quad.php">Quadcopter</a></li>
	            <li><a href="stream.php">Livestream</a></li>
	            <li><a href="image.php">Image Comparison</a></li>
					         <li><a href="msg.php">Location of Theft</a></li>
            </ul> <!-- end #menu -->
         </nav>

         <div id=hgroup>
            <h1><a href="index.php">Unmanned Aerial Vehicle</a></h1>
            <h3>A Companion for Police Department</h3>
         </div>


     </header>

      <div id="content" class="container">

         <!-- main
         ================================================== -->
         <section id="main" class="grid9 first">

            <article>


         <div id="title-section">

            <h2>Location of Theft</h2>


         </div>



               <p align="justify">
We used Arduino, GPRS and GPS to send the location details (Latitude and longitude) of the vehicle where the theft is taking place as message to the mobile device of concerned official. For that first we just tried it with fixing the GPS in the satellite and getting location details such as latitude, longitude, date and time. Then we tried to send a text message to any mobile device using GPRS. Finally we integrated them to send GPS details using GPRS. Arduino is a microcontroller .It is used to read GPS details and send those using GPRS.<br>


<h4>Connecting the GPS module to the Arduino</h4>
<p>
Connect VIN to +5V, GND to Ground, RX and TX to the pins.
</p>
<p><img src="images/gps.jpg" width="550" height="400">
<h4>Getting GPS NMEA sentences in the PC</h4>
<p align="justify">GPS is a satellite based navigation system that provides location and time information. Arduino code was used to read information like date, time, location and satellite view. Once the GPS gets connected, the NMEA sentences coming from the GPS module. GPS receiver receives data from the satellite. After the data has been received and the position has been calculated, the data is configured according to standards set up by NMEA and is serially transmitted at a 4800 baud rate. </p>


<h4>Getting GPS NMEA sentences in the Arduino</h4>
<p align="justify">After the Arduino gets mounted with GPS, the code gets uploaded to the Arduino IDE sketch. Normally GPS output NMEA sentences but we need to extract the data from them. We have to parse the data for that purpose. The Arduino code to find the location, time, date, speed, angle, altitude gets uploaded. After the uploading is done correctly, open up the serial monitor, then it will display the result </p>

<h4>Trimble Studio</h4>
<p>The position of the vehicle can be found by using the Trimble Studio. It is connected to GPS and it points to the position of the vehicle.</p>
<p><img src="images/trimble.PNG" height="370" width="800">
<h4>Setting up GPRS module</h4>
<p align="justify">We can use Arduino to dial a phone number or send a text to any mobile device using AT commands. The default setting for the GPRS Shield is 19200 bps 8-N-1. It can be changed using AT commands. To set up the hardware system first we have to insert the unlocked SIM card to the holder. The GPRS shield can be controlled via hardware or software serial port of Arduino. Here we use software serial port. Power up Arduino by USB cable. Arduino gets connected with the GSM/GPRS as given below</p>

<p>
<img src="images/gprs.jpg" width="550" height="400">
<p align="justify">AT commands are used to control the GPRS shield. Serial tool sscom32E is used to send the AT commands and to display the result. The code to dial a phone number and to send a text message needs to get uploaded to the Arduino. Then power up the SIM900 by pressing the power button in about 2 seconds. The red LED will be on. The green one beside it will blink. If the shield join the network successfully, the green LED will blink every 3 seconds. 
</p>
<h4>Integration of GPS, GPRS and Arduino</h4>
<p align="justify">We have used TinyGPS library here. TinyGPS is designed to provide most of the NMEA GPS functionality. Here we are using the adafruit GPS receiver to receive the GPS data from the satellites. Once the GPS is set it will start showing the current location with latitude and longitude and other speed and angles data and time</p>
<p><img src="images/gps_gprs.jpg" width="550" height="400">
<p align="justify">Using the GPRS shield already mentioned to send the SMS here we are using the GPRS shield to send the GPS values as SMS to the prescribed number. We know that GPRS uses softserial library and the transmitter and receiver is 7 and 8 which act as a transmitter and receiver and is connected to the digital pin 7 and 8 on the Arduino UNO and it begins with a baud rate of 19200 which is optimum for the GPRS shield.</p>
<p> The message is recieved by the prescribed user</p>
<p><img src="images/output.png" width="469" height="595">


            </article>




         </section> <!-- end main -->



      </div>


   </div> <!-- end content-wrap -->

   <!-- footer
   ================================================== -->
   <footer class="container">
         <h3>Contact Info</h3>

		   <p>
         <strong>E-mail: </strong>uav4surveillance@gmail.com
         </p>

   </footer>

   <!-- Java Script
   ================================================== -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>

   <script src="js/custom.js"></script>  

</body>

</html>