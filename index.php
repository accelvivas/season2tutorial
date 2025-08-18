<?php

if (isset($_POST['btn_1'])) {
    echo "NU Bulldogs";
}


if (isset($_POST['btn_2'])) {
    echo "Nationalians";
}
?>

<form method="POST">


<input type="submit" name="btn_1" value="Press 1">

<input type="submit" name="btn_2" value="Press 2">

</form>