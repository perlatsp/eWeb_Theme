<?php get_header();?>

<div class="container">

	<h1><?php the_title(); ?></h1>

	<div class="content">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile;  endif; ?>

        <button onclick="goBack()" class="btn btn-my-dark">Go Back</button>
	</div>

</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<?php get_footer(); ?>
