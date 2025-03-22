        <a href="/" class="logo">
            <img src="/wp-content/themes/YUBUKIWORKS/images/logo.png" alt="YUBUKI WORKS">
            <span>とあるWebデザイナーのブログ</span>
        </a>

        <nav>
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
            <a href="/freelance">
                <i class="fa-solid fa-laptop"></i> 自由な生き方
                <span>
                    (<?php
                    $category_id = 4; // 取得したいカテゴリのID
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
        </nav>