<?php


$pageGetter = new Page();

$pages = $pageGetter->getPages();


foreach ($pages as $page)
{
    print "<h5>" . $page->Name . "</h5>";
    print "<a href='?page=DeletePage&name=" . $page->Name . "'>Delete page</a> <br>";
    print "<a href='?page=EditPage&name=" . $page->Name . "'>Edit page</a> <br> <hr>";
}