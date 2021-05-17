<!DOCTYPE html>
<html lang="en">

<head>
    
<meta charset="<?php bloginfo('charset'); ?>">


	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	
	<meta name="description" content="<?php bloginfo('description'); ?>">


<!—Viewport responsive  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK -->
    <!—Google fonts  -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">

    
       
    <!-- CSS:  -->

        
	<!—remove all our styles and any Javascript code. Wordpress automatically calls javascript /jquery elsewhere, calls to javascript are not needed in the header or the footer now-->
    
<?php wp_head(); ?> <!—very important that this is added-->
   
    
</head>

<body>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/batavia%20gallery%20logo%20(Custom)%20(2).png" alt="Logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">About The Batavia</a></li>
                <li><a href="tours.html">Tours</a></li>
                <li><a href="gettinghere.html">Getting Here</a></li>
            </ul>

        </div>
    </div>
</nav>

<header class="container-fluid herobg">
    <div class="container">
        <h1> Explore the dark <br> past of the batavia </h1>
    </div>
</header>


