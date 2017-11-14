<?php 

$pageGetter = new Page();



if(!empty($_GET['page']))
{
	$page = $pageGetter->getOnePage($_GET['page']);
}
else
{
	$page = $pageGetter->getOnePage("Home");
}

if ($page == null)
{
    ?>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1>404</h1>
        </div>
    </div>
    <?php
}
else {
    ?>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2><?= $page->Name ?></h2>
            <p><?= $page->Text ?></p>
        </div>
    </div>
    <?php
}
