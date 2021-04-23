<?php


class HomepageController
{
    public function render(): void
    {
        $title = "Homepage";
        require 'View/homepage.php';
    }
}
