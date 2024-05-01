<?php
include ENGINE . "/menu.php";
$menu = getMenu();
?>

<header class="header">
    <div class="container">
        <nav class="header-nav">
            <ul class="header-nav__list">
              <?php
              foreach ($menu as $item): ?>
                <li class="header-nav__item">
                    <a href="<?= $item['link']?>" class="header-nav__link">
                      <?= $item['title']?>
                    </a>
                </li>
              <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
