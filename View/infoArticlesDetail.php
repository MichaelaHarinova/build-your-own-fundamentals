<?php

declare(strict_types=1);


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "includes/header.php";

?>
<section>
    <h1 class="text-info card-body">Article</h1>

    <article class="card-body tableColor" style="width: 60rem;">
    <h4><?php /** @var Article $articleDetail */ ?>
         <?php echo $articleDetail->getTitle() ?></h4>
    <div>
        <div>
            <p><?php echo $articleDetail->getContent() ?></p>
        </div>
    </div>
    </article>
</section>
<?php require 'includes/footer.php' ?>
