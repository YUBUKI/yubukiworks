<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="YUBUKI WORKSはとあるフリーWebデザイナーがWeb制作・旅と写真・自由な生き方・ChatGPTについて書くブログです。">
    <title><?php the_title(); ?>｜YUBUKI WORKS｜とあるWebデザイナーのブログ</title>
<?php get_template_part('parts/meta'); ?>
</head>

<body>
    
    <header>
<?php get_template_part('parts/header'); ?>
    </header>

    <main id="single">

        <span class="position">個別記事</span>
        
        <h1>
            <?php the_title(); ?>
            <span>
                2025年3月16日 (デザイン)
            </span>
            <div id="eyecatch">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>
        </h1>
        
        <article>
            <?php the_content(); ?>
        </article>

        <?php
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>

    </main>

<?php get_template_part('parts/footer'); ?>