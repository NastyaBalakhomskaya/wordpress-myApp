<!--single.php — шаблон записи-->

<?php get_header(); ?>
    <h1 class="my-4 page-title"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php comments_template(); ?> <!-- шаблон комментов -->
<?php get_footer(); ?>