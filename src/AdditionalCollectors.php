<?php declare(strict_types=1);

namespace PHPDIDefinitions\ReactInspector;

use ReactInspector\CollectorInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\observableFromArray;

final class AdditionalCollectors implements CollectorInterface
{
    /** @var array<CollectorInterface>  */
    private array $collectors = [];

    public function add(CollectorInterface $collector): void
    {
        $this->collectors[] = $collector;
    }

    public function collect(): Observable
    {
        return observableFromArray($this->collectors)->flatMap(static function (CollectorInterface $collector): Observable {
            return $collector->collect();
        });
    }

    public function cancel(): void
    {
        // void
    }
}
