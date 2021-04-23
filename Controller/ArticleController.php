<?php
declare(strict_types = 1);

class ArticleController
{
    private Connection $db;

    public function __construct()
    {
        $this->db = new Connection();
    }
    public function showTitlesOfArticles(): void
    {
        $articles = ArticleLoader::getAllArticles($this->db);
        $title = "Articles";
        require 'View/infoArticles.php';
    }

    public function showArticleDetails(string $slug): void
    {
        try{
            $articleDetail = ArticleLoader::getArticle($slug, $this->db);
            $title = "Article";
            require 'View/infoArticlesDetail.php';
        }catch(error $e){
            $error= $e->getMessage();
            $title = "404 Error";
            require 'View/errorPage.php';

            exit;
        }

    }
}
