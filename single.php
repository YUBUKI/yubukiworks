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
        
        <div id="share">
            <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                <img src="/wp-content/themes/YUBUKIWORKS/images/share_x.png" alt="Xへ投稿をシェアする">
            </a>
            <a href="https://b.hatena.ne.jp/entry/?url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                <img src="/wp-content/themes/YUBUKIWORKS/images/share_hatebu.png" alt="はてなブックマークへ投稿をシェアする">
            </a>

            <a href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                <img src="/wp-content/themes/YUBUKIWORKS/images/share_line.png" alt="LINEへ投稿をシェアする">
            </a>
        </div>

        <?php
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>

    </main>

<?php get_template_part('parts/footer'); ?>