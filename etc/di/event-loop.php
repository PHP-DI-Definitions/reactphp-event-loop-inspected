<?php declare(strict_types=1);

use ReactInspector\EventLoop\LoopCollector;
use ReactInspector\MemoryUsage\MemoryUsageCollector;
use ReactInspector\Metrics;
use ReactInspector\MetricsStreamInterface;
use ReactInspector\Stream\IOCollector;
use function EventLoop\getLoop;
use React\EventLoop\LoopInterface;

return [
    LoopInterface::class => function () {
        return getLoop();
    },
    MetricsStreamInterface::class => function (LoopInterface $loop) {
        return new Metrics(
            $loop,
            1,
            new LoopCollector($loop),
            new MemoryUsageCollector($loop),
            new IOCollector()
        );
    },
];
