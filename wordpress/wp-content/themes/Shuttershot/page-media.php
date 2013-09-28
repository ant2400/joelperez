<?php get_header(); ?>


<div id="casing">
<div class="incasing">

<div class="topbar">

<h1 class="pageHeader">Media</h1>
</div>

<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">


<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
<div class="clear"></div>

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