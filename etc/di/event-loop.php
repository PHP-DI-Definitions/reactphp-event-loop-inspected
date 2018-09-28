<?php

use React\EventLoop\LoopInterface;
use function EventLoop\getLoop;

return [
    LoopInterface::class => function () {
        return getLoop();
    },
];
