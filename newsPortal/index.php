<?php
session_start();
include_once 'inc/Database.php';
require 'model/News.php';
require 'model/Category.php';
include_once 'model/Comments.php';
include_once 'view/news.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
?>