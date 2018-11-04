<?php
include("config.php");

$comment_id = intval($_POST['id']);
$recipe_index = intval($_POST['recipe_index']);

$query = "DELETE FROM comments WHERE id = '$comment_id'";

mysqli_query($db, $query) or die('Oops something broke! Please try again at a later time.');

echo $query;

header("location: recipe_page.php?recipe_index=$recipe_index");
