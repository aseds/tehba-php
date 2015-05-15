<?php
$uploads_dir = "../uploads/";
$tmp_name = $_FILES['photo']['tmp_name'];
$name = $_FILES['photo']['name'];

move_uploaded_file($tmp_name, "$uploads_dir/$name");
echo "uploaded $name <br> <a href='/'>home</a>";
?>
