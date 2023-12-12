<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class LinkComponent
{
    public string $title;
    public ?string $description = null;

}
