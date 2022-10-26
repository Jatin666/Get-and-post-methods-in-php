<?php
if(isset($_GET["name"]) || isset($_GET["age"])){

    echo "hi ". $_GET['name']. "<br/>";
    echo "your age is ". $_GET['age']. "<br/>";
    exit();
}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="get">
        Name:  <input type="text" name = "name" />
        Age : <input type="text" name="age" />
        submit : <input type="submit" value="submit">
    </form>
    </body>
</html>