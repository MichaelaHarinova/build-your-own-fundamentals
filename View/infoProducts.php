<?php

declare(strict_types=1);


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "includes/header.php";

?>
<section>

    <h1 class="text-info">Products</h1>
    <br>
    <main>
        <table class="table table-sm tableColor">
            <thead>
            <tr>
                <th class="th">Name</th>
                <th class="th">Price (tax included): €</th>
            </tr>
            </thead>
            <?php /** @var product[] $products */
            foreach ($products as $product) : ?>
                <tr>
                    <td>
                        <h6><?php echo $product->getName() ?></h6>
                    </td>
                    <td>
                        <h6><?php echo $product->getTvaPrice() ?></h6>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</section>
<?php require 'includes/footer.php' ?>
