<?php

namespace PHPDIDefinitions\ReactInspector;

use ReactInspector\CollectorInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\observableFromArray;

final class AdditionalCollectors implements CollectorInterface
{
    private $collectors = [];

    public function add(CollectorInterface $collector): void
    {
        $this->collectors[] = $collector;
    }

    public function collect(): Observable
    {
        return observableFromArray($this->collectors)->map(function (CollectorInterface $collector) {
            return $collector->collect();
        });
    }

    public function cancel(): void
    {
        // void
    }
}

