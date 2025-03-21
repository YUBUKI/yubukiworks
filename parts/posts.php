        <?php if ( have_posts() ) : ?>
        <ul>
            <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="scr-target">
                    <div class="thum"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
                    <div class="list">
                        <strong><?php the_time('Y年m月d日'); ?></strong>
                        <span><i class="fa-solid fa-object-group"></i> 
                            <?php
                            $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                            ?>
                        </span>
                        <h2><?php the_title(); ?></h2>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p class="noarticles">記事がありません。</p>
        <?php endif; ?>