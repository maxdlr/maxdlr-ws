<?php

class TopButtonItem
{
    private string $title;
    private string $link;
    private string $cssClass;

    public function __construct(string $title, string $link, string $cssClass)
    {
        $this->title = $title;
        $this->link = $link;
        $this->cssClass = $cssClass;
    }

    public function getTopButton(): void
    {
        $title = $this->title;
        $link = $this->link;
        $cssClass = $this->cssClass;

        include __DIR__ . '/../view/Home/top-button-content.php';
    }
}
