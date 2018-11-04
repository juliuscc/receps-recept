<?php
include("config.php");

$username = $_POST['username'];
$recipe = $_POST['recipe'];
$comment = $_POST['comment'];
$recipe_index = intval($_POST['recipe_index']);

$query = "INSERT INTO `comments` (`id`, `recipe`, `username`, `comment`) VALUES (NULL, '$recipe', '$username', '$comment')";

mysqli_query($db, $query) or die('Oops something broke! Please try again at a later time.');

echo $query;

header("location: recipe_page.php?recipe_index=$recipe_index");
