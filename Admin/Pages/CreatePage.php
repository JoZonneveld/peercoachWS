<h4>Create a page</h4><br>
<form method="post">
    <input type="text" name="Name" placeholder="naam van de pagina" required/>
    <br>
    <br>
    <textarea name="Text" placeholder="Text voor de website" cols="100" required></textarea>
    <br>
    <br>
    <input type="submit" name="go" value="Add">
</form>
<?php

if(isset($_POST['go']))
{
    $Name = $_POST['Name'];
    $Text = $_POST['Text'];

    $page = new SinglePage($Name, $Text);

    $page->AddPage();
}