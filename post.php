<?php

if (isset($_POST["name"]) || isset($_POST["age"])) {
    if (preg_match("/[^A-za-z'-]/", $_POST['name'])) {
        die("Invalid name. Name should be alpha");
    }
    echo "Hello ". $_POST['name']."<br/>";
    echo "Your age is ".$_POST['age']."<br/>";
    exit();
}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
        Name:  <input type="text" name = "name" />
        Age : <input type="text" name="age" />
        submit : <input type="submit" value="submit">
    </form>
    </body>
</html>