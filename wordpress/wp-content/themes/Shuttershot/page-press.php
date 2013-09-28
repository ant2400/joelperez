<?php get_header(); ?>


<div id="casing">
<div class="incasing">

<div class="topbar">
<h1 class="pageHeader">Press</h1>
</div>

<div id="content" class="press">
<ul>
<?php $args = array(
	'post_type' => 'press'
);
$pressPosts = get_posts( $args );
foreach ( $pressPosts as $post ) : setup_postdata( $post ); ?>
	<li>
		<h2 class="pressQuote">"<?php print_custom_field('press_quote'); ?>"</h2>
		<h6 class="pressSource">-<?php print_custom_field('press_source'); ?></h6>
		<a class="pressLink" href="<?php print_custom_field('press_link');?>">View Full Article</a>
	</li>
<?php endforeach; 
wp_reset_postdata();?>
</ul>
</div>

<!--?php get_sidebar(); ?>
<div class="clear"></div>

</div-->

<div class="clear"></div>
</div>	
<?php get_footer(); ?>