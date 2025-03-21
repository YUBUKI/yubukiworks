<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="YUBUKI WORKSはとあるフリーWebデザイナーがWeb制作・旅と写真・自由な生き方・ChatGPTについて書くブログです。">
    <title>YUBUKI WORKS｜とあるWebデザイナーのブログ</title>
<?php get_template_part('parts/meta'); ?>
</head>

<body>
    
    <header>
<?php get_template_part('parts/header'); ?>
    </header>

    <main id="index">
        
        <h1>トップページ</h1>
        
        <?php get_template_part('parts/posts'); ?>

    </main>

<?php get_template_part('parts/footer'); ?>