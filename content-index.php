<?php
/**
 * The template for displaying content in the index.php template.
 */
?>
<div class="col-lg-3 col-md-4 px-2">
	<div class="box d-flex flex-column">
		<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" class="card-img-top" alt="Hollywood Sign on The Hill" />
		<div class="box-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">
				This is a longer card with supporting text below as a natural lead-in to
				additional content. This content is a little bit longer.
			</p>
		</div>
	</div>
</div>

