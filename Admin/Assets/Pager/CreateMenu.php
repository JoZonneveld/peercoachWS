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
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="?page=CreatePage">Create page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="?page=EditPage">Edit page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="?page=DeletePage">Delete page</a>
                </li>
            </ul>
        </div>
    </div>
</nav>