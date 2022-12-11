<?php get_header(); ?>

<h1>My first project in WordPress</h1>

<?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>

   <!-- название поста и кликабельная ссылка по нему-->
        <h2 class="card-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
    <!---->

        <div class="card mb-4">
            <div class="card-body">
                <?php if (has_post_thumbnail()): ?>  <!--Определяет, прикреплено ли к сообщению изображение-->
                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="card-img-top">
                <?php endif; ?>
                <p class="card-text">
                    <small class="text-muted">
                        <?php the_time('j F Y'); ?> <!--дата и время создания публикации-->
                    </small>
                    <?php the_tags(); ?> <!--отображает теги для сообщения-->
                    <?php the_excerpt(); ?> <!--отображение отрывка начала поста-->
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary shadow-none">
                        Читать дальше
                    </a>
                </p>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <h3>Постов нету</h3>
<?php endif; ?>
</div>
<div class="col-lg-2">
    <?php
    if (is_active_sidebar('sidebar_right')){
        dynamic_sidebar('sidebar_right');
    }
    ?>
</div>

<?php the_posts_pagination(); ?> <!--пагинация-->


<?php get_footer(); ?>
