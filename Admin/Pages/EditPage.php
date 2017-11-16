<?php
if(!empty($_GET['name']))
{
    $pageGetter = new Page();
    $page = $pageGetter->getOnePage($_GET['name']);

    ?>
    <h4>Update pagina</h4><br>
    <form method="post">
        <input type="text" name="Name" placeholder="Insert page name"/>
        <br>
        <br>
        <textarea name="Text" placeholder="Insert page text" cols="100"></textarea>
        <br>
        <br>
        <input type="submit" name="update" value="Update">
        <input type="submit" name="back" value="Back">

    </form>

    <?php

    if(isset($_POST['back']))
    {
        print "U wordt terug gestuurd";
        header("Refresh: 1; URL=?page=PagesOverview");
    }

    if (isset($_POST['update']))
    {
        //call update function
    }


}
else
{
    header("Refresh: 0; URL=?page=PagesOverview");
}