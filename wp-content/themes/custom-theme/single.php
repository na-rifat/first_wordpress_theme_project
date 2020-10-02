<?php get_header(); ?>
<div class="container">
    <br>
    <a class="btn btn-primary" href="<?php echo site_url(); ?>">Back</a>
    <h1 class="text-warning"><?php the_title(); ?></h1>    
    <hr>
    <p><?php the_content(); ?></p>
    <hr>
</div>
<?php get_footer(); ?>