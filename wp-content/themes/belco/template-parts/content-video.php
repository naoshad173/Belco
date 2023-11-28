<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belco
 */

$belco_video_url = function_exists('get_field') ? get_field('fromate_style') : NULL;

if (is_single()) :
?>

    <article id="post-<?php the_ID(); ?>" class="<?php post_class('news-details__left news-details-wrapper format-video'); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <div class="postbox__thumb postbox__video w-img p-relative">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                </a>
                <?php if (!empty($belco_video_url)) : ?>
                    <a href="<?php print esc_url($belco_video_url); ?>" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="news-details__author-and-meta">
            <!-- blog meta -->
            <?php get_template_part('template-parts/blog/blog-meta'); ?>
        </div>
        <h3 class="news-details__title-1"><?php the_title(); ?></h3>
        <div class="postbox__text">
            <?php the_content(); ?>
            <?php
            wp_link_pages([
                'before'      => '<div class="page-links">' . esc_html__('Pages:', 'belco'),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ]);
            ?>
        </div>
        <div class="news-details__tag-and-social">
            <div class="news-details__tag">
                <?php print belco_get_tag(); ?>
            </div>
        </div>
    </article>

<?php else : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-video mb-50'); ?>>
        <?php if (has_post_thumbnail()) : ?>
            <div class="postbox__thumb postbox__video w-img p-relative">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                </a>
                <?php if (!empty($belco_video_url)) : ?>
                    <a href="<?php print esc_url($belco_video_url); ?>" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="news-one__content">
            <div class="news-one__content-top">
                <!-- blog meta -->
                <?php get_template_part('template-parts/blog/blog-meta'); ?>
                <h3 class="news-one__title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="news-one__text"><?php the_excerpt(); ?></p>
            </div>
            <div class="news-one__person-and-date">
                <div class="news-one__person">
                    <div class="news-one__person-text">
                        <p>by <?php print get_the_author(); ?> on</p>
                    </div>
                </div>
                <div class="news-one__date">
                    <p><span class="fa-light fa-calendar-days"></span><?php the_time(get_option('date_format')); ?></p>
                </div>
            </div>
        </div>
    </article>

<?php
endif; ?>