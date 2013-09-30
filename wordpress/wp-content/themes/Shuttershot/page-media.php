<?php get_header(); ?>


<div id="casing">
<div class="incasing">

<div class="topbar">

<h1 class="pageHeader">Media</h1>
</div>

<div id="content" class="media">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">


<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
<div class="clear"></div>

</div>

	<div class="vid">
		<p>On "The Big C"</p>
		<iframe width="560" height="315" src="//www.youtube.com/embed/BhBA9vrslho" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class="vid">
		<p>Singing "More Than Words"</p>
		<iframe width="560" height="315" src="//www.youtube.com/embed/bOuYgsoaQog" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class="vid">
		<p>The Harmonious Pimps of Harmony</p>
		<iframe width="560" height="315" src="//www.youtube.com/embed/3RVhwcWBtsY" frameborder="0" allowfullscreen></iframe>
	</div>

	<h2 class="sectionHeader">Commercial Work</h2>

	<div class="vid">
		<p>Nike Air Jordan</p>
		<iframe width="560" height="315" src="//www.youtube.com/embed/BirIEDYrw0Y" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class="vid">
		<p>Axe Anarchy V.O.</p>
		<iframe width="560" height="315" src="//www.youtube.com/embed/yFN0AZl6sVI" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class="vid">
		<p>Delloite Consulting</p>
		<iframe width="420" height="315" src="//www.youtube.com/embed/b9ghb6-l7Fs" frameborder="0" allowfullscreen></iframe>
	</div>

</div>

<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>

</div>

<!--?php get_sidebar(); ?-->
<div class="clear"></div>

</div>

<div class="clear"></div>
</div>	
<?php get_footer(); ?>