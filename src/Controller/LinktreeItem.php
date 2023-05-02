<?php

class LinktreeItem
{
    private string $title;
    private ?string $subtitle;
    private string $link;
    private string $cssClass;
    private bool $dropDown = true;

    public function __construct(string $title, ?string $subtitle, string $link, string $cssClass, bool $dropDown)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->link = $link;
        $this->cssClass = $cssClass;
        $this->dropDown = $dropDown;
    }

    public function getLinktreeItem(): void
    {
        $title = $this->title;
        $subtitle = $this->subtitle;
        $link = $this->link;

        if ($this->dropDown === false) {
            $cssClass = $this->cssClass;
        } else {
            $cssClass = "$this->cssClass dropdown";
        }

        include __DIR__ . '/../view/Home/linktree-item-content.php';
    }
}
