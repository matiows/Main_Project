<?php  
include("../config.php");
include("../classes/User.php");
include("../classes/Doc.php");
include("../classes/Post.php");

$limit = 5; //Number of posts to be loaded per call

$posts = new Post($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>