<?php

use ReactInspector\CollectorInterface;

final class AdditionalCollectors
{
    private $collectors = [];

    public function add(CollectorInterface $collector): void
    {
        $this->collectors[] = $collector;
    }

    public function get(): array
    {
        return $this->collectors;
    }
}

