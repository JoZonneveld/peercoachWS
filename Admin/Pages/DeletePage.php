<?php
if(!empty($_GET['name']))
{
    $pageGetter = new Page();
    $page = $pageGetter->getOnePage($_GET['name']);

    print "Weet u zeker dat u de pagina " . $page->Name . " wilt verwijderen?";

    ?>
    <form method="post">
        <input type="submit" name="ja" value="Ja">
        <input type="submit" name="nee" value="Nee">
    </form>
    <?php
    if(isset($_POST['ja']))
    {
        print "not yet implemented delete";//call Delete function
        header("Refresh: 1; URL=?page=PagesOverview"); // refresh to pageoverview after 1 sec
    }


    else if (isset($_POST['nee']))
        header("Refresh: 0; URL=?page=PagesOverview"); // refresh back to pageoverview
}
else
{
    header("Refresh: 0; URL=?page=PagesOverview");
}