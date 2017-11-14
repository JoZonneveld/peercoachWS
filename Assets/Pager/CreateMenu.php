<?php

$pageGetter = new Page();

$pages = $pageGetter->getPages();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">CMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                foreach ($pages as $page)
                {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="?page=<?= $page->Name ?>"><?= $page->Name ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>