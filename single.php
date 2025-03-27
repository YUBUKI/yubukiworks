<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="description" content="YUBUKI WORKSはとあるフリーWebデザイナーがWeb制作・旅と写真・自由な生き方・ChatGPTについて書くブログです。">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@yubukiworks">
    <meta name="twitter:title" content="<?php the_title(); ?>">
    <meta name="twitter:description" content="とあるWebデザイナーのブログ">
    <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
    <title><?php the_title(); ?>｜YUBUKI WORKS｜とあるUIデザイナーのブログ</title>
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
                <?php the_time('Y年m月d日'); ?> 
                (<?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    }
                ?>)
            </span>
            <div id="eyecatch">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>
        </h1>
        
        <article>
            <?php the_content(); ?>
        </article>
        
        <div id="btmnv">
            <a href="/"><i class="fa-solid fa-house"></i> HOME</a>
            <a href="/webdesign">
                <i class="fa-solid fa-code"></i> Web制作
                <span>
                    (<?php
                    $category_id = 2; // 取得したいカテゴリのID
                    $category = get_category($category_id);
                    echo '' . $category->count;
                    ?>)
                </span>
            </a>
            <a href="/photography">
            <i class="fa-solid fa-camera-retro"></i> 旅と写真
                <span>
                    (<?php
                    $category_id = 3; // 取得したいカテゴリのID
                    $category = get_category($category_id);
                    echo '' . $category->count;
                    ?>)
                </span>
            </a>
            <a href="/chatgpt">
                <i class="fas fa-project-diagram"></i> ChatGPT
                <span>
                    (<?php
                    $category_id = 5; // 取得したいカテゴリのID
                    $category = get_category($category_id);
                    echo '' . $category->count;
                    ?>)
                </span>
            </a>
            <a href="/books">
                <i class="fa-solid fa-book-open"></i> 読んだ本
                <span>
                    (<?php
                    $category_id = 4; // 取得したいカテゴリのID
                    $category = get_category($category_id);
                    echo '' . $category->count;
                    ?>)
                </span>
            </a>
            <a href="/other">
                <i class="fa-solid fa-file-pen"></i> その他
                <span>
                    (<?php
                    $category_id = 6; // 取得したいカテゴリのID
                    $category = get_category($category_id);
                    echo '' . $category->count;
                    ?>)
                </span>
            </a>
        </div>

    </main>

<?php get_template_part('parts/footer'); ?>