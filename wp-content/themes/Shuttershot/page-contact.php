<?php get_header(); ?>


<div id="casing">
<div class="incasing">

<div class="topbar">
<h1 class="pageHeader">Contact</h1>
</div>

<div id="content" class="contact">
<ul class="contactSocial">
	<li>
		<a class="icon" id="imdb" href="http://www.imdb.com/name/nm3095128/?ref_=fn_al_nm_1"></a>
	</li>
	<li>
		<a class="icon" id="fb" href="https://www.facebook.com/pages/Joel-Perez/169305409848590?ref=hl"></a>
	</li>
	<li>
		<a class="icon" id="tw" href="https://twitter.com/MisterJoelPerez"></a>
		<p>@MisterJoelPerez</p>
	</li>
</ul>

<div class="clearFix"></div>

<ul class="repInfo">
<?php $args = array(
	'post_type' => 'contact'
);
$pressPosts = get_posts( $args );
foreach ( $pressPosts as $post ) : setup_postdata( $post ); ?>
	<li>
		<h3 class="contactTitle"><?php the_title(); ?></h3>
		<p class="contactContent"><?php the_excerpt(); ?></p>
		<p class="contactPhone"><?php print_custom_field('contact_phone'); ?></p>
	</li>
<?php endforeach; 
wp_reset_postdata();?>
</ul>
</div>


</div>

<div class="clear"></div>

</div>

<div class="clear"></div>
</div>	
<?php get_footer(); ?>