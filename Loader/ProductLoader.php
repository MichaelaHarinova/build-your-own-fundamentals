<?php


class ProductLoader
{
    /**
     * @param PDO $pdo
     * @return product[]
     */
    public static function getAllProducts(PDO $pdo): array
    {
        $handle = $pdo->query('SELECT * FROM product');
        $productsArray = $handle->fetchAll();

        $products = [];
        foreach ($productsArray as $product) {
            $products[] = new product($product['id'], $product['name'], $product['price'], $product['tax']);
        }
        return $products;
    }
}
