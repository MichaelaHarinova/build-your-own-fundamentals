<?php

declare(strict_types=1);


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "includes/header.php";

?>
<section>

    <h1 class="text-info">Articles</h1>
    <br>
    <main>
        <table class="table table-sm tableColor">
        <thead>
            <tr>
                <th class="th">Title</th>
                <th></th>
            </tr>
        </thead>
            <?php
            /** @var article $articles */
            foreach ($articles as $article): ?>
                <tr>
                    <td>
                        <h6 class=""><?php echo $article->getTitle() ?></h6>
                    </td>
                    <td>
                        <a class="linkColor" href="../index.php?page=article-detail&article_slug=<?= $article->getSlug() ?>">Tell me
                                more</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</section>
<?php require 'includes/footer.php' ?>
