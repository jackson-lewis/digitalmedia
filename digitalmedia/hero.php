<?php 

// HERO

?>

<?php 

$img = get_the_post_thumbnail_url();
$additional = esc_url( $img );

if ( $landing ) {
	$add_class = 'hero landing';
} else {
	$add_class = 'hero';
}

?>


<div class="<?php echo $add_class; ?>">
    <div class="hero-background">
    	<img src=" <?php echo $additional; ?> ">
    </div>
    <div class="hero-content">
		<h1><?php the_title(); ?></h1>
		<?php if ( $landing ) { ?>
		<p>A creative course using web and mobile platforms to analyse, design and develop a range of digital media applications integrating the latest digital technologies.</p>
		<div class="cta">
			<a href="" class="button">course overview</a>
			<a href="" class="button">showcase</a>
		</div>
		<?php } ?>
    </div>
</div>