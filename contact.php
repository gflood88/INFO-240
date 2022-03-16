<?php include('includes/process.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Me | Lucille Ball Library</title>
	<meta name="description" content="Contact form that is utilized to collect information of visitors, provide useability feedbackof the website, and to provide a platform for uses to ask questions or post comments.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	


</head>


<body>

<div class="wrapper">

	<header class="banner">
	
	<img class="logo" src="images/lucylogo.jpg" alt="Lucille Ball cartoon face logo">
	
		<h1>The Lucille Ball Library</h1>
	
		<nav class="primary-menu">
			<ul>
				<li><a href="index.php">Homepage</a></li>
				<li><a href="about.php">About Me</a></li>
				<li><a href="swot.php">S.W.O.T. Analysis</a></li>
				<li><a href="actionplan.php">Action Plan</a></li>
				<li><a href="contact.php">Contact Me</a></li>
			
			</ul>
		</nav>
		
	</header>
	
<main class="main">
	
	<h2>Contact Me</h2>
	
	<?php print $formMessage;?>
	
		<form class="contact-form" method="post" action="contact.php">
 
			<fieldset>
 
				<legend>Personal Information</legend>
   
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];}?>">
	
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])) {echo $_POST['email'];}?>">
			</fieldset>
			
			<fieldset>
 
				<legend>Website Usability:</legend>
	
				<label><input type="checkbox" name="usability[]" value="not"> Not useful</label>	
				<label><input type="checkbox" name="usability[]" value="somewhat"> Somewhat Useful</label>	
				<label><input type="checkbox" name="usability[]" value="very"> Very Useful</label>
		 
			</fieldset>
		
			<fieldset>
				<legend>Subsciption & Comments</legend>
  
				<label for="newsletter">Subscribe to newsletter?</label>
				<select name="newsletter" id="newsletter">
				<option value="no"<?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'no') {echo " selected";}?>>No</option>
				<option value="yes"<?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'yes') {echo " selected";}?>>Yes</option>
				</select>
	
				<label for="comments">Comments & Questions:</label>
				<textarea name="comments" id="comments"><?php if (isset($_POST['comments'])) {echo $_POST['comments'];}?></textarea>
   
			</fieldset>
 
			<input type="submit" value="submit">

		</form>
		
</main>

	<aside class="sidebar">
	
		<h2>Lucy Desi Musuem Tour</h2>

		<p>The Lucille Ball Library is a satellite library supported by the Lucy Desi Musuem located in Jamestown, New York. Below we have included a video tour of the musuem for those who are not able to travel to New York, but still wish to visit the musuem. The video also highlights key exhbitis and artifacts that will be on rotation at the Lucille Ball Library in Chatworth, California.</p>
		
		<div class="media-container">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/HGZYEgtQWzc" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		
		
	</aside>

	<footer class="site-footer">

	<?php include('includes/footer.php');?>

	</footer>


</div> 

</body>
</html>
	