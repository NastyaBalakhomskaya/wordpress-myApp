<!-- page.php — шаблон страницы -->
<?php get_header(); ?>
   <h1 class="my-4 page-title"><?php the_title(); ?></h1>
<?php the_content(); ?>   <!--выводит контент страницы-->
<?php get_footer(); ?>
