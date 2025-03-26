        <a href="/" class="logo">
            <img src="/wp-content/themes/YUBUKIWORKS/images/logo.png" alt="YUBUKI WORKS">
            <span>とあるUIデザイナーの気ままなブログ</span>
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
        </nav>