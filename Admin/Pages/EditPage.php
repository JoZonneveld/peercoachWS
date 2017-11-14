<?php
if(!empty($_GET['name']))
{
    $pageGetter = new Page();
    $page = $pageGetter->getOnePage($_GET['name']);

    //call update function
}
else
{
    header("Refresh: 0; URL=?page=PagesOverview");
}