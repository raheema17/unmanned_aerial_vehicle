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

            <h2>Livestream</h2>


         </div>


               <div class="post-thumb">
	               <a href="#" title="Permanent Link to ...">
                  <img title="post-thumb" alt="post-thumb" src="images/post-thumb-710x228.png">
                  </a>
               </div>
			   <p class="continue cf"><a class="button" href="mailphotos.php" target="_blank">Send Photos</a></p>
               <p class="lead" align="justify">This quadcopter is basically used for video surveillance. The quadcopter flies over the areas where the threat of theft is high. The video captured is streamed in a particular network and it can be viewed at the control station within the network. </p>

               <p align="justify">
The Quadcopter with several components are designed and mounted to monitor the river bed. The video is captured by the camera and it is streamed in the network. We can view the live streaming in any browser by giving the IP address of the Raspberry Pi. Raspberry Pi is a credit card sized computer that is used for video streaming. The operating system used is Raspbian. We used MJPG streamer to stream JPEG files. The video can be recorded and stored in the computer using a software named iSpy. This software records the video and it can also capture images continuously in a particular time interval. The images are stored in a directory.</p>
<h3>Setting up Raspberry Pi</h3>
<p align="justify">Raspberry Pi is a credit card sized single board computer.The Operating System used is Raspbian. Raspbian OS is one of the most advanced OS for Pi. Here, we have used 8 GB SD card to install the Raspbian OS. Once the OS is installed, the Raspberry Pi can be used for other operations. Ethernet cable is connected to Raspberry Pi to connect it to a network. After installing the OS, we need a software to connect to the Linux console on the Raspberry Pi.  Putty can be used for this purpose.</p>
<p><img src="images/rpi.jpg" height="400" width="550"></p>
<h4>
OS installation:</h4>
<ul>
<li>Download the distribution from the raspberrypi.org page. These are zipped file ending in .zip</li>
<li>Extract the image file from the downloaded zip file</li>
<li>Insert the SD card and download the Win32DiskImager. </li>
<li>Extract the executable from the zip and run the Win32DiskImager utility.</li>
<li>Select the image file we extracted. Then click write and wait for the write to complete.</li>
<li>Exit the imager and eject the SD card. Now we can plug the card into our Raspberry Pi.</li>
<p align="justify">Download Putty from the Putty website. Install it and connect it to the Raspberry Pi by giving the IP address of the Pi.
Then insert the SD card with the Raspbian installer on it and attach the power supply. Connect either an Ethernet cable or Wireless adapter to Raspberry Pi.</p>
<h3>Setting up MJPG streamer</h3>
<p align="justify">We used MJPG streamer to overcome the drawbacks of motion software. MJPG Streamer is a command line application that can be used to stream JPEG files over an IP-based network from the webcam to a viewer like Firefox. The source code for the streamer can be downloaded as a compressed zip file. The code can be unzipped, built and installed using commands. Live stream can be watched after starting the camera and MJPG Streamer.</p>
<p align="justify">Now we can connect with our web browser and watch the stream live. If we want to watch from within the same Raspberry Pi we can enter the following in the browser's address bar. <br>
http://localhost:8080  <br>
If we want to watch from another computer in that particular network use <br>
http://<IP address>:8080<br>
To view the stream, open the url http://IPaddress:8080/?action=stream <br>
To view the image, open the url http://IPaddress:8080/?action=snapshot <br>
<h3>iSpy</h3>
<p align="justify">iSpy is one of the best surveillance software. iSpy uses  cameras, webcams, IP cams and microphones to detect and record movement or sound. Captured media is compressed to flash video or mp4 and streamed securely over the web and local network. iSpy can run on multiple computers simultaneously.  It is used for desktop Recording, YouTube Uploading, SMS, Twitter and Email alerts.</p>
<p align="justify">If we use USB camera then select “Local Camera”. If we have an IP camera then we should select MJPEG and place the url of live streaming. iSpy monitors our cameras and only records when it detects movement. </p>
<p><img src="images/ispy.jpg" height="400" width="550"></p>
<p align="justify">YouTube account can be linked with the software so that the captured video can be uploaded to YouTube directly. The video can either be private or public.
               </p>

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