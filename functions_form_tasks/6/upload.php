<?php

$tmp = explode('.', $_FILES["filename"]["name"]);
$mime = end($tmp);
$name = 'gallery' . '/' . uniqid(mt_rand()) . '.' . $mime;
move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
header("Location: index.php");
