<?php
/**
 * The template for displaying content in the index.php template.
 */
?>
<div class="col-lg-3 col-md-4 d-flex">
	<div class="card d-flex flex-column align-items-stretch mb-3 px-2 w-100">
		<div class="img-container">
			<div class="card-img-container">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="card-img-top video-thumbnail" alt="Hollywood Sign on The Hill" />
			</div>
		</div>
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">
				This is a longer card with supporting text below as a natural lead-in to
				additional content. This content is a little bit longer.
			</p>
		</div>
	</div>
</div>

