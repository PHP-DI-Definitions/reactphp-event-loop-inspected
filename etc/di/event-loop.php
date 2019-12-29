<?php declare(strict_types=1);

use function EventLoop\getLoop;
use React\EventLoop\LoopInterface;

return [
    LoopInterface::class => function () {
        return getLoop();
    },
];
