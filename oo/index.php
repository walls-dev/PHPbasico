<?php
################### CLASS ####################
class Post{
    public $likes = 0;
    public $comments = [];
    public $author;
}
################# OBJETO ######################
$post1 = new Post();
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;
###############################################
echo "POST 1: ".$post1->likes;