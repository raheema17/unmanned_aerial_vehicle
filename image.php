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

            <h2>Image Comparison</h2>


         </div>



               <p align="justify">
			   The images are captured by the quadcopter at regular time interval. The images are stored in a directory in the computer using iSpy. iSpy is one of the best surveillance software. The software monitors the cameras added to it.
Cameras such as Local camera and IP camera can be added to iSpy and can be monitored.	
<br>
<h5>To compare images</h5>


The first step is to create a class. In this class the images are compared.<br>

The procedure is as follows<br>

The type of image needs to be checked to confirm whether it is jpg or png. This is necessary because we should confirm that it is not in gif format or any other video formats. If the given image is any of the allowed formats then it returns true else false is returned.<br>


If its true then then the images(Base image and the current image) will be re sized and broken into pixels(8*8) and now it returns the re sized image.<br>


Then in the next step the images will be converted to gray scale that means each re sized colored images will be converted into black and white. <br>


In the next step the color value of the resized images will be found out using imagecolorat function which returns the color value of the images.<br>
</p>

Then finally the values obtained in the previous step is analyzed and compared to find out the number of positions at which the values changes will be taken into account and the range is given.<br>
<p align="justify">
<ul>

<li>If both the images are of different size then the number we get is 2</li>
<li>If they have different size and aspect ration the we get number 4</li>
<li>If they have different light and contrast the the number is 1</li>
<li>If they are exactly the same image then the number is 0</li>
<li>If completely different image number we get is greater than 15</li>
</ul>
</p>
<img src="images/base.jpg" height="200" width="200"> &nbsp; &nbsp; &nbsp;<img src="images/live1.jpg" height="200" width="200">

<h3> Base Image &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Live Image 1</h3>

<h5> The compared value is 9. This is an example of similar images.<br><br>

<p>The next example deals with different images</p>
</h5>


<img src="images/base.jpg" height="200" width="200"> &nbsp; &nbsp; &nbsp;<img src="images/live2.jpg" height="200" width="200">


<h3> Base Image &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Live Image 2</h3>

<h5> The compared value is 21. This is an example of different images.</h5>

<p align="justify">
This process will be continued till all the images taken are compared with the base image.<br>


Then the values are stored in the database.<br><br>

<img src="images/database.jpg" height="400" width="650">
<br>

Then the images which has the range between 0 to 15 will be mailed to the police department.<br><br>

<img src="images/mail.png" height="400" width="650"><br>


Next time when uav takes a fresh set of images the base image will not be compared with the already compared images in the folder as the database will have the image names stored. So the process will not take the previous and so the process is precise.            <br>
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