<?php get_header(); ?>


<div id="casing">
<div class="incasing">

<div class="topbar">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>

<div id="content">
<ul class="press">
<?php $args = array(
	'post_type' => 'press'
);
$pressPosts = get_posts( $args );
foreach ( $pressPosts as $post ) : setup_postdata( $post ); ?>
	<li>
		<?php print_custom_field('press_quote'); ?><br />
		<?php print_custom_field('press_source'); ?><br />
		<?php print_custom_field('press_link'); ?><br />
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