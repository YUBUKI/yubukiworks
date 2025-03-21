<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="YUBUKI WORKSはとあるフリーWebデザイナーがWeb制作・旅と写真・自由な生き方・ChatGPTについて書くブログです。">
    <title>お問い合わせ｜YUBUKI WORKS｜とあるWebデザイナーのブログ</title>
<?php get_template_part('parts/head'); ?>
</head>

<body>
    
    <header>
<?php get_template_part('parts/header'); ?>
    </header>

    <main id="contact">
        <p class="catch">ご相談だけでもぜひ気兼ねなくお送り下さい <i class="fa-solid fa-paper-plane"></i></p>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();?>
 
<?php the_content();?>
 
<?php endwhile; ?>
<?php endif; ?>
    </main>
    
<?php get_template_part('parts/footer'); ?>