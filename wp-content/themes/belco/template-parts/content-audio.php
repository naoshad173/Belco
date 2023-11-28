<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belco
 */

$belco_audio_url = function_exists('get_field') ? get_field('fromate_style') : NULL;
if (is_single()) :
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-audio mb-50'); ?>>
        <?php if (!empty($belco_audio_url)) : ?>
            <div class="postbox__thumb postbox__audio w-img p-relative">
                <?php echo wp_oembed_get($belco_audio_url); ?>
            </div>
        <?php endif; ?>

        <div class="postbox__content">
            <!-- blog meta -->
            <?php get_template_part('template-parts/blog/blog-meta'); ?>
            <h3 class="postbox__title">
                <?php the_title(); ?>
            </h3>
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
            <?php print belco_get_tag(); ?>
        </div>
    </article>

<?php else : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox__item format-audio mb-50'); ?>>
        <?php if (!empty($belco_audio_url)) : ?>
            <div class="postbox__thumb postbox__audio w-img p-relative">
                <?php echo wp_oembed_get($belco_audio_url); ?>
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