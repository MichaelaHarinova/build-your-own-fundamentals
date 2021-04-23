<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'config.php';

require "Model/Article.php";
require 'Model/Product.php';
require "Model/Connection.php";

require 'Controller/ArticleController.php';
require 'Controller/ProductController.php';
require 'Controller/HomepageController.php';

require 'Loader/ArticleLoader.php';
require 'Loader/ProductLoader.php';


if (!empty($_GET['page'])) {
    if ($_GET['page'] === 'articles') {
        $controller = new ArticleController();
        $controller->showTitlesOfArticles();
    }
    if ($_GET['page'] === 'products') {
        $controller = new ProductController();
        $controller->showProducts();
    }
    if ($_GET['page'] === 'article-detail' && !empty($_GET['article_slug'])) {
        $controller = new ArticleController();
        $controller->showArticleDetails($_GET['article_slug']);
    }

} else {
    $controller = new HomepageController();
    $controller->render();
}






