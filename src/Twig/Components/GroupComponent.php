<?php

namespace App\Twig\Components;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class GroupComponent
{
    public ?ArrayCollection $projects = null;
    public ?string $title = '';

}
