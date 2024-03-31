<?php

namespace App\Domain\Baie;

use App\Domain\Common\Collection\ArrayCollection;

/**
 * @property Baie[] $elements
 */
final class BaieCollection extends ArrayCollection
{
    public function find(string $reference): ?Baie
    {
        return $this->findFirst(fn (Baie $item): bool => $item->reference() === $reference);
    }

    /**
     * sdep,baies - Somme des surfaces déperditives des baies (m²)
     */
    public function surface_deperditive(): float
    {
        return $this->reduce(fn (Baie $item, float $sdep): float => $sdep += $item->surface(), 0);
    }
}