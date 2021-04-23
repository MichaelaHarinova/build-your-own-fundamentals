<?php


class ArticleLoader
{
    /**
     * @param PDO $pdo
     * @return product[]
     */
    public static function getAllArticles(PDO $pdo): array
    {
        $handle = $pdo->query('SELECT * FROM article');
        $articlesArray = $handle->fetchAll();

        $articles = [];
        foreach ($articlesArray as $article) {
            $articles[] = new article($article['id'], $article['title'], $article['slug'], $article['content']);
        }
        return $articles;
    }

    public static function getArticle(string $slug, PDO $pdo) : article
    {
        $handle = $pdo->prepare('SELECT id, title, slug, content FROM article  WHERE slug = :slug');
        $handle->bindValue(':slug', $slug);
        $handle->execute();

        $article = $handle->fetch();
        if($article === false){
            throw new error('Article not found');
        }
        return new article($article['id'], $article['title'], $article['slug'], $article['content']);
    }
}
