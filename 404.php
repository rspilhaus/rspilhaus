<?php 
	$pageTitle = "Page Not Found | Ryan Spilhaus dot Com";
	include('header.php'); 
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>


<section class="bigtext-wrap">
	<div class="bigtext-left">
		<h1 class="bigtext fit-text">Oops...<br>that&rsquo;s not<br>a real page</h1>
	</div><!-- end .bigtext-wrap -->
	<div class="bigtext-right">
		<p class="work-services">Couldn&rsquo;t find <?php echo $actual_link; ?></p>
		<p>Well... this is embarrassing. Someone (but definitely not you) goofed and either provided you an incorrect link to my site or deleted the page that it was originally referring to. There are only about five pages on this site though, so it shouldn&rsquo;t be too hard to find what you&rsquo;re looking for.</p>
		<a href="/" target="_blank" class="button">Go to Home Page</a>
	</div><!-- end .bigtext-right -->
</section><!-- end .bigtext-wrap -->





<?php include('footer.php'); ?>
