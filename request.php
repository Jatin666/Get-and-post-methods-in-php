<?php
if(isset($_REQUEST["name"]) || isset($_REQUEST["age"])){

    echo "hi ". $_REQUEST['name']. "<br/>";
    echo "your age is ". $_GET['age']. "<br/>";
    exit();
}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="request">
        Name:  <input type="text" name = "name" />
        Age : <input type="text" name="age" />
        submit : <input type="submit" value="submit">
    </form>
    </body>
</html>