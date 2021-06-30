<?php
$name = "gallery/" . $_FILES["filename"]["name"];
move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
header("Location: index.php");
