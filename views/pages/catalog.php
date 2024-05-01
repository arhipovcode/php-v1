<?php
include ENGINE . '/catalog.php';
include VIEWS . '/layouts/head.php';
include VIEWS . '/layouts/header.php';

$catalogs = getCatalogs();
?>

<main class="main">
    <div class="container">
        <h1 class="title">Страница каталога товаров</h1>

        <div class="catalogs">
            <?php foreach ($catalogs as $catalog): ?>
                <div class="catalogs__card">
                    <div class="catalogs__card-image">
                        <img src="/src/images/<?=$catalog['img_name']?>" alt="">
                    </div>
                    <div class="catalogs__card-content">
                        <h3 class="catalogs__card-title"><?=$catalog['title']?></h3>
                        <p class="catalogs__card-price">
                            Цена:
                            <span class="catalogs__card-price-count"><?=$catalog['price']?></span>
                            <span class="catalogs__card-currency"><?=$catalog['currency']?></span>
                        </p>
                        <p class="catalogs__card-desc">
                            <?=$catalog['description']?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php
include VIEWS . '/layouts/footer.php';
?>
